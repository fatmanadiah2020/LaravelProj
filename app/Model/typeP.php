<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class typeP extends Model
{
    protected $table='typepp';
    protected $fillable=[
        'id',
        'name',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';
}
