@extends('layout.Admin_App')

@section('title')
    Update Product
@endsection

@section('head')
    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Change Img';
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 400;
            font-size: 10pt;
        }
        .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
    </style>
@endsection

@section('content')
    <div class="row"><br>
        <div class="form-group">
            <form action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-lg-8">
                    @if(isset($msg))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-times"></i> {{$msg}}
                        </div>
                    @endif


                    @if(isset($done))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check"></i> {{$done}}
                        </div>
                    @endif
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            update Product
                        </div>


                        <div class="panel-body">

                            <label>Name:</label>
                            <input type="text" name="name" value="{{$product->name}}" placeholder="Name:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>Price:</label>
                            <input type="text" name="price" value="{{$product->price}}" placeholder="Price:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                            <label>pcsBox:</label>
                            <input type="text" name="pcs" value="{{$product->pcsBox}}" placeholder="PCS Box" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                            <label>minimum QTY:</label>
                            <input type="text" name="min" value="{{$product->min}}" placeholder="minimum QTY" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>size:</label>
                            <textarea name="size" class="ckeditor"  >{!! str_replace('\n','<br>',$product->size) !!}</textarea>
                        </div>

                        <div class="panel-body">

                            <label>Description:</label>
                            <textarea name="info" class="ckeditor" >{!! str_replace('\n','<br>',$product->info) !!}</textarea>
                        </div>



                        <div class="panel-body">


                            <label>type Product:</label>

                            <select class="js-example-basic-single" name="classId" style="width: 100%">

                                @foreach($typeProduct as $typeProduct)
                                    <option value="{{$typeProduct->id}}" @if($typeProduct->id == $product->classId) selected @endif>{{$typeProduct->name}}</option>
                                @endforeach

                            </select>

                        </div>



                        <div class="panel-body">

                            <input type="file" class="custom-file-input" name="photo" placeholder="info" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>





                        <div class="panel-footer">
                            <button class="btn btn-warning"> Save</button>
                            <a href="{{route('product.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-lg-4">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        Image
                    </div>


                    <div class="panel-body">



                        <img  src="{{url('images/'.$product->img)}}"  style="width:250px;">

                    </div>

                </div>
            </div>
        </div>


    </div>


    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

@endsection
