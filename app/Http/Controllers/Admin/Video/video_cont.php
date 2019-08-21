<?php

namespace App\Http\Controllers\Admin\Video;

use App\Model\Product;
use App\Model\Machine;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class video_cont extends Controller
{
    public function index($type){



      if($type=="product"){
        $video=Video::all()->where('type','=',1);
        $product=Product::all();
        $arr['product']=$product;
        $arr['video']=$video;

        return view('Admin.Video.productVideo.index_view',$arr);

      }elseif($type =="machine"){

        $video=Video::all()->where('type','=',2);
        $machine=Machine::all();
        $arr['machine']=$machine;
        $arr['video']=$video;
        return view('Admin.Video.machineVideo.index_view',$arr);

      }


    }

    public function add(Request $request,$type){

        if($request->ismethod('post')){

            if($type=="product"){

              if(!is_null($request->input('classId'))  && !is_null($request->input('url')) ){

                  Video::create([
                      'classId'=>$request->input('classId'),
                      'url'=>$request->input('url'),
                      'type'=>1
                    ])->get();
                    $product=Product::all();
                    $arr['product']=$product;
                return view('Admin.Video.productVideo.add',['done'=>'done'],$arr);
                }else{

                  $product=Product::all();
                  $arr['product']=$product;
                return view('Admin.Video.productVideo.add',['msg'=>'You Dont Add All Information'],$arr);

                }

            }elseif($type =="machine"){


              if(!is_null($request->input('classId'))  && !is_null($request->input('url')) ){

                  Video::create([
                      'classId'=>$request->input('classId'),
                      'url'=>$request->input('url'),
                      'type'=>2
                    ])->get();
                    $machine=Machine::all();
                    $arr['machine']=$machine;
                return view('Admin.Video.machineVideo.add',['done'=>'done'],$arr);
                }else{

                  $machine=Machine::all();
                  $arr['machine']=$machine;
                return view('Admin.Video.machineVideo.add',['msg'=>'You Dont Add All Information'],$arr);

                }



            }


        }else{

          if($type=="product"){
            $product=Product::all();
            $arr['product']=$product;
            return view('Admin.Video.productVideo.add',$arr);

          }elseif($type =="machine"){
            $machine=Machine::all();
            $arr['machine']=$machine;
            return view('Admin.Video.machineVideo.add',$arr);
          }


        }








    }

    public function delete(Request $request,$id,$type){

      if($request->ismethod('post')){

        if($type=="product"){


              $video=Video::find($id);
              if(!is_null($video)){
                $video->delete();
                $video=Video::all()->where('type','=',1);
                $product=Product::all();
                $arr['product']=$product;
                $arr['video']=$video;
                  return view('Admin.Video.productVideo.index_view',['done'=>'done'],$arr);
              }else{
                $video=Video::all()->where('type','=',1);
                $product=Product::all();
                $arr['product']=$product;
                $arr['video']=$video;
                  return view('Admin.Video.productVideo.index_view',$arr);

              }

        }elseif($type =="machine"){




          $video=Video::find($id);
          if(!is_null($video)){
            $video->delete();
            $video=Video::all()->where('type','=',2);
            $machine=Machine::all();
            $arr['machine']=$machine;
            $arr['video']=$video;
              return view('Admin.Video.machineVideo.index_view',['done'=>'done'],$arr);
          }else{
            $video=Video::all()->where('type','=',2);
            $machine=Machine::all();
            $arr['machine']=$machine;
            $arr['video']=$video;
              return view('Admin.Video.machineVideo.index_view',$arr);

          }







        }

      }else{

                if($type=="product"){

                      $product=Product::all();
                      $video=Video::find($id);
                      $arr['video']=$video;
                      $arr['product']=$product;
                      return view('Admin.Video.productVideo.delete',$arr);

                }elseif($type =="machine"){


                  $machine=Machine::all();
                  $video=Video::find($id);
                  $arr['video']=$video;
                  $arr['machine']=$machine;
                  return view('Admin.Video.machineVideo.delete',$arr);

                }

      }

    }

}
