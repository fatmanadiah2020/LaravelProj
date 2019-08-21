@extends('layout.Admin_App')

@section('title')
    Delete Message From {{$user->userName}}
@endsection


@section('content')
    <div class="row"><br>
        <div class="form-group">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Delete Message
                            @if(!is_null($message->send))
                             to
                            @else
                            From
                            @endif



                             {{$user->userName}}
                        </div>
                        <div class="panel-body">
                            Are you sure :<br>
                            @if(!is_null($message->send))
                            {!! strip_tags($message->send) !!}
                            @else
                            {!! strip_tags($message->rePlay) !!}
                            @endif

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('messages.index',['type'=>'all'])}}" class="btn btn-primary">No</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
