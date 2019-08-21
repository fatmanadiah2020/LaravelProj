@extends('layout.Admin_App')

@section('title')
    Delete  Type Gallery
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
                            {{$galleryClass->arName}}
                        </div>

                        <div class="panel-body">



                            <img  src="{{url('images/'.$galleryClass->imgClass)}}"  style="width:250px;">

                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('galleryClass.index')}}" class="btn btn-primary">No</a>
                        </div>
                    </div>
                </div>
            </form>


            </div>

        </div>


@endsection