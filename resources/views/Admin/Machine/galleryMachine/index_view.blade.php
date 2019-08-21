@extends('layout.Admin_App')

@section('title')
      Machine Images

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
            <a href="{{route('galleryMachine.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Machine Images Display
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>Images</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($galleryMachine as $galleryMachine =>$album)
                        <tr class="odd gradeX">
                            <td>
                                @foreach($album as $albums)
                              <a href="{{route('imageM.delete',['id'=>$albums->id])}}">
                                <img  src="{{url('images/'.$albums->img)}}"  style="width:150px;">
                              </a>
                                @endforeach
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

