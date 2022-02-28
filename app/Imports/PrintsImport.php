<?php

namespace App\Imports;

use App\Models\printCash;
use App\Models\student;
use Maatwebsite\Excel\Concerns\ToModel;

class PrintsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new printCash([
            'adno'    => $row[0], 
            'amount'    => $row[1], 
            
        ]);
    }
}
