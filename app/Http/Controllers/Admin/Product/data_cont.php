<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\Data;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class data_cont extends Controller
{



    public function index(){

        $data=Data::all();
        $product=Product::all();
        $arr['data']=$data;
        $arr['product']=$product;
        return view('Admin.Products.dataProduct.index_view',$arr);
    }






    public function  add(Request $request){

        $product=Product::all();
        if($request->isMethod('post')){

            if(!is_null($request->input('itemNo'))  && !is_null($request->input('productId'))){



                if(is_null($request->input('size'))){
                    $size='';
                }else{
                    $size=$request->input('size');
                }

                Data::create([
                    'itemNo'=>$request->input('itemNo'),
                    'productId'=>$request->input('productId'),
                    'color'=>$request->input('color'),
                    'size'=>$size

                ])->get();

                $arr['product']=$product;
                return view('Admin.Products.dataProduct.add',['done'=>'Done'],$arr);
            }else{

                $arr['product']=$product;
                return view('Admin.Products.dataProduct.add',['msg'=>'You Dont Add All Information'],$arr);

            }




        }else{

            $arr['product']=$product;
            return view('Admin.Products.dataProduct.add',$arr);


        }

    }
    public function  update(Request $request,$id){

            $product=Product::all();
            $data=Data::find($id);
            if($request->isMethod('post')){

                if(!is_null($request->input('itemNo'))  && !is_null($request->input('productId'))){


                    if(is_null($request->input('size'))){
                        $data->size='';
                    }else{
                        $data->size=$request->input('size');
                    }
                    $data->itemNo=$request->input('itemNo');
                    $data->productId=$request->input('productId');
                    $data->color=$request->input('color');
                    $data->update();


                    $arr['data']=$data;
                    $arr['product']=$product;
                    return view('Admin.Products.dataProduct.update',['done'=>'Done'],$arr);
                }else{

                    $arr['data']=$data;
                    $arr['product']=$product;
                    return view('Admin.Products.dataProduct.update',['msg'=>'You Dont Add All Information'],$arr);

                }





            }else{
                $arr['data']=$data;
                $arr['product']=$product;
                return view('Admin.Products.dataProduct.update',$arr);


            }

        }

        public function delete(Request $request,$id){


            if($request->isMethod('post')){

                $data=Data::find($id);


                if(!is_null($data)){

                    $data->delete();
                    $data=Data::all();
                    $product=Product::all();
                    $arr['data']=$data;
                    $arr['product']=$product;
                    return view('Admin.Products.dataProduct.index_view',['done'=>'Done'],$arr);

                }else{

                    $data=Data::all();
                    $product=Product::all();
                    $arr['data']=$data;
                    $arr['product']=$product;
                    return view('Admin.Products.dataProduct.index_view',$arr);
                }



            }else{
                $data=Data::find($id);
                $productId=$data->productId;
                $product=Product::find($productId);
                $arr['product']=$product;
                $arr['data']=$data;
                return view('Admin.Products.dataProduct.delete',$arr);

            }


        }




    public static function  getName($id){
        $product=Product::where('id',$id);
        $name =$product->name;
        return $name;

    }
}
