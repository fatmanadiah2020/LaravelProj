<?php

namespace App\Http\Controllers\Admin\Product;


use App\Model\galleryProduct;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class galleryProduct_cont extends Controller
{


    public function index(){



        $product=Product::all();
        $galleryProduct=galleryProduct::all()->groupBy('classId');
        $arr['galleryProduct']=$galleryProduct;
        $arr['product']=$product;

        return view('Admin.Products.galleryProduct.index_view',$arr);

    }

    public function add(Request $request){



        if($request->isMethod('post')){

            try {
                if(!is_null($request->file('photo'))) {
                    $photo = $request->file('photo');
                    $path = $photo->storeAs('img/galleryProduct', $photo->getClientOriginalName(), 'images');
                }
            }catch (\Exception $ex){
                dd("choose image");
            }

            if(!is_null($request->file('photo'))  && !is_null($request->input('classId'))){

                galleryProduct::create([
                    'classId'=>$request->input('classId'),
                    'arName'=>'y',
                    'img'=>$path,
                    'isSusbend'=>1

                ])->get();

                $product=Product::all();
                $arr['product']=$product;
                return view('Admin.Products.galleryProduct.add',['done'=>'Done'],$arr);
            }else{

                $product=Product::all();
                $arr['product']=$product;
                $arr['product']=$product;
                return view('Admin.Products.galleryProduct.add',['msg'=>'You Dont Add All Information'],$arr);

            }




        }else{
        $product=Product::all();
        $arr['product']=$product;
        return view('Admin.Products.galleryProduct.add',$arr);

        }

    }
    public function delete(Request $request,$id){

        $galleryProduct=galleryProduct::find($id);
        if($request->isMethod('post')){

            try{
                unlink(public_path('/images/'.$galleryProduct->img));
            }catch (\Exception $exception){

            }

            if(!is_null($galleryProduct)){

                $galleryProduct->delete();
                $product=Product::all();
                $galleryProduct=galleryProduct::all()->groupBy('classId');
                $arr['galleryProduct']=$galleryProduct;
                $arr['product']=$product;
                return view('Admin.Products.galleryProduct.index_view',['done'=>'Done'],$arr);
            }else{

                $product=Product::all();
                $galleryProduct=galleryProduct::all()->groupBy('classId');
                $arr['galleryProduct']=$galleryProduct;
                $arr['product']=$product;
                return view('Admin.Products.galleryProduct.index_view',$arr);

            }




        }else{

            $arr['galleryProduct']=$galleryProduct;
            return view('Admin.Products.galleryProduct.delete',$arr);

        }


    }

}
