@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{$user->name}}</div>

                <div class="card-body">

<h1 style='text-align:center'>Resume Style Switcher</h1>
<ul class="inline">
  <li><a href="#" onClick="changeColor('hghltLightYellow');return false;"
    class="hghltLightYellow">light yellow</a></li>
  <li><a href="#" onClick="changeColor('hghltBrightYellow');return false;"
    class="hghltBrightYellow">bright yellow</a></li>
  <li><a href="#" onClick="changeColor('hghltLightBlue');return false;"
    class="hghltLightBlue">light blue</a></li>
  <li><a href="#" onClick="changeColor('hghltBrightBlue');return false;"
    class="hghltBrightBlue">bright blue</a></li>
  <li><a href="#" onClick="changeColor('hghltLightRed');return false;"
    class="hghltLightRed">light red</a></li>
  <li><a href="#" onClick="changeColor('hghltDrkRed');return false;"
    class="hghltDrkRed">dark red</a></li>
  <li><a href= "{{url('home')}}">Return</a></li>
</ul>
<table class="hghltLightYellow" align='center'>
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
@endsection

