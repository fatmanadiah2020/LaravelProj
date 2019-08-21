<?php

namespace App\Http\Controllers\Admin\Ghost;

use App\Model\Ghost;
use App\Model\infoGhost;
use App\Model\SubGhost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class subGhost_cont extends Controller
{
    public function index(){

        $subGhost  =SubGhost::all();
        $arr['subGhost']=$subGhost;
        $ghost=Ghost::all();

        $arr['ghost']=$ghost;

        return view('Admin.Ghosts.subGhost.index_view',$arr);

    }

    public function add(Request $request){

        $ghost=Ghost::all();
        if($request->isMethod('post')){

            if(!is_null($request->input('name'))&& !is_null($request->input('classId'))){


                $arr['ghost']=$ghost;
                subGhost::create($request->all())->get();
                return view('Admin.Ghosts.subGhost.add',['done'=>'Done'],$arr);

            }else{

                $arr['ghost']=$ghost;
                return view('Admin.Ghosts.subGhost.add',['msg'=>'You Dont Add All Information'],$arr);

            }

        }else{

            $arr['ghost']=$ghost;
            return view('Admin.Ghosts.subGhost.Add',$arr);

        }


    }

    public function update(Request $request ,$id){

        $subGhost=subGhost::find($id);
        $ghost=Ghost::all();

        if($request->isMethod('post')){

            if(!is_null($request->input('name')) && !is_null($request->input('classId'))){
                $subGhost->classId=$request->input('classId');
                $subGhost->name=$request->input('name');
                $subGhost->update();
                $arr['subGhost']=$subGhost;
                $arr['ghost']=$ghost;
                return view('Admin.Ghosts.subGhost.update',['done'=>'Done'],$arr);

            }else{

                $arr['subGhost']=$subGhost;
                $arr['ghost']=$ghost;
                return view('Admin.Ghosts.subGhost.update',['msg'=>'You Dont Add All Information'],$arr);

            }




        }else{

            $arr['subGhost']=$subGhost;
            $arr['ghost']=$ghost;
            return view('Admin.Ghosts.subGhost.update',$arr);


        }


    }

    public function delete(Request $request ,$id){

        $subGhost=subGhost::find($id);


        if($request->isMethod('post')){

           if(!is_null($subGhost)){

               $subGhost->delete();
               $subGhost  =SubGhost::all();
               $arr['subGhost']=$subGhost;
               $ghost=Ghost::all();
               $arr['ghost']=$ghost;
               return view('Admin.Ghosts.subGhost.index_view',['done'=>'Done'],$arr);


           }else{

               $subGhost  =SubGhost::all();
               $arr['subGhost']=$subGhost;
               $ghost=Ghost::all();
               $arr['ghost']=$ghost;
               return view('Admin.Ghosts.subGhost.index_view',$arr);

           }



        }else{
            $arr['subGhost']=$subGhost;
            return view('Admin.Ghosts.subGhost.delete',$arr);

        }


    }


}
