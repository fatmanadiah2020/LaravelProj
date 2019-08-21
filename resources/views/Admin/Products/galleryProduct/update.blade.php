@extends('layout.Admin_App')

@section('title')
    Update Data Product
@endsection



@section('content')
    <div class="row"><br>
        <div class="form-group">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Update Data Product
                        </div>
                        <div class="panel-body">
                            <label>Item No:</label>
                            <input type="text" name="itemNo" value="{{$data->itemNo}}" placeholder="Item No:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>
                        <div class="panel-body">
                            <label>Size:</label>
                            <input type="text" name="size" value="{{$data->size}}" placeholder="Size:" style="border-radius: 5px;width: 100%;height: 32px;">
                        </div>

                        <div class="panel-body">
                            <label>Product:</label>
                            <select class="js-example-basic-single" name="productId" style="width: 100%">


                                @foreach($product as $product)
                                    <option value="{{$product->id}}" @if($product->id ==$data->productId) selected @endif>{{$product->name}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="panel-body">
                            <label>Color:</label>


                            <select name="color" class="js-example-basic-single"  style="width: 100%">
                                <option  value="0" @if($data->color==0)selected @endif>Choose Color</option>
                                <option value="1" @if($data->color==1)selected @endif>Red</option>
                                <option value="2" @if($data->color==2)selected @endif>Black</option>
                                <option value="3" @if($data->color==3)selected @endif>Pink</option>
                                <option value="4" @if($data->color==4)selected @endif>Yellow</option>
                                <option value="5" @if($data->color==5)selected @endif>Blue</option>
                                <option value="6" @if($data->color==6)selected @endif>Dark Blue</option>
                                <option value="7" @if($data->color==7)selected @endif>Orange</option>
                                <option value="8" @if($data->color==8)selected @endif>Dark Red</option>
                                <option value="9" @if($data->color==9)selected @endif>Light Green</option>
                                <option value="10" @if($data->color==10)selected @endif>Brown</option>
                                <option value="11" @if($data->color==11)selected @endif>Silver</option>
                                <option value="12" @if($data->color==12)selected @endif>Golden</option>
                                <option value="13" @if($data->color==13)selected @endif>Pink Light</option>
                                <option value="14" @if($data->color==14)selected @endif>Neon Pink</option>
                                <option value="15" @if($data->color==15)selected @endif>Neon Yallow</option>
                                <option value="16" @if($data->color==16)selected @endif>Neon Orange</option>
                                <option value="17" @if($data->color==17)selected @endif>Neon Green</option>
                                <option value="18" @if($data->color==18)selected @endif>Luminous White</option>
                                <option value="19" @if($data->color==19)selected @endif>C</option>
                                <option value="20" @if($data->color==20)selected @endif>M</option>
                                <option value="21" @if($data->color==21)selected @endif>Y</option>
                                <option value="22" @if($data->color==22)selected @endif>K</option>
                                <option value="23" @if($data->color==23)selected @endif>LC</option>
                                <option value="24" @if($data->color==24)selected @endif>LM</option>
                                <option value="25" @if($data->color==25)selected @endif>sun</option>
                                <option value="26" @if($data->color==26)selected @endif>pink rose</option>
                                <option value="27" @if($data->color==27)selected @endif>green</option>
                                <option value="28" @if($data->color==28)selected @endif>lime</option>
                                <option value="29" @if($data->color==29)selected @endif>mint</option>
                                <option value="30" @if($data->color==30)selected @endif>chocolate</option>
                                <option value="31" @if($data->color==31)selected @endif>lilac</option>
                                <option value="32" @if($data->color==32)selected @endif>burgundy</option>
                                <option value="33" @if($data->color==33)selected @endif>bright red</option>
                                <option value="34" @if($data->color==34)selected @endif>coral</option>
                                <option value="35" @if($data->color==35)selected @endif>raspberry</option>
                                <option value="36" @if($data->color==36)selected @endif>old gold</option>
                                <option value="37" @if($data->color==37)selected @endif>silver black</option>
                                <option value="38" @if($data->color==38)selected @endif>blush</option>
                                <option value="39" @if($data->color==39)selected @endif>eggplant</option>
                                <option value="40" @if($data->color==40)selected @endif>lavender</option>
                                <option value="41" @if($data->color==41)selected @endif>hot pink</option>
                                <option value="42" @if($data->color==42)selected @endif>grass</option>
                                <option value="43" @if($data->color==43)selected @endif>emerald</option>
                                <option value="44" @if($data->color==44)selected @endif>neon blue</option>
                                <option value="45" @if($data->color==45)selected @endif>neon purple</option>
                                <option value="46" @if($data->color==46)selected @endif>lemon yellow</option>

                                <option value="47" @if($data->color==47)selected @endif>CREAM</option>
                                <option value="48" @if($data->color==48)selected @endif>Navy Blue</option>
                                <option value="49" @if($data->color==49)selected @endif>Brown</option>
                                <option value="50" @if($data->color==50)selected @endif>Grey</option>
                                <option value="51" @if($data->color==51)selected @endif>Pale Blue</option>
                                <option value="52" @if($data->color==52)selected @endif>Apple Green</option>
                                <option value="53" @if($data->color==53)selected @endif>Ocean Blue</option>
                                <option value="54" @if($data->color==54)selected @endif>TAN</option>
                                <option value="55" @if($data->color==55)selected @endif>Passion Pink</option>
                                <option value="56" @if($data->color==56)selected @endif>Silver</option>
                                <option value="57" @if($data->color==57)selected @endif>Peral</option>
                                <option value="58" @if($data->color==58)selected @endif>Light Purple</option>
                                <option value="59" @if($data->color==59)selected @endif>Fluorescent Coral</option>
                                <option value="60" @if($data->color==60)selected @endif>Fluorescent Purple</option>
                                <option value="61" @if($data->color==61)selected @endif>Fluorescent Yellow</option>
                                <option value="62" @if($data->color==62)selected @endif>Fluorescent Orange</option>
                                <option value="63" @if($data->color==63)selected @endif>Fluorescent Pink</option>
                                <option value="64" @if($data->color==64)selected @endif>Fluorescent Rasperry</option>
                                <option value="65" @if($data->color==65)selected @endif>Fluorescent Green</option>
                                <option value="66" @if($data->color==66)selected @endif>Fluorescent Blue</option>


                                <option value="67" @if($data->color==67)selected @endif>Purple</option>
                                <option value="68" @if($data->color==68)selected @endif>Aqua</option>
                                <option value="69" @if($data->color==69)selected @endif>Light Multi</option>
                                <option value="70" @if($data->color==70)selected @endif>Confentti</option>
                                <option value="71" @if($data->color==71)selected @endif>Royal Blue</option>

                            </select>

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-warning"> Save</button>
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