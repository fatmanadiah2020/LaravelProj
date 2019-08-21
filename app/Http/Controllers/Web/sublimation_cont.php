<?php

namespace App\Http\Controllers\Web;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sublimation_cont extends Controller
{
    public function sublimation($type){

      $product=new product();
      $arr['type']=$type;
      $arr['product']=$product;
      return view('Web.Sublimation.sublimationPage',$arr);
    }
}
