<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
  public function index(){
    return view('login');
  }

  public function store(Request $request)
    {
      	// dd($request);

        $this->validate($request,
                          ['email'=>'required'],
                          ['password'=>'required']
                       );

        $username = $request->email;
        $password = $request->password;
       
        
        $usernames = DB::table('data_pelanggan')->where(['username'=>$username, 'password'=>$password])->first();
        
        // dd($usernames);
        if($usernames == '' || $usernames == null){

           return redirect('/signin')->with('failed','Login gagal');

        } else{
        	Session::put('login', $username);

           return redirect('/spokatmania')->with('success', 'Login Berhasil');
        }



    }
}
