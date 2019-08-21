<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class specialDetalis extends Model
{
    protected $table='specialdetalis';
    protected $fillable=[

        'id',
        'classId',
        'qty',
        'productId',
        'type',
        'note',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey='id';
//
//    public function getMonthySpecial($id){
//
//        $monthySpecialOffer=monthlySpecail::where('id',$id);
//        return $monthySpecialOffer;
//
//    }
}
