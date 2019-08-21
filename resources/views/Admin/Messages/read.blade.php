@extends('layout.Admin_App')

@section('title')
@if(!is_null($message->send))
Read Message
 to
@else
From
@endif

 {{$user->userName}}
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Read Message
                          @if(!is_null($message->send))
                           to
                          @else
                          From
                          @endif



                           {{$user->userName}}
                        </div>


                        <div class="panel-body">

                            <label>Message: </label>
                            @if(!is_null($message->send))
                            {!! strip_tags($message->send) !!}
                            @else
                            {!! strip_tags($message->rePlay) !!}
                            @endif

                        </div>




                        <div class="panel-footer">

                            <a href="{{route('messages.index',['type'=>'all'])}}" class="btn btn-primary">Ok</a>
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
