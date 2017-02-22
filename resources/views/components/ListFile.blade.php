<h2>Files</h2>
@if (count($files) == 0)
  <h3>There's no file right now !</h3>
@else
  <table class = "table table-bordered">
    <tr>
      <td>Filename</td>
      <td>Download</td>
    </tr>

    @foreach ($files as $file)
      <tr>
        <td>{{$file->FileName}}.{{$file->FileExtension}}</td>
        <td><a href = "/file/{{$file->FileName}}.{{$file->FileExtension}}">Download This File</a></td>
      </tr>
    @endforeach
  </table>
@endif
