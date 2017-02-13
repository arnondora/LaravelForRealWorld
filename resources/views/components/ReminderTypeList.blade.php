<div class = 'row'>
  <h2>Reminder Type(s)</h2>

  <div class = 'row'>
    @foreach ($types as $reminderType)
      <div class = "well">
        <span>{{$reminderType->typename}}</span>
      </div>
    @endforeach

  </div>

</div>
