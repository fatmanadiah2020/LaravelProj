<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\typeP;
use App\Model\typeProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class typeProduct_cont extends Controller
{

    public function index(){

        $typeProduct=typeProduct::all();
        $typeP=typeP::all();
        $arr['typeProduct']=$typeProduct;
        $arr['typeP']=$typeP;
        $arr['index']=0;

        return view('Admin.Products.typeProduct.index_view',$arr);

    }

    public function add(Request $request){

        if($request->isMethod('post')){

           if(!is_null($request->input('name')) && !is_null($request->input('classId'))){

               typeProduct::create([
                   'name'=>$request->input('name'),
                   'classClassId'=>$request->input('classId'),
                   'idType'=>1
               ])->get();

               $typeP=typeP::all();
               $arr['typeP']=$typeP;
               return view('Admin.Products.typeProduct.add',['done'=>'Done'],$arr);
           }else{

               $typeP=typeP::all();
               $arr['typeP']=$typeP;
               return view('Admin.Products.typeProduct.add',['msg'=>'You Dont Add All Information'],$arr);

           }





        }else{
            $typeP=typeP::all();
            $arr['typeP']=$typeP;
            return view('Admin.Products.typeProduct.add',$arr);

        }


    }

    public function update(Request $request ,$id){

        $typeProduct=typeProduct::find($id);
        if($request->isMethod('post')){


            if(!is_null($request->input('name')) && !is_null($request->input('classId'))){

                $typeProduct->name=$request->input('name');
                $typeProduct->classClassId=$request->input('classId');
                $typeProduct->update();
                $typeP=typeP::all();
                $arr['typeP']=$typeP;
                $arr['typeProduct']=$typeProduct;
                return view('Admin.Products.typeProduct.update',['done'=>'Done'],$arr);
            }else{

                $typeP=typeP::all();
                $arr['typeP']=$typeP;
                $arr['typeProduct']=$typeProduct;
                return view('Admin.Products.typeProduct.update',['msg'=>'You Dont Add All Information'],$arr);

            }



        }else{
            $typeP=typeP::all();
            $arr['typeP']=$typeP;
            $arr['typeProduct']=$typeProduct;
            return view('Admin.Products.typeProduct.update',$arr);


        }


    }

    public function delete(Request $request ,$id){

         $typeProduct=typeProduct::find($id);
        if($request->isMethod('post')){


           if(!is_null($typeProduct)){

               $typeProduct->delete();
               $typeProduct=typeProduct::all();
               $typeP=typeP::all();
               $arr['typeProduct']=$typeProduct;
               $arr['typeP']=$typeP;
               $arr['index']=0;
               return view('Admin.Products.typeProduct.index_view',['done'=>'Done'],$arr);

           }else{

               $typeProduct=typeProduct::all();
               $typeP=typeP::all();
               $arr['typeProduct']=$typeProduct;
               $arr['typeP']=$typeP;
               $arr['index']=0;
               return view('Admin.Products.typeProduct.index_view',$arr);
           }



        }else{
            $arr['typeProduct']=$typeProduct;
            return view('Admin.Products.typeProduct.delete',$arr);


        }


    }
}
