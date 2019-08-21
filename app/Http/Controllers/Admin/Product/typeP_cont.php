<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\typeP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class typeP_cont extends Controller
{
    public function index(){

        $typep=typeP::all();
        $arr['typep']=$typep;
        return view('Admin.Products.typeP.index_view',$arr);

    }

    public function add(Request $request){
        if($request->isMethod('post')){

           if(!is_null($request->input('name'))){

               typeP::create($request->all())->get();
               return view('Admin.Products.typeP.add',['done'=>'Done']);
           }else{

               return view('Admin.Products.typeP.add',['msg'=>'You Dont Add All Information']);

           }




        }else{

            $typep=typeP::all();
            $arr['typep']=$typep;
            return view('Admin.Products.typeP.add',$arr);

        }


    }

    public function update(Request $request,$id){

        $typep=typeP::find($id);

        if($request->isMethod('post')){

            if(!is_null($request->input('name'))){

                $typep->name=$request->input('name');
                $typep->update();
                $arr['typep']=$typep;
                return view('Admin.Products.typeP.update',['done'=>'done'],$arr);

            }else{

                $arr['typep']=$typep;
            return view('Admin.Products.typeP.update',['msg'=>'You Dont Add All Information'],$arr);

        }


        }else{


            $arr['typep']=$typep;
            return view('Admin.Products.typeP.update',$arr);


        }


    }

    public function delete(Request $request,$id){

        $typep=typeP::find($id);

        if($request->isMethod('post')){


           if(!is_null($typep)){

               $typep->delete();
               $typep=typeP::all();
               $arr['typep']=$typep;
               return view('Admin.Products.typeP.index_view',['done'=>'done'],$arr);
           }else{

               $typep=typeP::all();
               $arr['typep']=$typep;
               return view('Admin.Products.typeP.index_view',$arr);
           }


        }else{


            $arr['typep']=$typep;
            return view('Admin.Products.typeP.delete',$arr);


        }


    }
}
