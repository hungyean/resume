@extends('layouts.styling')

<div id="content">
<div class="container">
<div class="col-md-9 ">

<div class='box'>
<h2 style="text-align: center;">Available Product</h2>
</div>
<div class="row" style="position:relative; top:20px;">
 @foreach($product as $p)
<div class="col-md-3" style="margin-top:30px;">
<div class="item">
<div class="product">
<img src="{{url('products/'.$p->image)}}" alt="" style="height: 20%; width: 100%;">
<div class="text" style="margin-top:5px;" >
<h3 class="line-2">{{$p->product_name}}</h3>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>











