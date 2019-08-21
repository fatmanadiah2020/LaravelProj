<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class galleryProduct extends Model
{
    protected $table='galleryproduct';
    protected $fillable=[
        'id',
        'classId',
        'arName',
        'img',
        'isSusbend',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey='id';


//    public  function  getName($id){
//        $product=Product::find($id);
//
//        return $product;
//
//    }
}
