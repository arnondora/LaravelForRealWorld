@extends('template')

@section('content')
  <div class = "container">

    @include('components.ReminderList',['reminders' => $reminders])

    @include('components.NewReminder', ['types' => $types])

    @include('components.ReminderTypeList', ['types' => $types])

    @include('components.NewReminderType')

  </div>
@endsection
