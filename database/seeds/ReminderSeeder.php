<?php

use Illuminate\Database\Seeder;
use App\Reminder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Reminder::create([
        'body' => 'Hello World',
        'isFinished' => false,
        'createdUserID' => 1,
        'ReminderType' => 1
      ]);
    }
}
