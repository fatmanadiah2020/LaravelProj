@extends('layout.Admin_App')

@section('title')
    Add Info Ghost
    @endsection

@section('head')
    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Add Image';
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
                            Add Info Ghost
                        </div>


                            <div class="panel-body">


                                <input type="text" name="name" placeholder="Name:" style="border-radius: 5px;width: 100%;height: 32px;">
                            </div>
                        <div class="panel-body">


                            <input type="text" name="price" placeholder="Price:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <input type="text" name="itemNo" placeholder="itemNo:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">

                            <input type="text" name="type" placeholder="Type (toner A4,,paper 25....)" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">


                            <textarea name="info" class="ckeditor"></textarea>
                        </div>



                            <div class="panel-body">


                                <label>sub Ghost:</label>

                                <select class="js-example-basic-single" name="classId" style="width: 100%">

                                @foreach($subGhost as $subGhost)
                                <option value="{{$subGhost->id}}">{{$subGhost->name}}</option>
                                @endforeach

                                </select>

                            </div>



                        <div class="panel-body">

                            <input type="file" class="custom-file-input" name="photo" placeholder="info" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>





                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('infoghost.index')}}" class="btn btn-primary">Back</a>
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