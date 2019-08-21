@extends('layout.Admin_App')

@section('title')
    Add Product Ghost
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Product Ghost
                        </div>


                            <div class="panel-body">
                                <label>Name :</label>

                                <input type="text" name="name" placeholder="Name:" style="border-radius: 5px;width: 100%;height: 32px;">
                            </div>



                            <div class="panel-body">
                                <label>Ghost Type :</label>
                                <select class="js-example-basic-single" name="classId" style="width: 100%">

                                    @foreach($ghost as $ghost)
                                    <option value="{{$ghost->id}}">{{$ghost->name}}</option>
                                        @endforeach

                                </select>

                            </div>



                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('subghost.index')}}" class="btn btn-primary">Back</a>
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