<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Members;

class MemberInsertController extends Controller
{
    //
    public function insertform(){
        $data=Members::all();
            return view('member_create', ['members'=>$data]);
        }
        public function insert(Request $request){
            
            Members::create([
                'account_id' => $request->account_id,
                'first_name' => $request->account_id,
                'middle_name' => $request->account_id,
                'last_name' => $request->account_id,
                'suffix' => $request->account_id,
                'first_name' => $request->account_id,
                'birthdate' => $request->account_id,
                'address' => $request->account_id,
                'spouse' => $request->account_id,
                'civil_status' => $request->account_id,
                'tin_number' => $request->account_id,
                'occupation' => $request->account_id,
                'gender' => $request->account_id,
                'department' => $request->account_id,
                'employment_status' => $request->account_id,
                'company_name' => $request->account_id,
                'company_address' => $request->account_id,
                'job_title' => $request->account_id,
                'email' => $request->account_id,
                'mobile_number' => $request->account_id
            ]);

        // $account_id = $request->input('account_id');
        // $first_name = $request->input('first_name');
        // $middle_name = $request->input('middle_name');
        // $last_name = $request->input('last_name');
        // $suffix = $request->input('suffix');
        // $birthdate = $request->input('birthdate');
        // $address = $request->input('address');
        // $spouse = $request->input('spouse');
        // $tin_number = $request->input('tin_number');
        // $occupation = $request->input('occupation');
        // $gender = $request->input('gender');
        // $department = $request->input('department');
        // $employment_status = $request->input('employment_status');
        // $company_name = $request->input('company_name');
        // $company_address = $request->input('company_address');
        // $job_title = $request->input('job_title');
        // $email = $request->input('email');
        // $mobile_number = $request->input('mobile_number');
        // $data=array("account_id"=>$account_id,
        //             "first_name"=>$first_name,
        //             "middle_name"=>$middle_name,
        //             "last_name"=>$last_name,
        //             "suffix"=>$suffix,
        //             "birthdate"=>$birthdate,
        //             "address"=>$address,
        //             "spouse"=>$spouse,
        //             "tin_number"=>$tin_number,
        //             "occupation"=>$occupation,
        //             "gender"=>$gender,
        //             "department"=>$department,
        //             "member_office"=>$member_office,
        //             "employment_status"=>$employment_status,
        //             "company_name"=>$company_name,
        //             "company_address"=>$company_address,
        //             "job_title"=>$job_title,
        //             "email"=>$email,
        //             "mobile_number"=>$mobile_number
        //             );
        //     DB::table('members')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
        
}
