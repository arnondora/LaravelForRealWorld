<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function home ()
    {
      $reminders = [
        'Buy Milk',
        'Go to Bank',
        'Move Things out'
      ];
      return view('home',['reminders' => $reminders]);
    }
}
