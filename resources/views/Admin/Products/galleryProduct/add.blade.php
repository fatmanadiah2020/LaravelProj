@extends('layout.Admin_App')

@section('title')
    Add Product Images
    @endsection

@section('head')
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
    @endsection


@section('content')
    <div class="row"><br>
        <div class="form-group">
                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                     <div class="col-lg-4">
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Product Images
                        </div>


                        <div class="panel-body">
                            <label>Product:</label>
                            <select class="js-example-basic-single" name="classId" style="width: 100%">


                                @foreach($product as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach

                            </select>

                        </div>


                        <div class="panel-body">

                            <input type="file" class="custom-file-input" name="photo" placeholder="info" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('galleryProduct.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                </form>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

@endsection