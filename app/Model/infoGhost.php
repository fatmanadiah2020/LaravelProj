<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class infoGhost extends Model
{
    protected $table ='infoghost';
    protected $fillable =[
        'id',
        'classId',
        'classClassId',
        'name',
        'info',
        'price',
        'img',
        'itemNo',
        'type',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey ='id';
}
