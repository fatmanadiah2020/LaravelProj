@extends('layout.Admin_App')

@section('title')
    Info Ghost

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
            <a href="{{route('infoghost.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Info Ghost
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>Type</th>
                            <th>Item No</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($infoGhost as $infoGhost)


                        <tr class="odd gradeX">
                            <td>{{$infoGhost->name}}</td>
                            @foreach($subGhost as $subGhost1)
                                @if($subGhost1->id == $infoGhost->classId )
                            <td>
                                {{$subGhost1->name}}
                            </td>


                                @endif
                            @endforeach
                            <td>
                                {{$infoGhost->itemNo}}
                            </td>
                            <td>
                                {{$infoGhost->price}}
                            </td>
                            <td>

                                <a class="trigger_popup_fricc">
                                <img  src="{{url('images/'.$infoGhost->img)}}"  style="width:40px;">
                                </a>



                            </td>

                            <td>
                                <a href="{{route('infoghost.update',['id'=>$infoGhost->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('infoghost.delete',['id'=>$infoGhost->id])}}" class="btn btn-danger">Delete</a>
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

