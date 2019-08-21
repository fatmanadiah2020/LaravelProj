<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class whatsNew extends Model
{
    protected $table='whatsnew';
    protected $fillable=[

      'id',
      'classId',
      'status',
      'img',
      'type',
      'created_at',
      'updated_at'
  ];
  protected $primaryKey='id';
}
