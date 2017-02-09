<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = "Reminder";
    public $primarykey = "id";
    public $timestamps = true;

    public function type ()
    {
      return $this->belongsTo(ReminderType::class, 'ReminderType','id');
    }
}
