<?php

namespace App\Imports;

use App\data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new data([
            'sn' => $row[1],
            'merek' => $row[2],
            'jenis' => $row[3],
            'type' => $row[4],
            'dio' => $row[5],
            'keterangan' => $row[6],
        ]);
    }
}
