<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeLaravel extends Controller
{
    public function lavarelIndex(){

      return view('welcome');
    }
}
