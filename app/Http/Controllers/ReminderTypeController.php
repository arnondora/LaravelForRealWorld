<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReminderType;

class ReminderTypeController extends Controller
{
    public function NewReminderType (Request $request)
    {
      $typeName = $request->name;

      $reminderType = new ReminderType ();
      $reminderType->typename = $typeName;

      $reminderType->save();

      return back();

    }
}
