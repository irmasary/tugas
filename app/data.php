<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = "data";
    protected $primarykey = "id";
    protected $fillable = [
        'id','sn','merek','jenis','type','dio','keterangan'];
}
