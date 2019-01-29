@extends('layouts.app')
{{--  action = "{{action('HomeController@function',$user->id)}}"  --}}
{{--  action = "{{action('HomeController@store',$user->id)}}"  --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

                <div class="card-body">
                    <form action = "action('HomeController@updateResume',$user->id)" method = "post">
                    @csrf
                    <table>
                        {{--  <input type='name' name='id' value='{{$resume->id}}'/>  --}}
                        <tr><td>Description</td><td><input type='text' name='description' value='{{$resume->description}}'/></td></tr>
                        <tr><td>Phone Number</td><td><input type='text' name='pnum' value='{{$resume->phone}}'/></td></tr>
                        <tr><td>Fax Number</td><td><input type='text' name='fnum' value='{{$resume->fax}}' /></td></tr>

                        <tr><td>Education Year</td><td><input type='text' name='eyear' value='{{$resume->education_year}}'/></td></tr>
                        <tr><td>Education Level</td><td><input type='text' name='elevel' value='{{$resume->education_level}}' /></td></tr>

                        <tr><td>Programming Skill</td><td><input type='text' name='pskill' value='{{$resume->programming_skill}}' /></td></tr>
                        <tr><td>Other Skill</td><td><input type='text' name='oskill' value='{{$resume->other_skill}}'/></td></tr>

                        <tr><td>Achievement Year</td><td><input type='text' name='ayear' value='{{$resume->achievement_year}}' /></td></tr>
                        <tr><td>Achievement</td><td><input type='text' name='aa' value='{{$resume->achievement}}'/></td></tr>

                        <tr><td>Reference Name</td><td><input type='text' name='rname' value='{{$resume->reference_name}}'/></td></tr>
                        <tr><td>Reference Email</td><td><input type='text' name='remail' value='{{$resume->reference_email}}'/></td></tr>
                        <tr><td>Reference Phone</td><td><input type='text' name='rphone' value='{{$resume->reference_phone}}'/></td></tr>
                    </table>
                    <div style = "position:absolute; left:630px; top:750px;"><input type='submit' value='Submit'></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
