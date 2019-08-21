<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class typeMachine extends Model
{
    protected $table='typemachine3';
    protected $fillable =[
        'id',
        'name',
        'img',
        'status',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';

}
