@extends('layout.Admin_App')

@section('title')
     Machines

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
            <a href="{{route('machine.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                     Machines Display
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>Type</th>

                            <th>itemNo</th>
                            <th>Price</th>

                            <th>Photo</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($machine as $machine)

                        <tr class="odd gradeX">

                            <td>{{$machine->name}}</td>
                            <td>
                            @foreach($typeMachine as $typeMachine1)
                                @if($typeMachine1->id == $machine->classId)
                                    {{$typeMachine1->name}}
                                    @endif
                                @endforeach
                            </td>

                            <td>{{$machine->itemNo}}</td>
                            <td>{{$machine->price}}</td>

                            <td><img  src="{{url('images/'.$machine->img)}}"  style="width:40px;"></td>
                            <td>
                                <a href="{{route('machine.update',['id'=>$machine->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('machine.delete',['id'=>$machine->id])}}" class="btn btn-danger">Delete</a>
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

