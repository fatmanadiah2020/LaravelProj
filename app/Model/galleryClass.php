<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class galleryClass extends Model
{
    protected $table='galleryclass';
    protected $fillable=[

        'id',
        'arName',
        'isSusbend',
        'imgClass',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';
}
