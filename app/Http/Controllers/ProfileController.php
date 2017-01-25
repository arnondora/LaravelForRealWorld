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

    function getName ($id)
    {
      return getCustomers()[$id-1]['Name'];
    }

    function getSurname ($id)
    {
      $customers =
      [
          ["Name" => 'Arnon', 'Surname' => 'Puitrakul'],
          ["Name" => "Lewis", "Surname" => 'Gunner']
      ];

      return $customers[$id-1]['Surname'];
    }

    function getflskjf ()
    {
      $test1 = "Hello";

      $test2 = "World";

      return $test1 . " " . $test2;
    }
}
