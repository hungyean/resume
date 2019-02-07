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
<h2>RESUME INFORMATION</h2>
</div>
<div class="card-body">
                    <table>
                        <tr>
                        <td>Description</td>
                        <td>{{$resume->description}}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{$resume->phone}}</td>
                        </tr>
                        <tr>
                            <td>Fax Number</td>
                            <td>{{$resume->fax}}</td>
                        </tr>
                        <tr>
                            <td>Education Year</td>
                            <td>{{$resume->education_year}}</td>
                        </tr>
                        <tr>
                            <td>Education Level</td>
                            <td>{{$resume->education_level}}</td></tr>
                        <tr>
                            <td>Programming Skill</td>
                            <td>{{$resume->programming_skill}}</td>
                        </tr>
                        <tr><td>Other Skill</td>
                            <td>{{$resume->other_skill}}</td></tr>
                        <tr><td>Achievement Year</td>
                            <td>{{$resume->achievement_year}}</td></tr>
                        <tr><td>Achievement</td>
                            <td>{{$resume->achievement}}</td></tr>
                        <tr><td>Reference Name</td>
                            <td>{{$resume->reference_name}}</td></tr>
                        <tr><td>Reference Email</td>
                            <td>{{$resume->reference_email}}</td></tr>
                        <tr><td>Reference Phone Number</td>
                            <td>{{$resume->reference_phone}}</td></tr>
                        <tr>
                            <td>Image</td>
                            <td><img src="{{url('uploads/'.$resume->image)}}" alt="{{$resume->image}}" width='180' height='180'></td>
                        </tr>
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

