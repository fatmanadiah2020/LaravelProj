<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table ='users';
    protected $fillable=[
      'id',
      'userName',
      'password',
      'email',
      'status',
      'userId',
      'online',
      'offline',
      'lastSeen',
      'count',
      'dateonline',
      'datecreate',
      'created_at',
      'updated_at'
    ];
    protected $primaryKey='id';
}
