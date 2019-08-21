<?php

namespace App\Http\Controllers\Admin\Ghost;

use App\Model\Ghost;
use App\Model\infoGhost;
use App\Model\SubGhost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class infoGhost_cont extends Controller
{
    public function index(){


       $infoGhost=infoGhost::all();
        $subGhost  =SubGhost::all();
        $arr['subGhost']=$subGhost;
        $ghost=Ghost::all();

        $arr['ghost']=$ghost;
        $arr['infoGhost']=$infoGhost;

        return view('Admin.Ghosts.infoGhost.index_view',$arr);

    }

    public function add(Request $request){

        if($request->isMethod('post')){

           if(!is_null($request->file('photo')) && !is_null($request->input('classId')) && !is_null($request->input('name'))
               && !is_null($request->input('info')) && !is_null($request->input('price'))
               && !is_null($request->input('itemNo')) && !is_null($request->input('type'))){

               $photo =$request->file('photo');
               $path=$photo->storeAs('img/ghost',$photo->getClientOriginalName(),'images');

               $classId=$request->input('classId');
               $sunGhost=subGhost::find($classId);
               $GhostId=$sunGhost->classId;

               infoGhost::create([
                   'classId'=>$request->input('classId'),
                   'classClassId'=>$GhostId ,
                   'name'=>$request->input('name'),
                   'info'=>$request->input('info'),
                   'price'=>$request->input('price'),
                   'img'=>$path ,
                   'itemNo'=>$request->input('itemNo'),
                   'type'=>$request->input('type'),
                   'status'=>1

               ])->get();
               $subGhost  =SubGhost::all();
               $ghost=Ghost::all();
               $arr['ghost']=$ghost;
               $arr['subGhost']=$subGhost;
               return view('Admin.Ghosts.infoGhost.add',['done'=>'Done'],$arr);
           }else{

               $subGhost  =SubGhost::all();
               $ghost=Ghost::all();
               $arr['ghost']=$ghost;
               $arr['subGhost']=$subGhost;
               return view('Admin.Ghosts.infoGhost.add',['msg'=>'You Dont Add All Information'],$arr);

           }



        }else{
            $subGhost  =SubGhost::all();
            $ghost=Ghost::all();
            $arr['ghost']=$ghost;
            $arr['subGhost']=$subGhost;
            return view('Admin.Ghosts.infoGhost.Add',$arr);

        }


    }

    public function update(Request $request ,$id){

        $subGhost  =SubGhost::all();
        $ghost=Ghost::all();
        $infoGhost =infoGhost::find($id);

        if($request->isMethod('post')){


            if(!is_null($request->file('photo'))){

                try{

                    unlink(public_path('/images/'.$infoGhost->img));
                }catch (\Exception $exception){

                }

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/ghost',$photo->getClientOriginalName(),'images');
                $infoGhost->img=$path;
                $infoGhost->update();


            }

            if(!is_null($request->input('classId')) && !is_null($request->input('name'))
                && !is_null($request->input('info')) && !is_null($request->input('price'))
                && !is_null($request->input('itemNo')) && !is_null($request->input('type'))){

                $classId=$request->input('classId');
                $classClassId1=SubGhost::find($classId);
                $classClassId=$classClassId1->classId;
                $infoGhost->classId=$request->input('classId');
                $infoGhost->classClassId=$classClassId;
                $infoGhost->name=$request->input('name');
                $infoGhost->info=$request->input('info');
                $infoGhost->itemNo=$request->input('itemNo');
                $infoGhost->type=$request->input('type');
                $infoGhost->price=$request->input('price');
                $infoGhost->update();





                $arr['subGhost']=$subGhost;
                $arr['ghost']=$ghost;
                $arr['infoGhost']=$infoGhost;
                return view('Admin.Ghosts.infoGhost.update',['done'=>'Done'],$arr);
            }else{

                $arr['subGhost']=$subGhost;
                $arr['ghost']=$ghost;
                $arr['infoGhost']=$infoGhost;
                return view('Admin.Ghosts.infoGhost.update',['msg'=>'You Dont Add All Information'],$arr);

            }



        }else{

            $arr['subGhost']=$subGhost;
            $arr['ghost']=$ghost;
            $arr['infoGhost']=$infoGhost;
            return view('Admin.Ghosts.infoGhost.update',$arr);


        }


    }

    public function delete(Request $request ,$id){

        $infoGhost =infoGhost::find($id);

        if($request->isMethod('post')){
            try{
                unlink(public_path('/images/'.$infoGhost->img));
            }catch (\Exception $exception){

            }

            if(!is_null($infoGhost)){

                $infoGhost->delete();
                $infoGhost=infoGhost::all();
                $subGhost  =SubGhost::all();
                $arr['subGhost']=$subGhost;
                $ghost=Ghost::all();

                $arr['ghost']=$ghost;
                $arr['infoGhost']=$infoGhost;
                return view('Admin.Ghosts.infoGhost.index_view',['done'=>'Done'],$arr);

            }else{

                $infoGhost=infoGhost::all();
                $subGhost  =SubGhost::all();
                $arr['subGhost']=$subGhost;
                $ghost=Ghost::all();

                $arr['ghost']=$ghost;
                $arr['infoGhost']=$infoGhost;
                return view('Admin.Ghosts.infoGhost.index_view',$arr);

            }



        }else{
            $arr['infoGhost']=$infoGhost;
            return view('Admin.Ghosts.infoGhost.delete',$arr);

        }


    }
}
