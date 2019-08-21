@extends('layout.Admin_App')

@section('title')
   Messages

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
            <a href="{{route('messages.add')}}" class="btn btn-primary">Replay</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Messages Display
                   <b>Filter:</b>
                   <a href="{{route('messages.index',['type'=>'all'])}}" style="color: inherit;text-decoration:none">
                  <i class="fa fa-envelope-o"></i>
                  </a>
                  <a href="{{route('messages.index',['type'=>'unread'])}}" style="color: inherit;text-decoration:none;">
                 <i class="fa fa-envelope"></i>
                 </a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                          <th></th>
                            <th>Name</th>
                            <th>To</th>
                            <th>From</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($messages as $messages1)

                        <tr class="odd gradeX">
                          <td>
                            @if($messages1->isSendRead ==1)
                            <i class="fa fa-envelope-o"></i>
                            @else
                            <i class="fa fa-envelope"></i>
                            @endif
                           </td>



                            <td>
                              @foreach($users as $users1)
                                @if($users1->id == $messages1->userId)
                                    {{$users1->userName}}
                                    @break
                                    @endif
                              @endforeach

                            </td>
                            <td>

                              @if(!is_null($messages1->send) || $messages1->send !="" )
                               <i class="fa fa-check "></i>
                               @endif
                               </td>
                               <td>
                              @if(!is_null($messages1->replay) || $messages1->replay !="")
                               <i class="fa fa-check "></i>
                              @endif
                            </td>
                            <td>
                                <a href="{{route('messages.delete',['id'=>$messages1->id])}}" class="btn btn-danger">Delete</a>
                                  <a href="{{route('messages.read',['id'=>$messages1->id])}}" class="btn btn-info">Read</a>
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
