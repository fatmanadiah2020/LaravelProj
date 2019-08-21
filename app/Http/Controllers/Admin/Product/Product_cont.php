<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\Product;
use App\Model\typeProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Product_cont extends Controller
{
    public function index(){

        $product=Product::all();
        $typeProduct=typeProduct::all();
        $arr['product']=$product;
        $arr['typeProduct']=$typeProduct;
        return view('Admin.Products.Product.index_view',$arr);

    }

    public function add(Request $request){


        if($request->isMethod('post')){



            if(!is_null($request->file('photo'))  &&  !is_null($request->input('classId'))
             && !is_null($request->input('name')) && !is_null($request->input('info'))
              && !is_null($request->input('price'))  && !is_null($request->input('size'))
              && !is_null($request->input('pcs')) && !is_null($request->input('min'))  ){

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/product',$photo->getClientOriginalName(),'images');

                $classId=$request->input('classId');
                $typeProduct=typeProduct::find($classId);
                $id=$typeProduct->classClassId;

                Product::create([
                    'classId' =>$classId,
                    'name'=>$request->input('name'),
                    'img'=>$path,
                    'status'=>1,
                    'info'=>$request->input('info'),
                    'price'=>$request->input('price'),
                    'discount'=>0,
                    'size'=>$request->input('size'),
                    'isMenu'=>0,
                    'classClassId'=>$id,
                    'pcsBox'=>$request->input('pcs'),
                    'type1'=>"p",
                    'min'=>$request->input('min'),
                ])->get();
                $typeProduct=typeProduct::all();
                $arr['typeProduct']=$typeProduct;
                return view('Admin.Products.Product.add',['done'=>'Done'],$arr);
            }else{
                $typeProduct=typeProduct::all();
                $arr['typeProduct']=$typeProduct;
                return view('Admin.Products.Product.add',['msg'=>'You Dont Add All Information'],$arr);
            }




        }else{
            $typeProduct=typeProduct::all();
            $arr['typeProduct']=$typeProduct;
            return view('Admin.Products.Product.Add',$arr);

        }


    }

    public function update(Request $request,$id){

        $product=Product::find($id);
        if($request->isMethod('post')){

            if(!is_null($request->file('photo'))){

                try{

                    unlink(public_path('/images/'.$product->img));
                }catch (\Exception $exception){

                }

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/product',$photo->getClientOriginalName(),'images');
                $product->img=$path;
                $product->update();
            }

            if( !is_null($request->input('classId'))
                || !is_null($request->input('name')) || !is_null($request->input('info'))
                || !is_null($request->input('price'))  || !is_null($request->input('size'))
                || !is_null($request->input('pcs')) || !is_null($request->input('min'))  ) {
                $classId = $request->input('classId');
                $typeProduct = typeProduct::find($classId);
                $id = $typeProduct->classClassId;

                $product->classId = $request->input('classId');
                $product->name = $request->input('name');
                $product->info = $request->input('info');
                $product->price = $request->input('price');
                $product->size = $request->input('size');
                $product->classClassId = $id;
                $product->pcsBox = $request->input('pcs');
                $product->min = $request->input('min');
                $product->update();
                $typeProduct=typeProduct::all();
                $arr['typeProduct']=$typeProduct;
                $arr['product']=$product;
                return view('Admin.Products.Product.update',['done'=>'Done'],$arr);
            }else{
                $typeProduct=typeProduct::all();
                $arr['typeProduct']=$typeProduct;
                $arr['product']=$product;
                return view('Admin.Products.Product.update',['msg'=>'You Dont Add All Information'],$arr);
            }


        }else{

            $typeProduct=typeProduct::all();
            $arr['typeProduct']=$typeProduct;
            $arr['product']=$product;
            return view('Admin.Products.Product.update',$arr);

        }


    }

    public function delete(Request $request ,$id){

        $product=Product::find($id);

        if($request->isMethod('post')){
            try{
                unlink(public_path('/images/'.$product->img));
            }catch (\Exception $exception){

            }

            if(!is_null($product)){

                $product->delete();
                $product=Product::all();
                $typeProduct=typeProduct::all();
                $arr['product']=$product;
                $arr['typeProduct']=$typeProduct;
                return view('Admin.Products.Product.index_view',['done'=>'Done'],$arr);
            }else{

                $product=Product::all();
                $typeProduct=typeProduct::all();
                $arr['product']=$product;
                $arr['typeProduct']=$typeProduct;
                return view('Admin.Products.Product.index_view',$arr);
            }



        }else{
            $arr['product']=$product;
            return view('Admin.Products.Product.delete',$arr);

        }


    }
}
