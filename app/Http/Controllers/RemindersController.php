<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Http\Request;

class RemindersController extends Controller
{
    public function getReset($token = null)
    {
        if (is_null($token)) {
            \App::abort(404);
        }

        return \View::make('Public.LoginAndRegister.ResetPassword')->with('token', $token);
    }
    public function postReset(Request $request)
    {
        $this->validate($request, [
            'token'    => 'required',
            'email'    => 'required',
            'password' => 'required|confirmed',
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = $this->passwords->reset($credentials, function ($user, $password) {
            $user->password = bcrypt($password);

            $user->save();

            $this->auth->login($user);
        });

        switch ($response) {
            case PasswordBroker::PASSWORD_RESET:
                \Session::flash('message', 'Password Successfully Reset');

                return redirect(route('login'));

            default:
                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
        }
    }
}
