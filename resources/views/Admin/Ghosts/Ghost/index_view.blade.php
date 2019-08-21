@extends('layout.Admin_App')

@section('title')
    Ghost White Toner

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
            <a href="{{route('ghost.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Ghost
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($ghost as $ghost)

                        <tr class="odd gradeX">
                            <td>{{$ghost->id}}</td>
                            <td>{{$ghost->name}}</td>
                            <td>
                                <a href="{{route('ghost.update',['id'=>$ghost->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('ghost.delete',['id'=>$ghost->id])}}" class="btn btn-danger">Delete</a>
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

