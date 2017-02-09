<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$name}}</title>
  </head>
  <body>
    <div class="container">
        <p>Name : {{$name}}</p>
        <p>Birthday : {{date_format($birthday,"Y/m/d")}}</p>
        <p>Facebook : <a href = "{{$facebookURL}}">{{$facebookURL}}</a></p>
      </div>
    </div>
  </body>
</html>
