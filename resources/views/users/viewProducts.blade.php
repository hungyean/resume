@extends('layouts.app')
@section('content')
<div id="all">
<div id="content">
<div class="container" margin-top-10 no-padding>
<div class="col-md-3">

<div class="panel panel-default sidebar-menu">
<div class="panel-heading primary-bg" data-toggle="collapse" data-target="#sidebar">
<h3 class="panel-title color-white">Hi, {{Auth::user()->name}}<i class="visible-xs fa fa-caret-down" style="float: right"></i></h3>
<span class="visible-xs text-italic color-white">Search by status, brands, body types</span>
</div>
<div class="panel-body" no-padding>
<div class="navbar-collapse collapse padding-top-10" id="sidebar" style="max-height: none; width: 100%;">
<ul class="nav nav-pills nav-stacked category-menu">
<li>
<a href="#">PERSONAL INFORMATION</a>
<ul>
<li>
<a class="" href="viewInfo/{{Auth::user()->id}}">View Personal Information</a>
</li>
 <li>
<a class="" href="editInfo/{{Auth::user()->id}}">Update Personal Information</a>
</li>
</ul>
</li>
<li>
<a href="#">RESUME INFORMATION</a>
<ul>
<li>
<a class="" href="addResumeInfo/{{Auth::user()->id}}">Add Resume Information</a>
</li>
<li>
<a class="" href="viewResumeInfo/{{Auth::user()->id}}">View Resume Information</a>
</li>
<li>
<a class="" href="updateResumeInfo/{{Auth::user()->id}}">Update Resume Information</a>
</li>
</ul>
</li>
<li>
<a href="#">RESUME STYLE SWITCHER</a>
<ul>
<li>
<a class="" href="styleSwitcher/{{Auth::user()->id}}">Switch Resume Style</a>
</li>
</ul>
</li>
<li>
<a href="#">AVAILABLE RESUME BOOK</a>
<ul>
<li>
<a class="" href="userViewProduct">View Available Book</a>
</li>
</ul>
</li>
<li>
<a href="#">SHOPPING CART</a>
<ul>
<li>
<a class="" href="viewCart/{{Auth::user()->id}}">View Shopping Cart</a>
</li>
</ul>
</li>
<li>
<a href="#">LIST OF PURCHASE ITEM</a>
<ul>
<li>
<a class="" href="viewPurchaseList/{{Auth::user()->id}}">View Purchase List</a>
</li>
</ul>
</li>

</div>
</div>
</div>
</div>
<div class="col-md-9">
<div id="hot">
<div class="box">
<h2>READY STOCK !</h2>
</div>
<div>
<div class="row products">
@foreach($product as $p)
<div class="col-md-3 col-xs-6">
<div class="item">
<div class="product">
<div class="flip-container">
<div class="flipper">
<div class="front">
<a href="#">
<img src="{{url('products/'.$p->image)}}" alt="" style="height:240px; width:100%; ">
</a>
</div>
<div class="back">
<a href="#">
<img src="{{url('products/'.$p->image)}}" alt="" style="height:240px; width:100%;">
</a>
</div>
</div>
</div>
<a href="#">
<img src="{{url('products/'.$p->image)}}" alt="" style="height:240px; width:100%;">
</a>
<div class="text">
 <h3 class="line-1"><a href="#">{{$p->product_name}}</a>
 </h3>
 <center><h6 class="addCart"><a href="addCart/{{$p->id}}" class="btn btn-info space">Add To Cart</a></h6></center>

</div>
<div class="ribbons">
</div> </div>
</div>
</div>
@endforeach

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection




<!-- <div class="container">

  <div>
	<div class="row">
  <div class="col-xs-2" style="background-color: black; height:100%;" >Hai</div>
  <div class="col-xs-10" style="background-color: yellow;">
		@foreach($product as $p)
		<div class="col-md-3 col-xs-6">
		<div class="my-list">
			<img src="{{url('products/'.$p->image)}}" alt="dsadas"  class="size"/>
			<div class="offer">
			<h3>Name:{{$p->product_name}}</h3>
			<h3>Price: RM {{$p->product_price}}</h3>
			</div>
			<div class="detail">
			<p>{{$p->product_description}}</p>
			<img src="{{url('products/'.$p->image)}}" alt="dsadas" class="size" />
			<a href="addCart/{{$p->id}}" class="btn btn-info space">Add To Cart</a>
			</div>
		</div>
		</div>
		@endforeach
    </div>
		</div>
    </div>
    </div> -->






