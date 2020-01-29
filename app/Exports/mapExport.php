<?php

namespace App\Exports;

use App\maps;
use Maatwebsite\Excel\Concerns\FromCollection;

class mapExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return maps::select('id','nama_map')->get();
    }
}
