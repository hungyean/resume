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
<h2>PURCHASE LIST</h2>
</div>
<div class="card-body">
                    <table>
                    <tr>
                        <th>Payment id</th>
                        <th>Cart id</th>
                        <th>Product id</th>
                        <td>Image</th>
                    </tr>
                    @foreach($payment as $p)
                    @if($p->u_id === Auth::user()->id)
                    <tr>
                   <td>{{$p->id}}</td>
                   <td>{{$p->cart_id}}</td>
                   <td>{{$p->p_id}}</td>
                   <td><img src="../products/{{$p->cart->product->image}}" width='130' height='180'></td>
                   {{--  <td>${{$c->product->image}}</td>  --}}
                   {{--  <td><img src="../products/{{$c->product->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><img src="{{url('products/'.)}}" alt="{{$p->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><img src="{{url('products/'.)}}" alt="{{$c->product->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><a href='{{url('purchase',$c->id)}}'>Purchase</a></td>  --}}
                    </tr>
                    @endif
                   @endforeach
                </table>

                </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection



@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

               
            </div>
        </div>
    </div>
</div>
@endsection
