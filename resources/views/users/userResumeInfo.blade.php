@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{$user->name}}</div>

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
                    <br/><br/>
                    <div style = "position:absolute; left:660px; top:950px; background-color:yellow;"><a href= "{{url('home')}}">Return</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
