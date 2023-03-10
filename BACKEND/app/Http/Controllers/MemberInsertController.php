<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberInsertController extends Controller
{
    //
    public function insertform(){
        return view('member_create');
        }
        public function insert(Request $request){
        $account_id = $request->input('account_id');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $suffix = $request->input('suffix');
        $birthdate = $request->input('birthdate');
        $address = $request->input('address');
        $spouse = $request->input('spouse');
        $tin_number = $request->input('tin_number');
        $occupation = $request->input('occupation');
        $gender = $request->input('gender');
        $department = $request->input('department');
        $member_office = $request->input('member_office');
        $employment_status = $request->input('employment_status');
        $company_name = $request->input('company_name');
        $company_address = $request->input('company_address');
        $job_title = $request->input('job_title');
        $email = $request->input('email');
        $mobile_number = $request->input('mobile_number');
        $data=array("account_id"=>$account_id,
                    "first_name"=>$first_name,
                    "middle_name"=>$middle_name,
                    "last_name"=>$last_name,
                    "suffix"=>$suffix,
                    "birthdate"=>$birthdate,
                    "address"=>$address,
                    "spouse"=>$spouse,
                    "tin_number"=>$tin_number,
                    "occupation"=>$occupation,
                    "gender"=>$gender,
                    "department"=>$department,
                    "member_office"=>$member_office,
                    "employment_status"=>$employment_status,
                    "company_name"=>$company_name,
                    "company_address"=>$company_address,
                    "job_title"=>$job_title,
                    "email"=>$email,
                    "mobile_number"=>$mobile_number
                    );
            DB::table('members')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
        
}
