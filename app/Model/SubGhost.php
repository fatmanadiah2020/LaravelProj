<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubGhost extends Model
{
    protected $table ='subghost';
    protected $fillable =[

        'id',
        'classId',
        'name',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';




}
