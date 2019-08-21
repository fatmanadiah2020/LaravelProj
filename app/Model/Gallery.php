<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table='gallery';
    protected $fillable=[
        'id',
        'classId',
        'img',
        'arName',
        'isSusbend',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey='id';
}
