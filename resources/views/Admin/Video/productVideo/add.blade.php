@extends('layout.Admin_App')

@section('title')
    Add Product Video
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

    <div class="row">

        <br>

        <div class="form-group">

                <form action="" method="post">
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
                            Add Product Video
                        </div>
                        <div class="panel-body">


                            <label>type Product:</label>

                            <select class="js-example-basic-single" name="classId" style="width: 100%">

                            @foreach($product as $product1)
                            <option value="{{$product1->id}}">{{$product1->name}}</option>
                            @endforeach

                            </select>

                        </div>
                        <div class="panel-body">
                          <label>Link:</label>
                            <input type="text" name="url" placeholder="URL:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('productVideo.index',['type'=>'product'])}}" class="btn btn-primary">Back</a>
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
