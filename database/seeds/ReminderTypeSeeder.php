<?php

use Illuminate\Database\Seeder;

use App\ReminderType;

class ReminderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReminderType::create([
          'typename' => 'Home'
        ]);
    }
}
