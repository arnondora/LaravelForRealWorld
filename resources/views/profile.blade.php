<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>My Profile</title>
  </head>
  <body>
    <div class = "container">
      <div class = "col-md-6">
        <img class = "img-responsive" style = "max-height:500px; width:auto;" src="/images/profile.jpg" alt="">
      </div>

      <div class = "col-md-6">
        @foreach ($profiles as $profile)
          @if ($loop->iteration == 2)
            <p>This is the second iteration</p>
          @else
            <p>This is the first iteration</p>
          @endif

          <p>{{$loop->iteration}}. Name : {{$profile['name']}}</p>
          <p>{{$profile['occupation']}}</p>
          <p>Website : <a href = "{{$profile['website']}}">{{$profile['website']}}</a></p>
          <p>{{$profile['tags']}}</p>
          <hr>
        @endforeach
      </div>
    </div>
  </body>
</html>
