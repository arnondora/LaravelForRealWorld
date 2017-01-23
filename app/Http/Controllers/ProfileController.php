<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
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
