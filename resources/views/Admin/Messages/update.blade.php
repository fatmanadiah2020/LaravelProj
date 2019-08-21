@extends('layout.Admin_App')

@section('title')
    Update Ghost
@endsection


@section('content')
    <div class="row"><br>
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
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Update ghost
                        </div>
                        <div class="panel-body">
                            <label>Name:</label>
                            <input type="text" name="name" placeholder="Name:" value="{{$ghost->name}}">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-warning"> update</button>
                            <a href="{{route('Ghost')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection