<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shop extends Controller
{
  public function index (){
    return view ('shop');
  }
}
