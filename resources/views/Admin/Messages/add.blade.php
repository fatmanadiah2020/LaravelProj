@extends('layout.Admin_App')

@section('title')
    Create Message
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
                            Create Message
                        </div>
                        <div class="panel-body">


                            <label>To:</label>

                            <select class="js-example-basic-single" name="userId" style="width: 100%">

                            @foreach($users as $users1)
                            <option value="{{$users1->id}}">{{$users1->userName}}</option>
                            @endforeach

                            </select>

                        </div>



                        <div class="panel-body">

                            <label>Message:</label>
                            <textarea name="message" class="ckeditor"></textarea>
                        </div>


                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('messages.index',['type'=>'all'])}}" class="btn btn-primary">Back</a>
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
