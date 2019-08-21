<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Model\galleryClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class galleryClass_cont extends Controller
{
    public function index(){

      $galleryClass=galleryClass::all();
      $arr['galleryClass']=$galleryClass;
      return view('Admin.Gallery.galleryClass.index_view',$arr);

    }

    public function add(Request $request){

        if($request->isMethod('post')){

            try{
               if(!is_null($request->file('photo'))){

                   $photo =$request->file('photo');
                   $path=$photo->storeAs('img/typeSupport',$photo->getClientOriginalName(),'images');

               }


            }catch (\Exception $exception){

            }

            if(!is_null($request->input('name')) && !is_null($request->file('photo'))){

                galleryClass::create([
                    'arName'=>$request->input('name'),
                    'isSusbend'=>1,
                    'imgClass'=>$path
                ])->get();

                return view('Admin.Gallery.galleryClass.add',['done'=>'Done']);

            }else{

                return view('Admin.Gallery.galleryClass.add',['msg'=>'You Dont Add All Information']);


            }


        }else{
            return view('Admin.Gallery.galleryClass.add');

        }


    }

    public function update(Request $request,$id){

        $galleryClass=galleryClass::find($id);
        if($request->isMethod('post')){

            if(!is_null($request->file('photo'))){

                try{

                    unlink(public_path('/images/'.$galleryClass->imgClass));
                    $photo =$request->file('photo');
                    $path=$photo->storeAs('img/typeSupport',$photo->getClientOriginalName(),'images');
                    $galleryClass->imgClass=$path;
                    $galleryClass->update();
                }catch (\Exception $exception){

                }


            }

            if(!is_null($request->input('name'))){

                $galleryClass->arName=$request->input('name');
                $galleryClass->update();
                $arr['galleryClass']=$galleryClass;
                return view('Admin.Gallery.galleryClass.update',['done'=>'Done'],$arr);

            }else{

                $arr['galleryClass']=$galleryClass;
                return view('Admin.Gallery.galleryClass.update',['msg'=>'You Dont Add All Information'],$arr);


            }


        }else{

            $arr['galleryClass']=$galleryClass;
            return view('Admin.Gallery.galleryClass.update',$arr);


        }

    }

    public function delete(Request $request,$id){

        $galleryClass=galleryClass::find($id);

        if($request->isMethod('post')){

            try{
                unlink(public_path('/images/'.$galleryClass->imgClass));
            }catch (\Exception $exception){

            }
            if(!is_null($galleryClass)){

                $galleryClass->delete();
                $galleryClass=galleryClass::all();
                $arr['galleryClass']=$galleryClass;
                return view('Admin.Gallery.galleryClass.index_view',['done'=>'Done'],$arr);

            }else{

                $galleryClass=galleryClass::all();
                $arr['galleryClass']=$galleryClass;
                return view('Admin.Gallery.galleryClass.index_view',$arr);


            }



        }else{

            $arr['galleryClass']=$galleryClass;
            return view('Admin.Gallery.galleryClass.delete',$arr);


        }


    }
}
