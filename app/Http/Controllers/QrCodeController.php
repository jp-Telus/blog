<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    //
    public function index()
    {
      // add new variable for ticket jp-0001
      $new_var = 'new variable for jp-0001';
      return view('qrcode');
    }

    public function new_function_add()
    {
      // New fundtion added for ticket jp-0002 

      $i =0;
      $i++;

    }
}
