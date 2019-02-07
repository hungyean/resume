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
<a class="" href="{{action('HomeController@viewBiodata',Auth::user()->id)}}">View Personal Information</a>
</li>
 <li>
<a class="" href="{{action('HomeController@updateBiodata',Auth::user()->id)}}">Update Personal Information</a>
</li>
</ul>
</li>
<li>
<a href="#">RESUME INFORMATION</a>
<ul>
<li>
<a class="" href="{{action('HomeController@addResumeInfo',Auth::user()->id)}}">Add Resume Information</a>
</li>
<li>
<a class="" href="{{action('HomeController@viewResumeInfo',Auth::user()->id)}}">View Resume Information</a>
</li>
<li>
<a class="" href="{{action('HomeController@updateResumeInfo',Auth::user()->id)}}">Update Resume Information</a>
</li>
</ul>
</li>
<li>
<a href="#">RESUME STYLE SWITCHER</a>
<ul>
<li>
<a class="" href="{{action('HomeController@styleS',Auth::user()->id)}}">Switch Resume Style</a>
</li>
</ul>
</li>
<li>
<a href="#">AVAILABLE RESUME BOOK</a>
<ul>
<li>
<a class="" href="{{url('userViewProduct')}}">View Available Book</a>
</li>
</ul>
</li>
<li>
<a href="#">SHOPPING CART</a>
<ul>
<li>
<a class="" href="{{action('HomeController@viewCart',Auth::user()->id)}}">View Shopping Cart</a>
</li>
</ul>
</li>
<li>
<a href="#">LIST OF PURCHASE ITEM</a>
<ul>
<li>
<a class="" href="{{action('HomeController@purchaseList',Auth::user()->id)}}">View Purchase List</a>
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
<h2>AVAILABLE RESUME BOOK!!!</h2>
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
