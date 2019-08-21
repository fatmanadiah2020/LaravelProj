@extends('layout.Admin_App')

@section('title')
    Special Offer Details

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
            <a href="{{route('special.add')}}" class="btn btn-primary">Add</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Special Offer Details
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                        <thead>
                        <tr>
                            <th>Offer Name</th>
                            <th>Product</th>
                            <th>Photo</th>
                            <th>Qty</th>
                            <th>Note</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($specialDetails as $specialDetails1)

                        <tr class="odd gradeX">


                            @foreach($monthySpecial as $monthySpecial1)

                                @if($monthySpecial1->id == $specialDetails1->classId)
                            <td>{{$monthySpecial1->name}}</td>
                                    @break
                                @endif

                            @endforeach


                              @if($specialDetails1->type =='P')

                                @foreach($product as $product1)

                                    @if($product1->id == $specialDetails1->productId)
                                        <td>{{$product1->name}}</td>
                                        <td><img  src="{{url('images/'.$product1->img)}}"  style="width:40px;"></td>
                                        @break
                                    @endif

                                @endforeach

                                @elseif($specialDetails1->type =='M')


                                    @foreach($machine as $machine1)

                                        @if($machine1->id == $specialDetails1->productId)
                                            <td>{{$machine1->name}}</td>
                                            <td><img  src="{{url('images/'.$machine1->img)}}"  style="width:40px;"></td>
                                            @break
                                        @endif

                                    @endforeach


                                  @endif

                                <td>{{$specialDetails1->qty}}</td>
                                <td>{{$specialDetails1->note}}</td>






                            <td>
                                <a href="{{route('special.delete',['id'=>$specialDetails1->id])}}" class="btn btn-danger">Delete</a>
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

