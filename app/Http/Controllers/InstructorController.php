<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\imageupload;
use DB;
class InstructorController extends Controller
{
    public function showInstructor($id){
    	$user_details =  Instructor::uservaluefetch($id);
    	//dd($user_details);
    	$data 		  = [
    						'user_details' => $user_details
    					];
    	return view('Instructor.instructor',$data);
    }
    public function createInstructor(){
    	return view('Instructor.createInstructor');
    }
    public function viewinstructor(){
    	$instructorget = DB::table('users')->get();
    	$data = [
    				'instructorget' => $instructorget
    			];
    	return view('Instructor.viewinstructor',$data);	
    }
    public function postInstructor(Request $request){
    	dd($_POST);
    	$inputArr = $request->only('sreni');
    }
    public function createUser(Request $request){
		$inputArr = $request->only(
									'user_title',
									'user_title_name'
									'user_first_name',
									'user_sur_name',
									'user_abbreviation_name',
									'user_dob',
									'user_note',
									'user_street_number',
									'user_postcode1',
									'user_postcode2',
									'user_state',
									'user_state',
									'user_phone',
									'user_mobile',
									'user_email',
									'user_street_number1',
									'user_postcode_town1',
									'user_country1',
									'user_cty1',
									'user_phone1',
									'user_mobile1',
									'user_email1',
									'email',
									'nickname',
									'user_city',
									'user_sta1',
									'user_city1'
								);
		/*image upload*/
		$userimage       = $request->file('user_image_name');        
		/*user role*/
		$user_details  	 = 	[
								'name' 		=> $inputArr['user_first_name'],
								'email' 	=> $inputArr['email'],
								'user_role' => '1',
								'phone' 	=> $inputArr['user_phone'],
								'city' 		=> $inputArr['user_city']
							];
		$user_id       = Instructor::user($user_details);		
		/*general details insert*/			
		$general_details =  [
								'user_id'				=> $user_id,
								'user_title' 			=> $inputArr['user_title'],
								'user_first_name'		=> $inputArr['user_first_name'],
								'user_sur_name'			=> $inputArr['user_sur_name'],
								'user_abbreviation_name'=> $inputArr['user_abbreviation_name'],
								'user_dob'				=> $inputArr['user_dob']
							];
		$general_id     = Instructor::general($general_details);

		/*image insert*/
		if($userimage){
			$path                       = 	public_path('uploadimages'.'/'.'Instructor'.'/');
			$image                      = 	imageupload::any_upload($userimage,$path);		
	        $paths                      = 	url('uploadimages'.'/'.'Instructor'.'/').'/'.$image;
	        $image_details				= 	[
	        									'user_id' 			=> $user_id,
	        									'user_image_name'	=> $paths
	        								];
	        $image_id  = Instructor::image($image_details);
		}	

		/*node*/
		$user_note  = [
						'user_id'	=> $user_id,
						'user_note'	=> $inputArr['user_note']
					  ];
			$user_note_id  = Instructor::user_note($user_note);

		/*private*/
		$private_details = 	[
								'user_id'			 => $user_id,
								'user_street_number' => $inputArr['user_street_number'],
								'user_postcode'		 => $inputArr['user_postcode1'].$inputArr['user_postcode2'],
								'user_state'		 => $inputArr['user_state'],
								'user_city'			 => $inputArr['user_city'],
								'user_phone'		 => $inputArr['user_phone'],
								'user_mobile'		 => $inputArr['user_mobile'],
								'user_email'		 => $inputArr['user_email']
							];
			$private_details_id = Instructor::private_details($private_details);

		/*operation_details*/
		$operation_details = 	[
									'user_id'				=>  $user_id,
									'user_street_number'	=>	$inputArr['user_street_number1'],
									'user_postcode_town'	=>	$inputArr['user_postcode_town1'],
									'user_country'			=> 	$inputArr['user_country1'],
									'user_state'			=>	$inputArr['user_sta1'],
									'user_cty'				=>  $inputArr['user_city1'],
									'user_phone'			=>	$inputArr['user_phone1'],
									'user_mobile'			=> 	$inputArr['user_mobile1'],
									'user_email'			=> 	$inputArr['user_email1']
								];
			$operation_details_id =Instructor::operation_details($operation_details);
		return redirect('view-instructor');
    }
}
