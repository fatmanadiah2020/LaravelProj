<?php

namespace App\Http\Controllers\Admin\Users;
use Hash;
use App\Model\Users;
use App\Model\contactInfo1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class users_cont extends Controller
{
    public function index(){


    $users=Users::all();
      $arr['users']=$users;
      return view('Admin.Users.index_view',$arr);

    }

    public function add(Request $request){

      $contactInfo=contactInfo1::all();
      if($request->isMethod('post')){

          if(!is_null($request->input('classId'))   && !is_null($request->input('name'))
          && !is_null($request->input('password'))  && !is_null($request->input('rePassword'))
          && !is_null($request->input('email'))   ){




                if($request->input('password') != $request->input('rePassword')){

                  $arr['contactInfo']=$contactInfo;
                  return view('Admin.Users.add',['msg'=>'passwords dont match'],$arr);
                }
                if(!(filter_var($request->input('email'), FILTER_VALIDATE_EMAIL))){
                  $arr['contactInfo']=$contactInfo;
                    return view('Admin.Users.add',['msg'=>'invalid email'],$arr);
                }

                //THIS EMAIL IS NOT FOUND
                if(Users::where('email','=',$request->input('email'))->count()>0){
                  $arr['contactInfo']=$contactInfo;
                    return view('Admin.Users.add',['msg'=>'email is found'],$arr);
                }

                //THIS User Have Account
                if(Users::where('userId','=',$request->input('classId'))->count()>0){
                  $arr['contactInfo']=$contactInfo;
                    return view('Admin.Users.add',['msg'=>'THIS User Have Account'],$arr);
                }

                $password=Hash::make($request->input('password'));
                $date1=date("y/m/d");
                Users::Create([
                  'userName'=>$request->input('name'),
                  'password'=>$password,
                  'email'=>$request->input('email'),
                  'status'=>1,
                  'userId'=>$request->input('classId'),
                  'datecreate'=>$date1
                  ])->get();
                    $arr['contactInfo']=$contactInfo;
                    return view('Admin.Users.add',['done'=>'done'],$arr);

          }else{

                $arr['contactInfo']=$contactInfo;
                return view('Admin.Users.add',['msg'=>'You Dont Add All Information'],$arr);

          }

      }else{
        $arr['contactInfo']=$contactInfo;
        return view('Admin.Users.add',$arr);

      }

    }


    public function update(Request $request,$id){

      $contactInfo=contactInfo1::all();
      $users=Users::find($id);
      if($request->isMethod('post')){

          if(!is_null($request->input('classId'))   && !is_null($request->input('name'))
          && !is_null($request->input('password'))  && !is_null($request->input('rePassword'))
          && !is_null($request->input('email'))   ){




                if($request->input('password') != $request->input('rePassword')){

                  $arr['contactInfo']=$contactInfo;
                  $arr['users']=$users;
                  return view('Admin.Users.update',['msg'=>'passwords dont match'],$arr);
                }
                if(!(filter_var($request->input('email'), FILTER_VALIDATE_EMAIL))){
                  $arr['contactInfo']=$contactInfo;
                  $arr['users']=$users;
                    return view('Admin.Users.update',['msg'=>'invalid email'],$arr);
                }




                $password=Hash::make($request->input('password'));
              //  $date1=date("y/m/d");


                  $users->password=$password;
                  $users->userName=$request->input('name');
                  $users->email=$request->input('email');
                  $users->update();
                    $arr['contactInfo']=$contactInfo;
                  //  $users=Users::all();
                    $arr['users']=$users;
                    return view('Admin.Users.update',['done'=>'done'],$arr);

          }else{
                $arr['users']=$users;
                $arr['contactInfo']=$contactInfo;
                return view('Admin.Users.update',['msg'=>'You Dont Add All Information'],$arr);

          }

      }else{
        $arr['users']=$users;
        $arr['contactInfo']=$contactInfo;
        return view('Admin.Users.update',$arr);

      }

    }
    public function delete(Request $request,$id){

      $users=Users::find($id);
        if($request->isMethod('post')){

            if(!is_null($users)){
              $users->delete();
              $users=Users::all();
                $arr['users']=$users;
              return view('Admin.Users.index_view',['done'=>'done'],$arr);
            }else{
              $users=Users::all();
                $arr['users']=$users;
              return view('Admin.Users.index_view',$arr);
            }

        }else{

        $arr['users']=$users;
          return view('Admin.Users.delete',$arr);

        }
    }
}
