@extends('layout.Admin_App')

@section('title')
    Product Video

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
            <a href="{{route('productVideo.add',['type'=>'product'])}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Product Video
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Video</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($video as $video1)

                        <tr class="odd gradeX">

                            <td>
                              @foreach($product as $product1)
                                    @if($product1->id == $video1->classId)
                                    {{$product1->name}}
                                    @break
                                    @endif
                              @endforeach
                            </td>

                            <td>{{$video1->url}}</td>
                            <td>
                            <a href="{{route('productVideo.delete',['id'=>$video1->id,'type'=>'product'])}}" class="btn btn-danger">Delete</a>
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
