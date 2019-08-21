<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Messages1 extends Model
{
   protected $table='messages1';
   protected $fillable=[
     'id',
     'userId',
     'isSendRead',
     'isReplayRead',
     'send',
     'replay',
     'created_at',
     'updated_at'
 ];
 protected $primaryKey='id';
}
