<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table='data';
    protected $fillable=[
        'id',
        'itemNo',
        'productId',
        'color',
        'img',
        'size',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey='id';


    public  function  getName($id){
        $product=Product::find($id);

        return $product;

    }

}
