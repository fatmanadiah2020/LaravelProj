<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class monthlySpecail extends Model
{
    protected $table='monthlyspecail';
    protected $fillable=[

        'id',
        'name',
        'itemNo',
        'img',
        'status',
        'price',
        'link',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey='id';
}
