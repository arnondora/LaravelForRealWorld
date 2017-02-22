<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
  protected $table = "File";
  public $primarykey = "id";
  public $timestamps = false;
}
