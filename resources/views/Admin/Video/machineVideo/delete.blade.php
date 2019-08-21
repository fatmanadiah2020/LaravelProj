@extends('layout.Admin_App')

@section('title')
    Delete Machine Video
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
                            @foreach($machine as $machine1)
                                @if($machine1->id == $video->classId)

                                {{$machine1->name}}
                                @break
                                @endif
                            @endforeach
                        </div>


                        <div class="panel-footer">
                            <button class="btn btn-danger">Delete</button>
                              <a href="{{route('machineVideo.index',['type'=>'machine'])}}" class="btn btn-primary">No</a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="col-lg-8">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Video
                    </div>
                    <div class="panel-body">
                      <iframe width="560" height="315" frameborder="0" allowfullscreen=""
                      src="{{$video->url}}">
                    </div>



                </div>
            </div>

        </div>
    </div>

@endsection
