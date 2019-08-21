@extends('layout.Admin_App')

@section('title')
     Gallery Type

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
            <a href="{{route('galleryClass.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Gallery Type Display
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($galleryClass as $galleryClass1)

                        <tr class="odd gradeX">

                            <td>{{$galleryClass1->id}}</td>
                            <td>{{$galleryClass1->arName}}</td>
                            <td><img  src="{{url('images/'.$galleryClass1->imgClass)}}"  style="width:40px;"></td>
                            <td>
                                <a href="{{route('galleryClass.update',['id'=>$galleryClass1->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('galleryClass.delete',['id'=>$galleryClass1->id])}}" class="btn btn-danger">Delete</a>
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

