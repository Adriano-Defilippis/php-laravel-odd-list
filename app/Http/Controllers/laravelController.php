<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{

    public function laravelHome(){

      return view('welcome');
    }
}
