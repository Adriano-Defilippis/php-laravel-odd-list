<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mioController extends Controller
{

    public function listNumberPair(){

      $arrnum_disp = [];
      $arr_name="Lista di numeri pari da 10 a 100";

      for ($i=10; $i < 100; $i+=2) {

        $arrnum_disp[] = $i;
      }


      return view('oddEndPoint', compact('arrnum_disp', 'arr_name'));
    }
}
