<div class = 'row'>
  <h2>Your Reminder(s)</h2>

  <div class = 'row'>
    @foreach ($reminders as $reminder)
      <div class = "well">
        <span>{{$reminder}}</span>
        <a class = "btn btn-success pull-right">Finish</a>
      </div>
    @endforeach

  </div>

</div>
