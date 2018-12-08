<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\data_user;


class register extends Controller
{
  public function index (){
    return view ('register');
  }

  public function daftar (Request $request){

  	$cek = data_user::all()->where('username', $request->username);
  	// dd($request);
  	// 
  	$tgl = explode('/', $request->tanggal_lahir);
  	// return $tgl[2].'-'.$tgl[1].'-'.$tgl[0];
  	if(count($cek)==0){
  		$id_user = data_user::all()->MAX('id_user')+1;
  		DB::table('data_pelanggan')->insert([
  			'id_pelanggan' => $id_user,
  			'nama_depan' => $request->nama_depan,
  			'nama_belakang' => $request->nama_belakang,
  			'username' => $request->username,
  			'password' => $request->password,
  			'retype_password' => $request->retype_password,
  			'tanggal_lahir' => $tgl[2].'-'.$tgl[1].'-'.$tgl[0],
  			'alamat' => $request->alamat,
  			'no_handphone' => $request->no_handphone,
  			'jenis_kelamin' => $request->jenis_kelamin,
  			'email' => $request->email,

  		]);

  		DB::table('data_user')->insert([
  			'username' => $request->username,
  			'password' => $request->password,
  			'id_user' => $id_user,
  		]);
  		return redirect('signin')->with('login', '1');
  	}else{
  		return redirect ('signup')->with('register','failed');
  	}
  	
  }
}

