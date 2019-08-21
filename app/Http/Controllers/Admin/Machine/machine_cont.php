<?php

namespace App\Http\Controllers\Admin\Machine;

use App\Model\Machine;
use App\Model\typeMachine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class machine_cont extends Controller
{
    public function index(){

        $machine=Machine::all();
        $typeMachine=typeMachine::all();
        $arr['typeMachine']=$typeMachine;
        $arr['machine']=$machine;
        return view('Admin.Machine.Machine.index_view',$arr);

    }


    public function add(Request $request){


        if($request->isMethod('post')){

           if(!is_null($request->file('photo')) && !is_null($request->input('classId')) && !is_null($request->input('name'))
           && !is_null($request->input('price'))  && !is_null($request->input('info'))
            && !is_null($request->input('itemNo'))  && !is_null($request->input('type'))  ){

               $photo =$request->file('photo');
               $path=$photo->storeAs('img/machine',$photo->getClientOriginalName(),'images');

               Machine::create([
                   'classId'=>$request->input('classId'),
                   'name'=>$request->input('name'),
                   'img'=>$path,
                   'status'=>1,
                   'price'=>$request->input('price'),
                   'info'=>$request->input('info'),
                   'type1'=>'m',
                   'itemNo'=>$request->input('itemNo'),
                   'idType'=>$request->input('type')
               ])->get();

               $typeMachine=typeMachine::all();
               $arr['typeMachine']=$typeMachine;
               return view('Admin.Machine.Machine.add',['done'=>'Done'],$arr);

           }else{

               $typeMachine=typeMachine::all();
               $arr['typeMachine']=$typeMachine;
               return view('Admin.Machine.Machine.add',['msg'=>'You Dont Add All Information'],$arr);

           }

        }else{
            $typeMachine=typeMachine::all();
            $arr['typeMachine']=$typeMachine;

            return view('Admin.Machine.Machine.add',$arr);
        }


    }


    public function update(Request $request,$id){

        $machine=Machine::find($id);
        if($request->isMethod('post')){

            if(!is_null($request->file('photo'))){

                try{

                    unlink(public_path('/images/'.$machine->img));
                }catch (\Exception $exception){

                }

                $photo =$request->file('photo');
                $path=$photo->storeAs('img/machine',$photo->getClientOriginalName(),'images');
                $machine->img=$path;
                $machine->update();
            }

            if(!is_null($request->input('classId')) && !is_null($request->input('name'))
                && !is_null($request->input('price'))  && !is_null($request->input('info'))
                && !is_null($request->input('itemNo'))  && !is_null($request->input('type'))  ){

                $machine->name=$request->input('name');
                $machine->price=$request->input('price');
                $machine->itemNo=$request->input('itemNo');
                $machine->idType=$request->input('type');
                $machine->info=$request->input('info');
                $machine->classId=$request->input('classId');
                $machine->update();
                $typeMachine=typeMachine::all();
                $arr['machine']=$machine;
                $arr['typeMachine']=$typeMachine;
                return view('Admin.Machine.Machine.update',['done'=>'Done'],$arr);

            }else{

                $typeMachine=typeMachine::all();
                $arr['machine']=$machine;
                $arr['typeMachine']=$typeMachine;

                return view('Admin.Machine.Machine.update',['msg'=>'You Dont Add All Information'],$arr);


            }




        }else{

            $typeMachine=typeMachine::all();
            $arr['machine']=$machine;
            $arr['typeMachine']=$typeMachine;
            return view('Admin.Machine.Machine.update',$arr);

        }


    }
    public function delete(Request $request ,$id){

        $machine=Machine::find($id);

        if($request->isMethod('post')){
            try{
                unlink(public_path('/images/'.$machine->img));
            }catch (\Exception $exception){

            }

            if(!is_null($machine)){

                $machine->delete();
                $machine=Machine::all();
                $arr['machine']=$machine;
                $typeMachine=typeMachine::all();
                $arr['typeMachine']=$typeMachine;
                return view('Admin.Machine.Machine.index_view',['done'=>'Done'],$arr);

            }else{

                $machine=Machine::all();
                $arr['machine']=$machine;
                $typeMachine=typeMachine::all();
                $arr['typeMachine']=$typeMachine;
                return view('Admin.Machine.Machine.index_view',$arr);
            }



        }else{
            $arr['machine']=$machine;
            return view('Admin.Machine.Machine.delete',$arr);

        }


    }
}
