<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class typeProduct extends Model
{
    protected $table='typeproduct2';
    protected $fillable=[
        'id',
        'name',
        'classClassId',
        'idType',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';

}
