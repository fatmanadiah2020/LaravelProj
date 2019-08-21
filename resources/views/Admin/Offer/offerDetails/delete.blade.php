@extends('layout.Admin_App')

@section('title')
    Delete Sepcial Details
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


                            {{$str->name}}
                        </div>
                        <div class="panel-body">



                            <img  src="{{url('images/'.$str->img)}}"  style="width:130px;">
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('special.index')}}" class="btn btn-primary">No</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection