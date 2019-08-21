@extends('layout.Admin_App')

@section('title')
    Delete Data Product
@endsection


@section('content')
    <div class="row"><br>
        <div class="form-group">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Delete
                        </div>
                        <div class="panel-body">
                            Are you sure :<br>

                                    {{"itemNo:"}}{{$data->itemNo}}<br>
                                    {{"Name:"}}{{$product->name}}

                        </div>
                        <div class="panel-body">



                            <img  src="{{url('images/'.$product->img)}}"  style="width:200px;">

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('data.index')}}" class="btn btn-primary">No</a>
                        </div>
                    </div>
                </div>
            </form>


            </div>

        </div>


@endsection