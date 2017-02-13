<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Reminder;

use App\ReminderType;

class ReminderController extends Controller
{
    public function home ()
    {
      $reminders = Reminder::orderBy('id','desc')->get();
      $types = ReminderType::get();
      return view('home',['reminders' => $reminders, 'types' => $types]);
    }

    public function addReminder (Request $request)
    {
      $reminder = new Reminder();
      $reminder->body = $request->reminder;
      $reminder->isFinished = false;
      $reminder->ReminderType = $request->type;
      $reminder->createdUserID = 1;

      $reminder->save();

      return back();
    }

    public function deleteReminder (Request $request)
    {
      $id = $request->id;

      Reminder::find($id)->delete();
      return back();
    }

    public function showFinishedReminder ()
    {
      return view('FinishedReminder',['reminders' => Reminder::onlyTrashed()->get()]);
    }
}
