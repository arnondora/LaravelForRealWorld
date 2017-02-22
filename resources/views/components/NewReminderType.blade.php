<form method = "post" action = "/remindertype/new">
  <h2>New Reminder Type</h2>
  @if (session('ReminderTypeStatus') != null)
    <div class="alert alert-success" role="alert">{{session('ReminderTypeStatus')}}</div>
  @endif
  <div class = "form-group">
    <label>Reminder Type : </label>
    <input type="text" name="name" class = "form-control" placeholder="Reminder Type Name">
  </div>

  <div class = "form-group">
    {{csrf_field()}}
    <input class = "btn btn-primary" type="submit" value="Create New Reminder Type">
  </div>

  @if(count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
</form>
