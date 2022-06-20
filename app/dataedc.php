<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataedc extends Model
{
    protected $table = "dataedc";
    protected $primarykey = "id";
    protected $fillable = [
        'id','sn','merek','jenis','type'];
}
