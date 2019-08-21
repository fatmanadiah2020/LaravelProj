@extends('layout.Admin_App')

@section('title')
    Add User
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
                            Add User
                        </div>

                        <div class="panel-body">


                            <label>Product Name :</label>

                            <select class="js-example-basic-single" name="classId" style="width: 100%">

                            @foreach($contactInfo as $contactInfo1)
                            <option value="{{$contactInfo1->id}}">{{$contactInfo1->name}}</option>
                            @endforeach

                            </select>

                        </div>

                        <div class="panel-body">
                          <label>Name:</label>
                            <input type="text" name="name" placeholder="Name:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                          <label>Password:</label>
                            <input type="password" name="password" placeholder="*********" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                          <label>Confirm Password:</label>
                            <input type="password" name="rePassword" placeholder="*********" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                          <label>E-mail:</label>
                            <input type="text" name="email" placeholder="E-mail:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>


                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
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
