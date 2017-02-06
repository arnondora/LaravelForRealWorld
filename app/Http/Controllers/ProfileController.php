<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function getProfile ()
    {
      $adam = ['name' => 'Adam Levine', 'occupation' => 'Singer - Maroon 5', 'website' => 'maroon5.com', 'tags' => '#Maroon5 #Adam'];
      $arnon = ['name' => 'Arnon Puitrakul', 'occupation' => 'Student - Faculty of ICT, Mahidol University', 'website' => 'https://www.arnondora.in.th', 'tags' => '#MUICT12 #MSP17 #YWC14'];
      return view('profile',['profiles' => [$adam, $arnon]]);
    }

    function getYear ()
    {
      $bYear = 1996;

      return $bYear + 543;
    }

    function getName ()
    {
      return "Arnon";
    }

    function getSurname ()
    {
      return "Puitrakul";
    }

    function getBirthday ()
    {
      return date_create("08/03/1996");
    }

    function getBirthYear ($year)
    {
      return $year - 543;
    }

    function getflskjf ()
    {
      $test1 = "Hello";

      $test2 = "World";

      return $test1 . " " . $test2;
    }
}
