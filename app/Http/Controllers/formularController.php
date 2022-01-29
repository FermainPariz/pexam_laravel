<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularController extends Controller
{
    public function formular(Request $request)
    {
      $eingabe = $request->eingabe;
      //compact übermittelt die eingabe mit
      return view('ausgabe', compact("eingabe"));
    }
}
