<?php

namespace App\Http\Controllers\Admin\Offer;

use App\Model\monthlySpecail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class monthlySpecail_cont extends Controller
{
    public function index(){

        $specialClass=monthlySpecail::all();
        $arr['specialClass']=$specialClass;
        return view('Admin.Offer.monthlySpecail.index_view',$arr);


    }

    public function add(Request $request){

        if($request->isMethod('post')){

            try {

               if(!is_null($request->file('photo'))){

                   $photo = $request->file('photo');
                   $path = $photo->storeAs('img/specialOffer', $photo->getClientOriginalName(), 'images');

               }

            }catch (\Exception $ex){

            }
           if(!is_null($request->file('photo'))  && !is_null($request->input('name'))  && !is_null($request->input('itemNo'))
               && !is_null($request->input('price'))){
               monthlySpecail::create([

                   'name'=>$request->input('name'),
                   'itemNo'=>$request->input('itemNo'),
                   'price'=>$request->input('price'),
                   'img'=>$path,
                   'status'=>1,
                   'link'=>''

               ])->get();

               return view('Admin.Offer.monthlySpecail.add',['done'=>'Done']);

           }else{

               return view('Admin.Offer.monthlySpecail.add',['msg'=>'You Dont Add All Information']);

           }






        }else{

            return view('Admin.Offer.monthlySpecail.add');


        }



    }


    public function update(Request $request,$id){


        $monthlySpecail=monthlySpecail::find($id);
        if($request->isMethod('post')){

            if(!is_null($request->file('photo'))){

                try{

                    unlink(public_path('/images/'.$monthlySpecail->img));
                    $photo =$request->file('photo');
                    $path=$photo->storeAs('img/specialOffer',$photo->getClientOriginalName(),'images');
                    $monthlySpecail->img=$path;
                    $monthlySpecail->update();
                }catch (\Exception $exception){

                }
            }

            if( !is_null($request->input('name'))  && !is_null($request->input('itemNo'))
                && !is_null($request->input('price'))){
            $monthlySpecail->name=$request->input('name');
            $monthlySpecail->itemNo=$request->input('itemNo');
            $monthlySpecail->price=$request->input('price');
            $monthlySpecail->update();
                $arr['monthlySpecail']=$monthlySpecail;
                return view('Admin.Offer.monthlySpecail.update',['done'=>'Done'],$arr);

            }else{

                $arr['monthlySpecail']=$monthlySpecail;
                return view('Admin.Offer.monthlySpecail.update',['msg'=>'You Dont Add All Information'],$arr);

            }




        }else{
            $arr['monthlySpecail']=$monthlySpecail;
            return view('Admin.Offer.monthlySpecail.update',$arr);
        }


    }


    public function delete(Request $request,$id){

        $monthlySpecail=monthlySpecail::find($id);

        if($request->isMethod('post')){

            try{

              if(!is_null($monthlySpecail)){
                  unlink(public_path('/images/'.$monthlySpecail->img));
                  $monthlySpecail->delete();
                  $specialClass=monthlySpecail::all();
                  $arr['specialClass']=$specialClass;
                  return view('Admin.Offer.monthlySpecail.index_view',['done'=>'Done'],$arr);

              }else{

                  $specialClass=monthlySpecail::all();
                  $arr['specialClass']=$specialClass;
                  return view('Admin.Offer.monthlySpecail.index_view',$arr);
              }

            }catch (\Exception $exception){

            }





        }else{

            $arr['monthlySpecail']=$monthlySpecail;
            return view('Admin.Offer.monthlySpecail.delete',$arr);


        }


    }
}
