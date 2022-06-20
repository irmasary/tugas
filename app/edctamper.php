<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class edctamper extends Model
{
    protected $table = "edctamper";
    protected $primarykey = "id";
    protected $fillable = [
        'id','sn','merek','jenis','type','Kanca','keterangan'];
}
