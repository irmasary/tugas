<?php

namespace App\Imports;

use App\mesin;
use Maatwebsite\Excel\Concerns\ToModel;

class MesinImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mesin([
            //
        ]);
    }
}
