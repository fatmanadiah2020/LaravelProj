@extends('layout.Admin_App')

@section('title')
    Delete Product Ghost
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
                            {{$subGhost->name}}
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('subghost.index')}}" class="btn btn-primary">No</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection