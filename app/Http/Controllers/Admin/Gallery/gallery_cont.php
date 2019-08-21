<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Model\Gallery;
use App\Model\galleryClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gallery_cont extends Controller
{
    public function index(){

        $gallery=Gallery::all()->groupBy('classId');
        $arr['gallery']=$gallery;

        return view('Admin.Gallery.Galleries.index_view',$arr);

    }


    public function add(Request $request){



        if($request->isMethod('post')){

            try {

                if(!is_null($request->file('photo'))){

                    $photo = $request->file('photo');
                    $path = $photo->storeAs('img/gallery', $photo->getClientOriginalName(), 'images');
                }

            }catch (\Exception $ex){

            }

            if(!is_null($request->input('classId')) && !is_null($request->file('photo'))){

                Gallery::create([
                    'classId'=>$request->input('classId'),
                    'arName'=>'iMG',
                    'img'=>$path,
                    'isSusbend'=>1

                ])->get();

                $galleryClass=galleryClass::all();
                $arr['galleryClass']=$galleryClass;
                return view('Admin.Gallery.Galleries.add',['done'=>'Done'],$arr);

            }else{

                $galleryClass=galleryClass::all();
                $arr['galleryClass']=$galleryClass;
                return view('Admin.Gallery.Galleries.add',['msg'=>'You Dont Add All Information'],$arr);


            }




        }else{
            $galleryClass=galleryClass::all();
            $arr['galleryClass']=$galleryClass;
            return view('Admin.Gallery.Galleries.add',$arr);

        }

    }

    public function delete(Request $request,$id){

        $gallery=Gallery::find($id);
        if($request->isMethod('post')){

            try{
                unlink(public_path('/images/'.$gallery->img));
            }catch (\Exception $exception){

            }

            if(!is_null($gallery)){
                $gallery->delete();
                $gallery=Gallery::all()->groupBy('classId');
                $arr['gallery']=$gallery;
                return view('Admin.Gallery.Galleries.index_view',['done'=>'Done'],$arr);

            }else{

                $gallery=Gallery::all()->groupBy('classId');
                $arr['gallery']=$gallery;
                return view('Admin.Gallery.Galleries.index_view',$arr);


            }




        }else{

            $arr['gallery']=$gallery;
            return view('Admin.Gallery.Galleries.delete',$arr);

        }


    }
}
