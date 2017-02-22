@extends('template')

@section('content')
  <div class = "container">
    @include('components.ListFile',['files' => $files])

    @include('components.AddFile')
  </div>
@endsection
