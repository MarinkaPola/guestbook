<?php

namespace App\Imports;

use App\Models\Good;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GoodsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

 $data=[
    'heading' => $row['rubrika'],
    'category' =>$row['kategoriya_tovara'],
    'manufacturer'=>$row['proizvoditel'],
    'name'=>$row['naimenovanie_tovara'],
    'code'=>$row['kod_modeli_artikul_proizvoditelya'],
    'description'=>$row['opisanie_tovara'],
    'price'=>$this->mapPrice($row['cena_rozn_grn']),
    'guarantee'=>$this->mapGuarantee($row['garantiya']),
    'availability'=>$this->mapAvailability($row['nalicie']),
];
        $result=Good::where($data)->exists();


      if (!$result){

        return  Good::create($data);

      }

    }
    private function mapGuarantee ($guarantee) {
    if($guarantee=='Нет') {
        return 0;
    }
    return $guarantee;
}

    private function mapAvailability ($availability) {

        return $availability=='есть в наличие';
    }
    private function mapPrice($price) {
        if (is_numeric($price)){
            return $price;
        }
        return 0;
    }
}
