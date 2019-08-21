@extends('layout.Admin_App')

@section('title')
    Update Contact Info
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
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Update Contact Info
                        </div>


                        <div class="panel-body">

                            <label>Name:</label>
                            <input type="text" name="name" value="{{$contactInfo->name}}" placeholder="Name:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>

                        <div class="panel-body">

                            <label>Email:</label>
                            <input type="text" name="email" value="{{$contactInfo->email}}" placeholder="Email:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>Company:</label>
                            <input type="text" name="company" value="{{$contactInfo->company}}" placeholder="Company:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>Address:</label>
                            <input type="text" name="address" value="{{$contactInfo->address}}" placeholder="Address:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>City:</label>
                            <input type="text" name="city" value="{{$contactInfo->city}}" placeholder="City:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>Country:</label>
                            <input type="text" name="country" value="{{$contactInfo->country}}" placeholder="Country:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <label>TEl:</label>
                            <input type="text" name="tel" value="{{$contactInfo->tel}}" placeholder="tel:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>


                        <div class="panel-body">

                            <label>Profile Photo(optional):</label>
                            <input type="file" class="custom-file-input" name="img1" placeholder="info" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>


                        <div class="panel-body">

                            <label>Commercial Photo(optional):</label>
                            <input type="file" class="custom-file-input" name="img2" placeholder="info" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>


                        <div class="panel-body">

                            <label>Certificate Photo(optional):</label>
                            <input type="file" class="custom-file-input" name="img3" placeholder="info" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>






                        <div class="panel-footer">
                            <button class="btn btn-warning"> update</button>
                            <a href="{{route('contactInfo.index',['type'=>'all'])}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </form>

            @if($contactInfo->img !="")
            <div class="col-lg-4">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        Profile Photo
                    </div>



                    <div class="panel-body">



                        <img  src="{{url('images/'.$contactInfo->img)}}"  style="width:200px;">

                    </div>

                </div>
            </div>
                @endif


            @if($contactInfo->img1 !="")
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Commercial Photo
                        </div>



                        <div class="panel-body">



                            <img  src="{{url('images/'.$contactInfo->img1)}}"  style="width:200px;">

                        </div>

                    </div>
                </div>
            @endif


            @if($contactInfo->img2 !="")
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Certificate Photo
                        </div>



                        <div class="panel-body">



                            <img  src="{{url('images/'.$contactInfo->img2)}}"  style="width:200px;">

                        </div>

                    </div>
                </div>
            @endif
        </div>


    </div>


    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

@endsection
