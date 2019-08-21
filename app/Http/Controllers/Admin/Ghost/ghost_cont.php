<?php

namespace App\Http\Controllers\Admin\Ghost;

use App\Model\Ghost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ghost_cont extends Controller
{

    public function index(){

        $ghost=Ghost::all();
        $arr['ghost']=$ghost;
        return view('Admin.Ghosts.Ghost.index_view',$arr);
    }

    public function add(Request $request){


        if($request->isMethod('post')) {

            if(!is_null($request->input('name'))){
                Ghost::create($request->all())->get();
                return view('Admin.Ghosts.Ghost.add',['done'=>'Done']);

            }else{

                return view('Admin.Ghosts.Ghost.add',['msg'=>'You Dont Add All Information']);


            }




        }else{


            return view('Admin.Ghosts.Ghost.add');
        }

    }


    public function update(Request $request,$id){


        if($request->isMethod('post')) {

            if(!is_null($request->input('name'))) {
                $ghost = Ghost::find($id);
                $ghost->name = $request->input('name');
                $ghost->update();
                $ghost=Ghost::find($id);
                $arr['ghost']=$ghost;

                return view('Admin.Ghosts.Ghost.update',['done'=>'done'],$arr);

            }else{
                $ghost=Ghost::find($id);
                $arr['ghost']=$ghost;

                return view('Admin.Ghosts.Ghost.update',['msg'=>'required column'],$arr);

            }

        }else{
            $ghost=Ghost::find($id);
            $arr['ghost']=$ghost;
            return view('Admin.Ghosts.Ghost.update',$arr);
        }

    }


    public function delete(Request $request,$id){

        if($request->isMethod('post')) {


            try{

                $ghost=Ghost::find($id);
                if(!is_null($ghost)){
                    $ghost->delete();

                }

                $ghost=Ghost::find($id);
                $arr['ghost']=$ghost;
                $ghost=Ghost::all();
                $arr['ghost']=$ghost;
                return view('Admin.Ghosts.Ghost.index_view',['done'=>'done'],$arr);


            }catch (\Exception $exception){

                $ghost=Ghost::all();
                $arr['ghost']=$ghost;

                return view('Admin.Ghosts.Ghost.index_view',$arr);


            }



        }else{
            $ghost=Ghost::find($id);
            $arr['ghost']=$ghost;

            return view('Admin.Ghosts.Ghost.delete',$arr);
        }

    }
}
