<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/profile', 'ProfileController@getProfile');
//
Route::get('/birthyear', 'ProfileController@getYear');
Route::get('/{id}/name', 'ProfileController@getName');
Route::get('/{id}/surname', 'ProfileController@getSurname');
Route::get('/myprofile', 'ProfileController@myProfile');

Route::get('/', 'ReminderController@home');
Route::get('/finished', 'ReminderController@showFinishedReminder');

Route::post('/reminder/new', 'ReminderController@addReminder');
Route::delete('/reminder/delete', 'ReminderController@deleteReminder');

Route::post('/remindertype/new', 'ReminderTypeController@NewReminderType');

// /profile/name -> Your Name
// /profile/surname -> Your Surname
// /profile/brithday -> Your brithday
// /profile/age -> Your age -> Calculate Present Year - Your birthyear -> ศค
