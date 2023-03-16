<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\MailOtp;
use App\Models\EmailOtp;
use App\Mail\enableAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


//controller for superadmin
class superadminController extends Controller
{
    public function update(Request $request)
    {
        
        $user = user::find($request->id);
       $status = $request->status;

        if($user->status==1){
        
                $user->status = $status;
    
        }
        elseif($user->status!=1){
            $user->status =  $status;

            if($user->code!=0){
            $code = $user->code;
            $email = $user->email;
            EmailOtp::create([
                'user_email'=> $email,
                'code' => $code
            ]);
            Mail::to(auth()->user()->$email)->send(new MailOtp($code,$email));
            }

            elseif($user->code==0){
                $code = 0;
                $email = $user->email;
                EmailOtp::create([
                    'user_email'=> $email,
                    'code' => $code
                ]);
                Mail::to(auth()->user()->$email)->send(new enableAdmin($code,$email));
            }

        }
        $user->save();
        return back();
    }


}
?>