<?php

namespace App\Http\Controllers\Admin\ContactInfo;

use App\Model\contactInfo1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactInfo_cont extends Controller
{
  public function index($type){

      if($type =="all"){
        $contactInfo=contactInfo1::all();
        $arr['contactInfo']=$contactInfo;
      }elseif($type=='unread'){

        $contactInfo=contactInfo1::all()->where('isRead','=',0);
        $arr['contactInfo']=$contactInfo;
      }

      return view('Admin.contactInfo.index_view',$arr);


  }


    public function read(Request $request,$id){

        $contactInfo=contactInfo1::find($id);
        $contactInfo->isRead=1;
        $contactInfo->update();
        $arr['contactInfo']=$contactInfo;
          return view('Admin.contactInfo.read',$arr);
    }


    public function add(Request $request){

        if($request->isMethod('post')){

           try{
               $path1 ="";
               $path2="";
               $path3 ="";

               if(!is_null($request->file('img1')) || !is_null($request->file('img2')) || !is_null($request->file('img3')) ){

                   if(!is_null($request->file('img1'))){
                       $photo1 = $request->file('img1');
                       $path1 = $photo1->storeAs('img/contactInfo', $photo1->getClientOriginalName(), 'images');
                   }
                   if(!is_null($request->file('img2'))){
                       $photo2 = $request->file('img2');
                       $path2 = $photo2->storeAs('img/contactInfo', $photo2->getClientOriginalName(), 'images');
                   }

                   if(!is_null($request->file('img3'))){
                       $photo3 = $request->file('img3');
                       $path3 = $photo3->storeAs('img/contactInfo', $photo3->getClientOriginalName(), 'images');
                   }
               }

           }catch (\Exception $exception){

           }

           if(!is_null($request->input('name'))   && !is_null($request->input('email')) && !is_null($request->input('company'))

               && !is_null($request->input('country')) && !is_null($request->input('address')) && !is_null($request->input('city'))  && !is_null($request->input('tel')) ){


               $date1=date("y/m/d");
               contactInfo1::create([

                   'name'=>$request->input('name'),
                   'email'=>$request->input('email'),
                   'company'=>$request->input('company'),
                   'address'=>$request->input('address'),
                   'city'=>$request->input('city'),
                   'tel'=>$request->input('tel'),
                   'country'=>$request->input('country'),
                   'img'=>$path1,
                   'img1'=>$path2,
                   'img2'=>$path3,
                   'fax'=>"",
                   'isRead'=>0,
                   'status'=>1,
                   'subScribe'=>1,
                   'date1'=>$date1

               ])->get();
               return view('Admin.contactInfo.add',['done'=>'Done']);

           }else{


               return view('Admin.contactInfo.add',['msg'=>'You Dont Add All Information']);


           }



        }else{

            return view('Admin.contactInfo.add');

        }


    }


    public function update(Request $request,$id){

        $contactInfo=contactInfo1::find($id);
        if($request->isMethod('post')){



            if(!is_null($request->file('img1'))){

                try{

                    unlink(public_path('/images/'.$contactInfo->img1));
                }catch (\Exception $exception){

                }

                $photo =$request->file('img1');
                $path=$photo->storeAs('img/contactInfo',$photo->getClientOriginalName(),'images');
                $contactInfo->img=$path;
                $contactInfo->update();
            }
            if(!is_null($request->file('img2'))){

                try{

                    unlink(public_path('/images/'.$contactInfo->img2));
                }catch (\Exception $exception){

                }

                $photo =$request->file('img2');
                $path=$photo->storeAs('img/contactInfo',$photo->getClientOriginalName(),'images');
                $contactInfo->img1=$path;
                $contactInfo->update();
            }
            if(!is_null($request->file('img3'))){

                try{

                    unlink(public_path('/images/'.$contactInfo->img3));
                }catch (\Exception $exception){

                }

                $photo =$request->file('img3');
                $path=$photo->storeAs('img/contactInfo',$photo->getClientOriginalName(),'images');
                $contactInfo->img2=$path;
                $contactInfo->update();
            }

            if(!is_null($request->input('name'))   && !is_null($request->input('email')) && !is_null($request->input('company'))

                && !is_null($request->input('country')) && !is_null($request->input('address')) && !is_null($request->input('city'))  && !is_null($request->input('tel')) ) {


                $contactInfo->name=$request->input('name');
                $contactInfo->email=$request->input('email');
                $contactInfo->company=$request->input('company');
                $contactInfo->country=$request->input('country');
                $contactInfo->address=$request->input('address');
                $contactInfo->city=$request->input('city');
                $contactInfo->tel=$request->input('tel');
                $contactInfo->update();


                $arr['contactInfo']=$contactInfo;
                return view('Admin.contactInfo.update',['done'=>'Done'],$arr);

            }else{

                $arr['contactInfo']=$contactInfo;
                return view('Admin.contactInfo.update',['msg'=>'You Dont Add All Information'],$arr);


            }




            }else{

            $arr['contactInfo']=$contactInfo;
            return view('Admin.contactInfo.update',$arr);

        }


    }

    public function delete(Request $request,$id){


        $contactInfo=contactInfo1::find($id);
        if($request->isMethod('post')){

            try{
                unlink(public_path('/images/'.$contactInfo->img));
                unlink(public_path('/images/'.$contactInfo->img1));
                unlink(public_path('/images/'.$contactInfo->img2));
            }catch (\Exception $exception){

            }

            if(!is_null($contactInfo)){

                $contactInfo->delete();
                $contactInfo=contactInfo1::all();
                $arr['contactInfo']=$contactInfo;
                return view('Admin.contactInfo.index_view',['done'=>'Done'],$arr);

            }else{
                $contactInfo=contactInfo1::all();
                $arr['contactInfo']=$contactInfo;
                return view('Admin.contactInfo.index_view',$arr);
            }

        }else{

            $arr['contactInfo']= $contactInfo;
            return view('Admin.contactInfo.delete',$arr);

        }


    }
}
