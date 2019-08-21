<?php

namespace App\Http\Controllers\Admin\whatsNew;

use App\Model\whatsNew;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class whatsNew_cont extends Controller
{
    public function index(){

      $product=product::all();
      $whatsNew=whatsnew::all();
      $arr['whatsNew']=$whatsNew;
      $arr['product']=$product;
      return view('Admin.whatsNew.index_view',$arr);

    }

    public function add(Request $request){

      $product=product::all();
      if($request->isMethod('post')){

        if(!is_null($request->file('photo')) && !is_null($request->input('classId'))){

          $photo =$request->file('photo');
          $path=$photo->storeAs('img/whatsNew',$photo->getClientOriginalName(),'images');
          WhatsNew::Create([
            'classId'=>$request->input('classId'),
            'img'=>$path,
            'type'=>'P',
            'status'=>1
            ])->get();
            $arr['product']=$product;
            return view('Admin.whatsNew.add',['done'=>'Done'],$arr);
        }else{
            $arr['product']=$product;
            return view('Admin.whatsNew.add',['msg'=>'You Dont Add All Information'],$arr);
        }

      }else{
        $arr['product']=$product;
        return view('Admin.whatsNew.add',$arr);
      }

    }

    public function  update(Request $request,$id){

      $whatsNew=WhatsNew::find($id);
      if($request->isMethod('post')){

                if(!is_null($request->file('photo'))){

                try{

                unlink(public_path('/images/'.$whatsNew->img));
                }catch (\Exception $exception){

                }

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/whatsNew',$photo->getClientOriginalName(),'images');
                $whatsNew->img=$path;
                $whatsNew->update();
                }

                if(!is_null($request->input('classId'))){

                  $whatsNew->classId = $request->input('classId');
                  $whatsNew->update();
                  $product=Product::all();
                  $arr['whatsNew']=$whatsNew;
                  $arr['product']=$product;
                  return view('Admin.whatsNew.update',['done'=>'Done'],$arr);
              }else{
                $product=Product::all();
                $arr['whatsNew']=$whatsNew;
                $arr['product']=$product;
                  return view('Admin.whatsNew.update',['msg'=>'You Dont Add All Information'],$arr);
              }



      }else{
        $product=Product::all();
        $arr['whatsNew']=$whatsNew;
        $arr['product']=$product;
        return view('Admin.whatsNew.update',$arr);

      }

    }



    public function delete(Request $request,$id){

      $whatsNew=WhatsNew::find($id);
      if($request->isMethod('post')){

        if(!is_null($whatsNew)){

          try{

            unlink(public_path('/images/'.$whatsNew->img));

          }catch(\Exception $exception){


          }
          $whatsNew->delete();
          $product=product::all();
          $whatsNew=whatsnew::all();
          $arr['whatsNew']=$whatsNew;
          $arr['product']=$product;
          return view('Admin.whatsNew.index_view',['done'=>'Done'],$arr);
        }else{
          $product=product::all();
          $whatsNew=whatsnew::all();
          $arr['whatsNew']=$whatsNew;
          $arr['product']=$product;
          return view('Admin.whatsNew.index_view',$arr);
        }

      }else{
        $classId=$whatsNew->classId;
        $product=Product::find($classId);
        $arr['whatsNew']=$whatsNew;
        $arr['product']=$product;
        return view('Admin.whatsNew.delete',$arr);

      }

    }
}
