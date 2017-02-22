<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use App\Files;

class FileController extends Controller
{
    public function home ()
    {
      return view('files',['files' => Files::get()]);
    }

    public function upload (Request $request)
    {
      $fileName = $request->name;

      $extension = Input::file('uploadedfile')->getClientOriginalExtension();

      Storage::disk('profile')->put($fileName . "." . $extension, File::get(Input::file('uploadedfile')));

      $newFile = new Files;
      $newFile->FileName = $fileName;
      $newFile->FileExtension = $extension;
      $newFile->save();

      return back()->with('fileupload',$fileName . ' has been uploaded successfully');

    }

    public function download ($fileName)
    {
      return response()->download(Storage::disk('profile')->get($fileName));
    }
}
