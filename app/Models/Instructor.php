<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Instructor extends Model
{

	/*User insert*/
    public static function user($inputArr){
    	return DB::table('users')->insertGetId($inputArr);
    }

    /*general insert*/
    public static function general($inputArr){
    	return DB::table('user_general_basic_details')->insertGetId($inputArr);
    }

    /*general update*/
    public static function general_update($id,$inputArr){
        return DB::table('user_general_basic_details')->where('user_id',$id)->update($inputArr);
    }

    /*image insert*/
    public static function image($inputArr){
    	return DB::table('user_general_image_details')->insertGetId($inputArr);
    }
    /*image update*/
    public static function image_update($id,$inputArr){
     return DB::table('user_general_image_details')->where('user_id',$id)->update($inputArr);   
    }
    /*user note*/
    public static function user_note($inputArr){
    	return DB::table('user_note')->insertGetId($inputArr);
    }

    /*user note update*/
    public static function user_note_update($id,$inputArr){
        return DB::table('user_note')->where('user_id',$id)->update($inputArr);
    }

    /*private details*/
    public static function private_details($inputArr){
    	return DB::table('user_general_private_details')->insertGetId($inputArr);
    }
     /*private details update*/
    public static function private_details_update($id,$inputArr){
        return DB::table('user_general_private_details')->where('user_id',$id)->update($inputArr);
    }

    /*operation_details*/
    public static function operation_details($inputArr){
    	return DB::table('user_general_operation_details')->insertGetId($inputArr);
    }

    /*private details*/
    public static function operation_detail_update($id,$inputArr){
        return DB::table('user_general_operation_details')->where('user_id',$id)->update($inputArr);
    }

    /*user_persondata_bankdetails fetch*/
    public static function bankdetails_fetch($id){
        return DB::table('user_persondata_bankdetails')->where('user_id',$user_id)->first();
    }
    /*user_persondata insert*/
    public static function user_persondata_insert($inputArr){
        return DB::table('user_persondata_bankdetails')->insert($inputArr);
    }
    /*user_persondata_update*/
    public static function user_persondata_update($id,$inputArr){
        return DB::table('user_persondata_bankdetails')->where('user_id',$id)->update($inputArr);
    }
    /*user salary info fetch*/
    public static function user_salary_details_fetch($id){
        return DB::table('user_persondata_salary')->where('user_id',$id)->first();
    }

    /*user salary insert*/
    public static function user_salary_insert($inputArr){
        return DB::table('user_persondata_salary')->insert($inputArr);
    }
    /*user taxfigure fetch*/
    public static function user_taxfigure_details_fetch($id){
        return DB::table('user_persondata_taxfigure')->where('user_id',$id)->first();
    }
    /*user taxfigure insert*/
    public static function user_taxfigure_insert($inputArr){
        return DB::table('user_persondata_taxfigure')->insert($inputArr);   
    }
    /*user taxfigure update*/
    public static function user_taxfigure_update($id,$inputArr){
        return DB::table('user_persondata_taxfigure')->where('user_id',$id)->update($inputArr);      
    }
    /*user vacation details*/
    public static function vacation_details_fetch($id){
        return DB::table('user_persondata_vacation')->where('user_id',$id)->first();
    }
    /*user vacation insert*/
    public static function vacation_insert($inputArr){
        return DB::table('user_persondata_vacation')->insert($inputArr);
    }   
    /*user vacation update*/
    public static function vacation_update($id,$inputArr){
        return DB::table('user_persondata_vacation')->where('user_id',$id)->update($inputArr);
    }
    /*user salary update*/
    public static function user_salary_update($id,$inputArr){
        return DB::table('user_persondata_salary')->where('user_id',$id)->update($inputArr);
    }
    /*fetch single value*/
    public static function uservaluefetch($id){
    	return $uservaluefetch     = DB::table('users')
    								->select('users.*','user_general_basic_details.user_title','user_general_basic_details.user_first_name','user_general_basic_details.user_sur_name','user_general_basic_details.user_abbreviation_name','user_general_basic_details.user_dob','user_general_image_details.user_image_name','user_note.user_note','user_general_private_details.user_street_number','user_general_private_details.user_postcode','user_general_private_details.user_country','user_general_private_details.user_state','user_general_private_details.user_city','user_general_private_details.user_phone','user_general_private_details.user_mobile','user_general_private_details.user_email')
    								->leftJoin('user_general_basic_details', 'users.id', '=', 'user_general_basic_details.user_id')
    								->leftJoin('user_general_image_details', 'users.id', '=', 'user_general_image_details.user_id')
    								->leftJoin('user_note', 'users.id', '=', 'user_note.user_id')
    								->leftJoin('user_general_private_details', 'users.id', '=', 'user_general_private_details.user_id')
    								->leftJoin('user_general_operation_details', 'users.id', '=', 'user_general_operation_details.user_id')
    								->where('users.id',$id)
    								->first();
    }
}
