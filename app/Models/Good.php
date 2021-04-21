<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Good extends Model
{
    use  SoftDeletes;
    protected $fillable = [
        'heading',
        'category',
        'manufacturer',
        'name',
        'code',
        'description',
        'price',
        'guarantee',
        'availability',
    ];

}
