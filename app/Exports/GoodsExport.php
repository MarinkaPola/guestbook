<?php

namespace App\Exports;

use App\Models\Good;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GoodsExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            'id',
            'heading',
            'category',
            'manufacturer',
            'name',
            'code',
            'description',
            'price',
            'guarantee',
            'availability',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Good::all();
    }
}
