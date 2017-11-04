<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use Auth;
class GuestController extends Controller
{
	protected $request;
	public $user_id;
	public function __construct(Request $request)
    {
        $this->request = $request;
        dd( auth()->guard('user')->check());
        $this->user_id = Auth::guard('user')->user()->id;
    }
    /*edit account page view*/
    public function view_edit_account(){
    	//$profile = Instructor::uservaluefetch(auth()->guard('user')->user()->id);
    //dd($profile);
    	$data = [
    				//'profile' => $profile
    			];
    	return view('Guest.edit_account',$data);
    }
    public function postprofile(){
    	$inputArr = $this->request->only(
    										'user_first_name',
    										'user_sur_name',
    										'user_abbreviation_name',
    										'user_dob',
    										'user_image_name',
    										'user_street_number',
    										'user_postcode_town',
    										'user_country',
    										'user_state',
    										'user_cty',
    										'user_phone',
    										'user_mobile',
    										'user_email',
    										'user_pvt_street_number',
    										'user_pvt_postcode',
    										'user_pvt_country',
    										'user_pvt_state',
    										'user_pvt_city',
    										'user_pvt_phone',
    										'user_pvt_mobile',
    										'user_pvt_email',
    										'mobile_client',
    										'ops_mobile_client',
    										'display_overview',
    										'user_note',
    										'credit_ins',
    										'bank_code',
    										'account_number',
    										'Iban',
    										'swiftBIC',
    										'accunt_owner',
    										'hours_workingday',
    										'mins_teachingunit',
    										'basic_wage',
    										'practice_session',
    										'highway_driving',
    										'overland_journey',
    										'ligithing_ride',
    										'Maneuvers',
    										'lessons',
    										'Surcharge',
    										'Instruction',
    										'exams',
    										'Other',
    										'bonas1',
    										'bonusA2',
    										'bonusA3',
    										'family_status',
    										'tax_bracket',
    										'health_insurance',
    										'entry_date','holidays',
    										'remaining_holidays',
    										'actives',
    										'user_title'
    									);

		/*image upload*/
		$userimage       = $request->file('user_image_name');        
		
		/*general details insert*/			
		$general_details =  [
								'user_id'				=> $user_id,
								'user_title' 			=> $inputArr['user_title'],
								'user_first_name'		=> $inputArr['user_first_name'],
								'user_sur_name'			=> $inputArr['user_sur_name'],
								'user_abbreviation_name'=> $inputArr['user_abbreviation_name'],
								'user_dob'				=> $inputArr['user_dob']
							];
		$general_id     = Instructor::general_update($user_id,$general_details);

		/*image insert*/
		if($userimage){
			$path                       = 	public_path('uploadimages'.'/'.'Instructor'.'/');
			$image                      = 	imageupload::any_upload($userimage,$path);		
	        $paths                      = 	url('uploadimages'.'/'.'Instructor'.'/').'/'.$image;
	        $image_details				= 	[
	        									'user_id' 			=> $user_id,
	        									'user_image_name'	=> $paths
	        								];
	        $image_id  = Instructor::image_update($user_id,$image_details);
		}	

		/*node*/
		$user_note  = [
						'user_id'	=> $user_id,
						'user_note'	=> $inputArr['user_note']
					  ];
			$user_note_id  = Instructor::user_note_update($user_id,$user_note);

		/*private*/
		$private_details = 	[
								'user_id'			 => $user_id,
								'user_pvt_street_number' => $inputArr['user_pvt_street_number'],
								'user_pvt_postcode'		 => $inputArr['user_pvt_postcode1'].$inputArr['user_pvt_postcode2'],
								'user_pvt_state'		 => $inputArr['user_pvt_state'],
								'user_pvt_city'			 => $inputArr['user_pvt_city'],
								'user_pvt_phone'		 => $inputArr['user_pvt_phone'],
								'user_pvt_mobile'		 => $inputArr['user_pvt_mobile'],
								'user_pvt_email'		 => $inputArr['user_pvt_email']
							];
			$private_details_id = Instructor::private_details_update($user_id,$private_details);

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
			$operation_details_id =Instructor::operation_detail_update($operation_details);

    	/*user_notifications_mgmt table update*/

    	/*user_persondata_bankdetails table update*/
    		$personaldata = Instructor::bankdetails_fetch($user_id);
    		$user_persondata_insert = 	[
    										'user_id'    	 => $user_id,
    										'credit_ins' 	 => $inputArr['credit_ins'],
    										'bank_code'	 	 => $inputArr['bank_code'],
    										'account_number' => $inputArr['account_number'],
    										'Iban'			 => $inputArr['Iban'],
    										'swiftBIC'		 => $inputArr['swiftBIC'],
    										'accunt_owner'	 => $inputArr['accunt_owner']
    									];
    		if($personaldata){
    			$update_user_persondata = Instructor::user_persondata_insert($user_id,$user_persondata_insert);
    		}
    		else{
    			$insert_user_persondata = Instructor::user_persondata_update($user_persondata_insert);
    		}
    	/*user_persondata_salary table insert or update*/
    		$user_salary_data  = 	[
    									'user_id' 			=> $user_id,
    									'hours_workingday'	=> $inputArr['hours_workingday'],
    									'mins_teachingunit'	=> $inputArr['mins_teachingunit'],
    									'basic_wage'		=> $inputArr['basic_wage'],
    									'practice_session'  => $inputArr['highway_driving'],
    									'overland_journey'  => $inputArr['overland_journey'],
    									'ligithing_ride'    => $inputArr['ligithing_ride'],
    									'Maneuvers'			=> $inputArr['Maneuvers'],
    									'lessons'			=> $inputArr['lessons'],
    									'Surcharge'			=> $inputArr['Surcharge'],
    									'Instruction'		=> $inputArr['Instruction'],
    									'exams'				=> $inputArr['exams'],
    									'Other'				=> $inputArr['Other'],
    									'bonas1'			=> $inputArr['bonas1'],
    									'bonusA2'			=> $inputArr['bonusA2'],
    									'bonusA3'			=> $inputArr['bonusA3']
    								];
    		$salary_details = Instructor::user_salary_details_fetch($user_id);
    		if($salary_details){
    			$update_salary_info = Instructor::user_salary_update($user_id,$inputArr);
    		} else {
    			$insert_salary_info = Instructor::user_salary_insert($inputArr);
    		}
    	/*user_persondata_taxfigure table insert or update*/
    		$user_taxfigure_data  = [
    									'user_id'			=> $user_id,
    									'family_status'		=> $inputArr['family_status'],
    									'tax_bracket'		=> $inputArr['tax_bracket'],
    									'health_insurance'  => $inputArr['health_insurance']
    								];
    		$taxfigure_details = Instructor::user_taxfigure_details_fetch($user_id);
    		if($taxfigure_details){
    			$taxfigure_update = Instructor::user_taxfigure_update($user_id,$inputArr);
    		} else{
    			$taxfigure_insert = Instructor::user_taxfigure_insert($inputArr);
    		}

    	/*user_persondata_vacation table insert or update*/
    		$user_vacation_data = 	[
    									'user_id'  			=> $user_id,
    									'entry_date'		=> $inputArr['entry_date'],
    									'holidays'			=> $inputArr['holidays'],
    									'remaining_holidays'=> $inputArr['remaining_holidays'],
    									'actives'			=> $inputArr['actives']
    								]; 

    		$user_vacation_details = Instructor::vacation_details_fetch($user_id);
    		if($user_vacation_details){
    			$user_vacation_insert = Instructor::vacation_update($id,$inputArr);
    		} else {
    			$user_vacation_insert = Instructor::vacation_insert($inputArr);
    		}
    		return redirect('showaccount')->with('success', 'Your profileupdate successfully');
    }
}
