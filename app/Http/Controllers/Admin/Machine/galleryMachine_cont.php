<?php

namespace App\Http\Controllers\Admin\Machine;

use App\Model\galleryMachine;
use App\Model\Machine;
use App\Model\typeMachine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class galleryMachine_cont extends Controller
{

    public function index(){



        $machine=Machine::all();
        $galleryMachine=galleryMachine::all()->groupBy('classId');
        $arr['galleryMachine']=$galleryMachine;
        $arr['machine']=$machine;

        return view('Admin.Machine.galleryMachine.index_view',$arr);

    }

    public function add(Request $request){



        if($request->isMethod('post')){

            try {
                if(!is_null($request->file('photo'))){
                    $photo = $request->file('photo');
                    $path = $photo->storeAs('img/galleryMachine', $photo->getClientOriginalName(), 'images');
                }
            }catch (\Exception $ex){
                dd("choose image");
            }

          if(!is_null($request->file('photo'))  && !is_null($request->input('classId'))){

              galleryMachine::create([
                  'classId'=>$request->input('classId'),
                  'arName'=>'y',
                  'img'=>$path,
                  'isSusbend'=>1

              ])->get();

              $machine=Machine::all();
              $arr['machine']=$machine;
              return view('Admin.Machine.galleryMachine.add',['done'=>'Done'],$arr);

          }else{

              $machine=Machine::all();
              $arr['machine']=$machine;
              return view('Admin.Machine.galleryMachine.add',['msg'=>'You Dont Add All Information'],$arr);

          }



        }else{
            $machine=Machine::all();
            $arr['machine']=$machine;
            return view('Admin.Machine.galleryMachine.add',$arr);

        }

    }
    public function delete(Request $request,$id){

        $galleryMachine=galleryMachine::find($id);
        if($request->isMethod('post')){

            try{
                unlink(public_path('/images/'.$galleryMachine->img));
            }catch (\Exception $exception){

            }

           if(!is_null( $galleryMachine)){

               $galleryMachine->delete();
               $machine=Machine::all();
               $galleryMachine=galleryMachine::all()->groupBy('classId');
               $arr['galleryMachine']=$galleryMachine;
               $arr['machine']=$machine;
               return view('Admin.Machine.galleryMachine.index_view',['done'=>'Done'],$arr);

           }else{

               $machine=Machine::all();
               $galleryMachine=galleryMachine::all()->groupBy('classId');
               $arr['galleryMachine']=$galleryMachine;
               $arr['machine']=$machine;
               return view('Admin.Machine.galleryMachine.index_view',$arr);
           }





        }else{

            $arr['galleryMachine']=$galleryMachine;
            return view('Admin.Machine.galleryMachine.delete',$arr);

        }


    }
}
