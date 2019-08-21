@extends('layout.Admin_App')

@section('title')
    Update Type Product
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
                            Update Type Product
                        </div>
                        <div class="panel-body">
                            <label>Name:</label>
                            <input type="text" name="name" placeholder="Name:" value="{{$typeProduct->name}}">
                        </div>
                        <div class="panel-body">
                            <label>Kind:</label>
                            <select class="js-example-basic-single" name="classId" style="width: 100%">

                                <option value="0">{{"No Kind"}}</option>
                                @foreach($typeP as $typeP1)
                                    <option value="{{$typeP1->id}}" @if($typeP1->id == $typeProduct->classClassId) selected @endif>{{$typeP1->name}}</option>
                                @endforeach

                            </select>

                        </div>


                        <div class="panel-footer">
                            <button class="btn btn-warning"> update</button>
                            <a href="{{route('typeProduct.index')}}" class="btn btn-primary">Back</a>
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