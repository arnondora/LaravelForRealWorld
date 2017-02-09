<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Reminder;

class ReminderController extends Controller
{
    public function home ()
    {
      $reminders = Reminder::orderBy('id','desc')->get();
      return view('home',['reminders' => $reminders]);
    }

    public function addReminder (Request $request)
    {
      $reminder = new Reminder();
      $reminder->body = $request->reminder;
      $reminder->isFinished = false;
      $reminder->createdUserID = 1;

      $reminder->save();

      return back();
    }

    public function deleteReminder (Request $request)
    {
      $id = $request->id;

      DB::table('Reminder')->where('id',$id)->delete();
      return back();
    }
}
