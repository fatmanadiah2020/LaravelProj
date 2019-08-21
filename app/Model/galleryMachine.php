<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class galleryMachine extends Model
{
    protected $table='gallerymachine';
    protected $fillable=[
        'id',
        'classId',
        'arName',
        'img',
        'isSusbend',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey='id';
}
