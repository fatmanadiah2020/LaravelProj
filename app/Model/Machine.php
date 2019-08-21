<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $table='machine2';
    protected $fillable =[
        'id',
        'name',
        'classId',
        'img',
        'status',
        'price',
        'discount',
        'info',
        'size',
        'features',
        'type1',
        'itemNo',
        'isMenu',
        'idType',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';
}
