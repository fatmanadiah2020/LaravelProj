@extends('layout.Admin_App')

@section('title')
     Contact Info Display

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
            <a href="{{route('contactInfo.add')}}" class="btn btn-primary">Add</a>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Contact Info Display
                     <b>Filter:</b>
                     <a href="{{route('contactInfo.index',['type'=>'all'])}}" style="color: inherit;text-decoration:none">
                    <i class="fa fa-envelope-o"></i>
                    </a>
                    <a href="{{route('contactInfo.index',['type'=>'unread'])}}" style="color: inherit;text-decoration:none;">
                   <i class="fa fa-envelope"></i>
                   </a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th> </th>
                            <th>Name</th>
                            <th>E-Mail</th>


                            <th>Tel</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($contactInfo as $contactInfo1)

                        <tr class="odd gradeX">
                            <td>
                              @if($contactInfo1->isRead ==1)
                              <i class="fa fa-envelope-o"></i>
                              @else
                              <i class="fa fa-envelope"></i>
                              @endif
                             </td>
                            <td>{{$contactInfo1->name}}</td>


                            <td>{{$contactInfo1->email}}</td>



                            <td>{{$contactInfo1->tel}}</td>


                            <td>
                                <a href="{{route('contactInfo.update',['id'=>$contactInfo1->id])}}" class="btn btn-warning">Update</a>
                                <a href="{{route('contactInfo.delete',['id'=>$contactInfo1->id])}}" class="btn btn-danger">Delete</a>
                                  <a href="{{route('contactInfo.read',['id'=>$contactInfo1->id])}}" class="btn btn-info">Read</a>
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
