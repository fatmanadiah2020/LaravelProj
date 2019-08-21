@extends('layout.Admin_App')

@section('title')
    Add Special Offer Details
    @endsection


@section('content')
    <div class="row"><br>
        <div class="form-group">
                <form action="" method="post">
                    {{csrf_field()}}
                     <div class="col-lg-4">
                         @if(isset($msg))
                             <div class="alert alert-danger alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <i class="fa fa-times"></i> {{$msg}}
                             </div>
                         @endif


                         @if(isset($done))
                             <div class="alert alert-success alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <i class="fa fa-check"></i> {{$done}}
                             </div>
                         @endif
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Special Offer Details
                        </div>



                        <div class="panel-body">
                            <label>you want add machine or product?!</label>
                            <select class="js-example-basic-single" name="classId" name="type" onChange="MM_jumpMenu('parent',this,0)" style="width: 100%">


                                <option value="{{route('special.add')}}">{{"Select"}}</option>
                                <option value="{{route('special.add','type=P')}}"  @if(isset($_GET['type']) && ($_GET['type'] == 'P')) selected @endif>{{"Prodcut"}}</option>
                                <option value="{{route('special.add','type=M')}}"  @if(isset($_GET['type']) && ($_GET['type'] == 'M')) selected @endif>{{"Machine"}}</option>


                            </select>

                        </div>



                         @if(isset($_GET['type']) && $_GET['type'] =="M")
                            <div class="panel-body">


                                <label>Select Machine:</label>

                                <select class="js-example-basic-single" name="productId" style="width: 100%">

                                    @foreach($machine as $machine1)
                                        <option value="{{$machine1->id}}">{{$machine1->name}}</option>
                                    @endforeach

                                </select>

                            </div>

                            @elseif(isset($_GET['type']) && $_GET['type'] =="P")

                                <div class="panel-body">
                                    <label>Select Product:</label>

                                    <select class="js-example-basic-single" name="productId" style="width: 100%">

                                        @foreach($product as $product1)
                                            <option value="{{$product1->id}}">{{$product1->name}}</option>
                                        @endforeach

                                    </select>

                                </div>

                                    @endif


                        <div class="panel-body">
                            <label>Select Special Offer:</label>

                            <select class="js-example-basic-single" name="classId" style="width: 100%">

                                @foreach($monthySpecial as $monthySpecial1)
                                    <option value="{{$monthySpecial1->id}}">{{$monthySpecial1->name}}</option>
                                @endforeach

                            </select>

                        </div>



                        <div class="panel-body">
                                <label>QTY :</label>

                                <input type="text" name="qty" placeholder="qty:" style="border-radius: 5px;width: 100%;height: 32px;">
                            </div>

                        <div class="panel-body">
                            <label>Note :</label>

                            <input type="text" name="note" placeholder="note:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>








                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('special.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                </form>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>


    <script type="text/javascript">
        function MM_jumpMenu(targ,selObj,restore){ //v3.0
            eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
            if (restore) selObj.selectedIndex=0;
        }
    </script>

@endsection