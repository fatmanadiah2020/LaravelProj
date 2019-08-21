@extends('layout.Admin_App')

@section('title')
    Add Data Product
    @endsection

@section('head')
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
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
                            Add Data Product
                        </div>
                        <div class="panel-body">
                          <label>Item No:</label>
                            <input type="text" name="itemNo" placeholder="Item No:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                            <label>Size:</label>
                            <input type="text" name="size" placeholder="Size:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>

                        <div class="panel-body">
                            <label>Product:</label>
                            <select class="js-example-basic-single" name="productId" style="width: 100%">


                                @foreach($product as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="panel-body">
                            <label>Color:</label>


                                <select name="color" class="js-example-basic-single"  style="width: 100%">
                                    <option  value="0">Choose Color</option>
                                    <option value="1">Red</option>
                                    <option value="2">Black</option>
                                    <option value="3">Pink</option>
                                    <option value="4">Yellow</option>
                                    <option value="5">Blue</option>
                                    <option value="6">Dark Blue</option>
                                    <option value="7">Orange</option>
                                    <option value="8">Dark Red</option>
                                    <option value="9">Light Green</option>
                                    <option value="10">Brown</option>
                                    <option value="11">Silver</option>
                                    <option value="12">Golden</option>
                                    <option value="13">Pink Light</option>
                                    <option value="14">Neon Pink</option>
                                    <option value="15">Neon Yallow</option>
                                    <option value="16">Neon Orange</option>
                                    <option value="17">Neon Green</option>
                                    <option value="18">Luminous White</option>
                                    <option value="19">C</option>
                                    <option value="20">M</option>
                                    <option value="21">Y</option>
                                    <option value="22">K</option>
                                    <option value="23">LC</option>
                                    <option value="24">LM</option>
                                    <option value="25">sun</option>
                                    <option value="26">pink rose</option>
                                    <option value="27">green</option>
                                    <option value="28">lime</option>
                                    <option value="29">mint</option>
                                    <option value="30">chocolate</option>
                                    <option value="31">lilac</option>
                                    <option value="32">burgundy</option>
                                    <option value="33">bright red</option>
                                    <option value="34">coral</option>
                                    <option value="35">raspberry</option>
                                    <option value="36">old gold</option>
                                    <option value="37">silver black</option>
                                    <option value="38">blush</option>
                                    <option value="39">eggplant</option>
                                    <option value="40">lavender</option>
                                    <option value="41">hot pink</option>
                                    <option value="42">grass</option>
                                    <option value="43">emerald</option>
                                    <option value="44">neon blue</option>
                                    <option value="45">neon purple</option>
                                    <option value="46">lemon yellow</option>

                                    <option value="47">CREAM</option>
                                    <option value="48">Navy Blue</option>
                                    <option value="49">Brown</option>
                                    <option value="50">Grey</option>
                                    <option value="51">Pale Blue</option>
                                    <option value="52">Apple Green</option>
                                    <option value="53">Ocean Blue</option>
                                    <option value="54">TAN</option>
                                    <option value="55">Passion Pink</option>
                                    <option value="56">Silver</option>
                                    <option value="57">Peral</option>
                                    <option value="58">Light Purple</option>
                                    <option value="59">Fluorescent Coral</option>
                                    <option value="60">Fluorescent Purple</option>
                                    <option value="61">Fluorescent Yellow</option>
                                    <option value="62">Fluorescent Orange</option>
                                    <option value="63">Fluorescent Pink</option>
                                    <option value="64">Fluorescent Rasperry</option>
                                    <option value="65">Fluorescent Green</option>
                                    <option value="66">Fluorescent Blue</option>


                                    <option value="67">Purple</option>
                                    <option value="68">Aqua</option>
                                    <option value="69">Light Multi</option>
                                    <option value="70">Confentti</option>
                                    <option value="71">Royal Blue</option>

                                </select>

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary"> Add</button>
                            <a href="{{route('data.index')}}" class="btn btn-primary">Back</a>
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

@endsection