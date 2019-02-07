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
<h2>ADD RESUME INFORMATION</h2>
</div>
<div class="card-body">
                    <form action = "{{action('HomeController@store',$user->id)}}" method = "post" enctype="multipart/form-data">
                    @csrf
                    <table>
                        <tr><td>Description</td><td><input type='text' name='description' style='width:350px'/></td></tr>
                        <tr><td>Phone Number</td><td><input type='text' name='pnum' style='width:350px'/></td></tr>
                        <tr><td>Fax Number</td><td><input type='text' name='fnum' style='width:350px'/></td></tr>

                        <tr><td>Education Year</td><td><input type='text' name='eyear' style='width:350px'/></td></tr>
                        <tr><td>Education Level</td><td><input type='text' name='elevel' style='width:350px'/></td></tr>

                        <tr><td>Programming Skill</td><td><input type='text' name='pskill' style='width:350px'/></td></tr>
                        <tr><td>Other Skill</td><td><input type='text' name='oskill'style='width:350px' /></td></tr>

                        <tr><td>Achievement Year</td><td><input type='text' name='ayear'style='width:350px' /></td></tr>
                        <tr><td>Achievement</td><td><input type='text' name='aa' style='width:350px'/></td></tr>

                        <tr><td>Reference Name</td><td><input type='text' name='rname' style='width:350px'/></td></tr>
                        <tr><td>Reference Email</td><td><input type='text' name='remail' style='width:350px'/></td></tr>
                        <tr><td>Reference Phone</td><td><input type='text' name='rphone' style='width:350px'/></td></tr>
                        <tr><td>Your Image</td><td><input type="file"  name="img"/></td></tr>
                    </table>
                    <div><input type='submit' value='Submit'></div>
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

