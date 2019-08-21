@extends('layout.Admin_App')

@section('title')
    Type Product

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
            <a href="{{route('typeProduct.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Type Product
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Kind</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($typeProduct as $typeProduct)

                        <tr class="odd gradeX">
                            <td>{{++$index}}</td>
                            <td>{{$typeProduct->name}}</td>
                            <td>
                                @foreach($typeP as $typeP1)
                                            @if($typeP1->id == $typeProduct->classClassId)
                                                {{$typeP1->name}}
                                                @break

                                            @endif
                                    @endforeach

                            </td>
                            <td>
                                <a href="{{route('typeProduct.update',['id'=>$typeProduct->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('typeProduct.delete',['id'=>$typeProduct->id])}}" class="btn btn-danger">Delete</a>
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

