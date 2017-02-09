<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReminderType extends Model
{
  protected $table = "ReminderType";
  public $primarykey = "id";
  public $timestamps = false;

  public function reminders ()
  {
    return $this->hasMany(Reminder::class, 'ReminderType', 'id')->get();
  }
}
