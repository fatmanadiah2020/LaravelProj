<?php

namespace App\Http\Controllers\Web;

use App\Model\whatsNew;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index_cont extends Controller
{
    public function index(){


    	$product=Product::all();
    	$whatsNew=whatsNew::all();
    	$arr['whatsNew']=$whatsNew;
    	$arr['product']=$product;
      $p=new Product(); //object for product section in  index home page 
      $arr['p']=$p;
    	return view('Web.index',$arr);

    }
}
