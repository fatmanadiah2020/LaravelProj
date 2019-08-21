<?php

namespace App\Http\Controllers\Admin\Messages;

use App\Model\Users;
use App\Model\Messages1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class messages_cont extends Controller
{
    public function index($type){



          if($type=='unread'){
            $messages=Messages1::all()->where('isSendRead','=',0);
            $users=Users::all();
            $arr['messages']=$messages;
            $arr['users']=$users;
            return view('Admin.Messages.index_view',$arr);
          }

      $messages=Messages1::all();
      $users=Users::all();
      $arr['messages']=$messages;
      $arr['users']=$users;
      return view('Admin.Messages.index_view',$arr);

    }

    public function read(Request $request,$id){

        $message=Messages1::find($id);
        $message->isSendRead=1;
        $message->isReplayRead=1;
        $message->update();
        $userId=$message->userId;
        $user=Users::find($userId);
        $arr['user']=$user;
        $arr['message']=$message;
          return view('Admin.Messages.read',$arr);
    }



    public function add(Request $request){

      if($request->isMethod('post')){

        if(!is_null($request->input('userId')) && !is_null($request->input('message')) ){
          //  dd($request->input('userId') ." " .$request->input('message'));
          Messages1::create([
            'userId'=>$request->input('userId'),
            'isSendRead'=>0,
            'isReplayRead'=>0,
            'send'=>$request->input('message')
            ])->get();
            $messages=Messages1::all();
            $users=Users::all();
            $arr['messages']=$messages;
            $arr['users']=$users;
            return view('Admin.Messages.add',['done'=>'Done'],$arr);

            }else{

              $messages=Messages1::all();
              $users=Users::all();
              $arr['messages']=$messages;
              $arr['users']=$users;
            return view('Admin.Messages.add',['msg'=>'You Dont Add All Information'],$arr);
        }

      }else{

        $users=Users::all();
        $arr['users']=$users;
        return view('Admin.Messages.add',$arr);

      }

    }


    public function delete(Request $request,$id){

      $message=Messages1::find($id);

      if($request->isMethod('post')){

              if(!is_null($message)){
                $userId=$message->userId;
                $user=Users::find($userId);
                $message->delete();
                $messages=Messages1::all();
                $users=Users::all();
                $arr['messages']=$messages;
                $arr['users']=$users;
                return view('Admin.Messages.index_view',['done'=>'Done'],$arr);

                }else{

                  $messages=Messages1::all();
                  $users=Users::all();
                  $arr['messages']=$messages;
                  $arr['users']=$users;
                return view('Admin.Messages.index_view',$arr);
            }

      }else{
        $userId=$message->userId;
        $user=Users::find($userId);
      $arr['message']=$message;
      $arr['user']=$user;
      return view('Admin.Messages.delete',$arr);
      }

    }
}
