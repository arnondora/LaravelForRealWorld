<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReminderType;

class ReminderTypeController extends Controller
{
    public function NewReminderType (Request $request)
    {
      $this->validate($request, [
        'name' => 'required|unique:ReminderType,typename'
      ]);

      $typeName = $request->name;

      $reminderType = new ReminderType ();
      $reminderType->typename = $typeName;

      $reminderType->save();

      session(['ReminderTypeStatus' => 'Add new reminder type successfully']);
      return back();

    }
}
