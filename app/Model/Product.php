<?php

namespace App\Model;
use App\Model\typeProduct;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product2';
    protected $fillable=[
        'id',
        'classId',
        'name',
        'img',
        'status',
        'info',
        'price',
        'discount',
        'color',
        'size',
        'features',
        'isMenu',
        'itemNo',
        'transferSurface',
        'classClassId',
        'pcsBox',
        'type',
        'show',
        'type1',
        'note',
        'min',
        'whatsNew',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';

  public function getDataAsUw($type){
    $typeProduct=typeProduct::all()->where('name','=',$type);
    
    $classId=$typeProduct->first()->id;
    $productIndex =Product::all()->where('classId','=',$classId)->sort(id); //take(4) get the first 4 items
                                                                            //random(4) get random 4 items
    return $productIndex;
  }
}
