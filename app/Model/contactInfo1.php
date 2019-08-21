<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contactInfo1 extends Model
{
    protected $table='contactinfo1';
    protected $fillable=[

        'id',
        'name',
        'email',
        'company',
        'address',
        'city',
        'country',
        'tel',
        'fax',
        'status',
        'subScribe',
        'isRead',
        'img',
        'img1',
        'img2',
        'date1',
        'comment',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey='id';

}
