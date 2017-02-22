<h2>Upload New File</h2>
@if (session('fileupload') != null)
  <div class="alert alert-success" role="alert">{{session('fileupload')}}</div>
@endif
<form action="/file/upload" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Filename</label>
    <input type="text" name="name" class = "form-control" autofocus="" required="">
  </div>

  <div class = "form-group">
    <label>Upload File</label>
    <input type="file" name="uploadedfile" required="">
  </div>

  <div class = "form-group">
    {{csrf_field()}}
    <input type="submit" class = "btn btn-success">
  </div>

</form>
