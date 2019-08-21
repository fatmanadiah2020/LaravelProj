<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $table='video';
  protected $fillable=[
    'id',
    'classId',
    'url',
    'type',
    'created_at',
    'updated_at'
];
protected $primaryKey='id';

}
