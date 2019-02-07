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
<h2>UPDATE RESUME INFORMATION</h2>
</div>
<div class="login-form">
    <form action="{{action('HomeController@updateResume',$resume->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type='hidden' name='id' value='{{$resume->id}}'/>
    <input type='hidden' name='img' value='{{$resume->image}}'>
        <h2 class="text-center">Update FORM</h2>       
        <div class="form-group">
        <input type='text' name='description' value='{{$resume->description}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='pnum' value='{{$resume->phone}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='fnum' value='{{$resume->fax}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='eyear' value='{{$resume->education_year}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='elevel' value='{{$resume->education_level}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='pskill' value='{{$resume->programming_skill}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='oskill' value='{{$resume->other_skill}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='ayear' value='{{$resume->achievement_year}}' class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='aa' value='{{$resume->achievement}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='rname' value='{{$resume->reference_name}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='remail' value='{{$resume->reference_email}}'class="form-control">
        </div>
        <div class="form-group">
        <input type='text' name='rphone' value='{{$resume->reference_phone}}'class="form-control">
        </div>
        <div class="form-group">
        <input type="file"  name="img"  class="btn btn-primary btn-block" value='{{$resume->image}}'/>
        </div>
        <div class="form-group">
        <input type='submit' value='Update' class="btn btn-primary btn-block">
        </div>       
    </form>
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection

