<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularController extends Controller
{
    public function formular(Request $request)
    {
      $this->validate($request,
      [
        'username' => 'bail|required|min:3|max:35',
        'email' => 'required|email'
      ]);
      
      return 'Erfolg';
    }
}
