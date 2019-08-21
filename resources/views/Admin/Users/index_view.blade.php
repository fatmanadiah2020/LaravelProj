@extends('layout.Admin_App')

@section('title')
    Users Display

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
            <a href="{{route('users.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                  Users Display
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Create</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $users1)

                        <tr class="odd gradeX">
                            <td>{{$users1->userName}}</td>
                            <td>{{$users1->email}}</td>
                            <td>{{$users1->created_at}}</td>
                            <td>
                                <a href="{{route('users.update',['id'=>$users1->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('users.delete',['id'=>$users1->id])}}" class="btn btn-danger">Delete</a>
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
