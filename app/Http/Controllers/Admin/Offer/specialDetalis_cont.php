<?php

namespace App\Http\Controllers\Admin\Offer;

use App\Model\Machine;
use App\Model\monthlySpecail;
use App\Model\Product;
use App\Model\specialDetalis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class specialDetalis_cont extends Controller
{

    public function index(){

        $product=Product::all();
        $machine=Machine::all();
        $monthySpecial=monthlySpecail::all();
        $arr['product']=$product;
        $arr['machine']=$machine;
        $arr['monthySpecial']=$monthySpecial;
        $specialDetails=specialDetalis::all();
        $arr['specialDetails']=$specialDetails;
        return view('Admin.Offer.offerDetails.index_view',$arr);
    }

    public function add(Request $request){


        if($request->isMethod('post')){





                if(isset($_GET['type']) &&   !is_null($request->input('productId')) && !is_null($request->input('classId')) &&
                !is_null($request->input('qty'))  && !is_null($request->input('productId'))){

                    $type=$_GET['type'];
                    specialDetalis::create([
                        'classId'=>$request->input('classId'),
                        'qty'=>$request->input('qty'),
                        'productId'=>$request->input('productId'),
                        'type'=>$type,
                        'note'=>$request->input('note')

                    ])->get();

                    $product=Product::all();
                    $machine=Machine::all();
                    $monthySpecial=monthlySpecail::all();
                    $arr['product']=$product;
                    $arr['machine']=$machine;
                    $arr['monthySpecial']=$monthySpecial;
                    return view('Admin.Offer.offerDetails.add',['done'=>'Done'],$arr);

                }else{

                    $product=Product::all();
                    $machine=Machine::all();
                    $monthySpecial=monthlySpecail::all();
                    $arr['product']=$product;
                    $arr['machine']=$machine;
                    $arr['monthySpecial']=$monthySpecial;
                    return view('Admin.Offer.offerDetails.add',['msg'=>'You Dont Add All Information'],$arr);

                }




        }else{

            $product=Product::all();
            $machine=Machine::all();
            $monthySpecial=monthlySpecail::all();
            $arr['product']=$product;
            $arr['machine']=$machine;
            $arr['monthySpecial']=$monthySpecial;
            return view('Admin.Offer.offerDetails.add',$arr);


        }

    }

    public function delete(Request $request,$id){


        $specialDetails=specialDetalis::find($id);
        if($request->isMethod('post')){


            if(!is_null($specialDetails)){

                $specialDetails->delete();
                $product=Product::all();
                $machine=Machine::all();
                $monthySpecial=monthlySpecail::all();
                $arr['product']=$product;
                $arr['machine']=$machine;
                $arr['monthySpecial']=$monthySpecial;
                $specialDetails=specialDetalis::all();
                $arr['specialDetails']=$specialDetails;
                return view('Admin.Offer.offerDetails.index_view',['done'=>'Done'],$arr);

            }else{

                $product=Product::all();
                $machine=Machine::all();
                $monthySpecial=monthlySpecail::all();
                $arr['product']=$product;
                $arr['machine']=$machine;
                $arr['monthySpecial']=$monthySpecial;
                $specialDetails=specialDetalis::all();
                $arr['specialDetails']=$specialDetails;
                return view('Admin.Offer.offerDetails.index_view',$arr);

            }





        }else{

            $type=$specialDetails->type;
            $productId=$specialDetails->productId;
            if($type =="M"){
                $str=Machine::find($productId);
            }else{

                $str=Product::find($productId);
            }
            $arr['str']=$str;

            return view('Admin.Offer.offerDetails.delete',$arr);
        }

    }
}
