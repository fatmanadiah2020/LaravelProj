<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ghost extends Model
{
    protected $table='ghost';
    protected $fillable =[
        'id',
        'name',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';


}


