<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarunController extends Controller
{
  public function getProfile ()
  {

    return view ('profile');
  }
}
