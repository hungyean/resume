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
<h2>YOUR PERSONAL INFORMATION</h2>
</div>
<div class="card-body">
                    <table class="table">
                        <tr class="danger">
                        <th>User Id</th>
                        <td>{{$user->id}}</td>
                        </tr>
                        <tr class="danger">
                            <th>User Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr class="danger">
                            <th>User Email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                    </table>
                    
            </div>
</div>
</div>



@endsection
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{$user->name}}</div>

                <div class="card-body">
                    <table>
                        <tr>
                        <td>User Id</td>
                        <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>User Email</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </table>
                    <br/><br/>
                    <div style = "position:absolute; left:660px; top:250px; background-color:yellow;"><a href= "{{url('home')}}">Return</a></div>
            </div>
        </div>
    </div>
</div> -->