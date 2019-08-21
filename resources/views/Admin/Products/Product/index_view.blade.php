@extends('layout.Admin_App')

@section('title')
     Products

    @endsection
@section('content')
    <br>
    <div class="row">

        <div class="col-lg-12">
            @if(isset($done))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-check"></i> {{$done}}
                </div>
            @endif
            <div class="form-group">
            <a href="{{route('product.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                     Products Display
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>type Product</th>


                            <th>Price</th>

                            <th>Photo</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($product as $product1)

                        <tr class="odd gradeX">

                            <td>{{$product1->name}}</td>
                            <td>
                            @foreach($typeProduct as $typeProduct1)

                                 @if($typeProduct1->id == $product1->classId)
                                 {{$typeProduct1->name}}
                                    @break
                                    @endif

                                @endforeach
                            </td>


                            <td>{{$product1->price}}</td>

                            <td><img  src="{{url('images/'.$product1->img)}}"  style="width:40px;"></td>
                            <td>
                                <a href="{{route('product.update',['id'=>$product1->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('product.delete',['id'=>$product1->id])}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>

                            @endforeach



                        </tbody>
                    </table>


                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <!-- /.col-lg-12 -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    </div>


    @endsection

