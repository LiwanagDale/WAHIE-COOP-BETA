<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\MailOtp;
use App\Models\EmailOtp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    public function update(Request $request)
    {
        
        $user = user::find($request->id);
        $user->status = 'verified';
        $user->save();


        $code = $user->code;
        $email = $user->email;
        EmailOtp::create([
            'user_email'=> $email,
            'code' => $code
        ]);
        Mail::to(auth()->user()->$email)->send(new MailOtp($code,$email));

        
     
    }

    public function disable(Request $request)
    {
        $user = user::find($request->id);
        $user->status = 'disable';
        $user->save();


 
    }
}
?>