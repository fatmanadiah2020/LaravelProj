<?php

namespace App\Http\Controllers\Admin\Machine;

use App\Model\typeMachine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class typeMachine_cont extends Controller
{



    public function index(){

        $typeMachine=typeMachine::all();
        $arr['typeMachine']=$typeMachine;
        return view('Admin.Machine.typeMachine.index_view',$arr);

    }


    public function add(Request $request){

        if($request->isMethod('post')){


            if(!is_null($request->file('photo')) && !is_null($request->input('name'))){

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/typeMachine',$photo->getClientOriginalName(),'images');
                typeMachine::create([
                    'name'=>$request->input('name'),
                    'status'=>1,
                    'img'=>$path
                ])->get();
                return view('Admin.Machine.typeMachine.add',['done'=>'Done']);
            }else{

                return view('Admin.Machine.typeMachine.add',['msg'=>'You Dont Add All Information']);

            }




        }else{

            return view('Admin.Machine.typeMachine.add');
        }


    }


    public function update(Request $request,$id){

        $typeMachine=typeMachine::find($id);
        if($request->isMethod('post')){

            if(!is_null($request->file('photo'))){

                try{

                    unlink(public_path('/images/'.$typeMachine->img));
                }catch (\Exception $exception){

                }

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/typeMachine',$photo->getClientOriginalName(),'images');
                $typeMachine->img=$path;
                $typeMachine->update();
            }

            if(!is_null($request->input('name'))){

                $typeMachine->name=$request->input('name');
                $typeMachine->update();
                $arr['typeMachine']=$typeMachine;
                return view('Admin.Machine.typeMachine.update',['done'=>'Done'],$arr);
            }else{

                $arr['typeMachine']=$typeMachine;
                return view('Admin.Machine.typeMachine.update',['msg'=>'You Dont Add All Information'],$arr);

            }



        }else{

            $arr['typeMachine']=$typeMachine;
            return view('Admin.Machine.typeMachine.update',$arr);

        }


    }
    public function delete(Request $request ,$id){

        $typeMachine=typeMachine::find($id);

        if($request->isMethod('post')){
            try{
                unlink(public_path('/images/'.$typeMachine->img));
            }catch (\Exception $exception){

            }

           if(!is_null($typeMachine)){

               $typeMachine->delete();
               $typeMachine=typeMachine::all();
               $arr['typeMachine']=$typeMachine;
               return view('Admin.Machine.typeMachine.index_view',['done'=>'Done'],$arr);


           }else{

               $typeMachine=typeMachine::all();
               $arr['typeMachine']=$typeMachine;
               return view('Admin.Machine.typeMachine.index_view',$arr);
           }



        }else{
            $arr['typeMachine']=$typeMachine;
            return view('Admin.Machine.typeMachine.delete',$arr);

        }


    }
}
