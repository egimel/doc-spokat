<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cart extends Controller
{
    public function index(Request $request){
      dd($request); 
      return view('cart');
  }

  public function store(Request $request)
  {

    $this->vslidate($request,
                      ['id_produk' => 'required'],
                      ['id_user' => 'required']
                    );

    $id_produk = $request->id_produk;
    $id_user = $request->id_user;

    // $id_produk = DB::table('transaksi')->where([''])

  }
}
