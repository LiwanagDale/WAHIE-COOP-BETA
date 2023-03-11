<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\MailOtp;
use App\Models\EmailOtp;
use App\Mail\enableAdmin;
use App\Models\EmailEnabled;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    public function update(Request $request)
    {
    
        $user = user::find($request->id);

        if($user->status=='verified'){
            $user->status = 'disabled';
        }
        elseif($user->status!='verified'){
            $user->status = 'verified';

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

    }


}
?>