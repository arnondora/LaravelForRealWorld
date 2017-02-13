@extends('template')

@section('content')
  <h1>Finished Reminder(s)</h1>
  
  <div class = 'container'>
    <table class = 'table'>
      <tr>
        <td>Reminder Name</td>
        <td>Finish At</td>
      </tr>

      @foreach ($reminders as $reminder)
        <tr>
          <td>{{$reminder->body}}</td>
          <td>{{$reminder->deleted_at}}</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
