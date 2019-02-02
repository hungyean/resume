@extends('layouts.app')
@section('content')
<div id="content">
<div class="container" style="height:1000px;" >
<div class="col-md-9 " style="height:1000px; position:relative; left:130px;">

<div style=" background-color:white; border: 1px solid #e6e6e6; box-sizing: border-box; margin: 0 0 30px; padding: 20px;     box-shadow: 0 1px 5px rgba(0,0,0,.1);">
<h2 style="text-align: center;">Available Product</h2>
</div>
<div class="row" style="position:relative; top:20px;">
 @foreach($product as $p)
<div class="col-md-3" style="margin-top:30px;">
<div class="item"  style="background-color:white; height:100%; width:100%;">
<div class="product">
<img src="{{url('products/'.$p->image)}}" alt="" style="width:100%; height:150px;">
<div class="text" style="margin-top:5px;" >
<h3 class="line-2" style="text-align:center">{{$p->product_name}}</h3>
<h5 style="text-align:center">RM {{$p->product_price}}</h5>
<h6 style="text-align:center"><a href='addCart/{{$p->id}}'>Add</a></h6>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
@endsection










