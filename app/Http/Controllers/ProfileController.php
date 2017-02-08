<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function getProfile ()
  {

    return view ('profile');
  }
    //function getYear ()
    //{
      //$bYear = 2017;
      //return $bYear +543;
    //}

  public function getName ()
    {
      $Name = "Karun";
      $Surname = "Lawanvit";
      $bDate = '28';
      $bMonth = 'January';
      $bYear = "2531";
        return  $Name . ' ' . $Surname . ' ' . $bDate . ' ' .$bMonth . ' ' . ($bYear -543);
    }
}
