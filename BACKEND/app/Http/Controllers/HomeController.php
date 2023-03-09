<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        
        if(auth()->user()->code==0){
        return view('home');
        }else{
            $data = User::all();
            return view('confirm-otp',['users' => $data]);   
        }
    }

    public function superHome(){
       

        return view('super-home');
    }
    public function adminTable(){
        $data = User::all();
       
        return view('superadmin/admin-table',['users' => $data]);
    }

    public function approval()
    {
        return view('approval');
    }

    public function confirmOtpForm(Request $request){
   
    $user = user::find($request->id);
    if($request->code==auth()->user()->code){
    $user->code = 0;
    $user->save();
    return view('home');
    
}
dd('error');
}
}
