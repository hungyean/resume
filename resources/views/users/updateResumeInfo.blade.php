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
                    <form action = "{{action('HomeController@updateResume',$resume->id)}}" method = "post" enctype="multipart/form-data">
                    @csrf
                    <table>
                        {{--  <input type='name' name='id' value='{{$resume->id}}'/>  --}}
                        <input type='hidden' name='id' value='{{$resume->id}}'/>
                        <input type='hidden' name='img' value='{{$resume->image}}'>
                        <tr><td>Description</td><td><input type='text' name='description' value='{{$resume->description}}' style='width:350px'/></td></tr>
                        <tr><td>Phone Number</td><td><input type='text' name='pnum' value='{{$resume->phone}}' style='width:350px'/></td></tr>
                        <tr><td>Fax Number</td><td><input type='text' name='fnum' value='{{$resume->fax}}' style='width:350px'/></td></tr>

                        <tr><td>Education Year</td><td><input type='text' name='eyear' value='{{$resume->education_year}}' style='width:350px'/></td></tr>
                        <tr><td>Education Level</td><td><input type='text' name='elevel' value='{{$resume->education_level}}' style='width:350px'/></td></tr>

                        <tr><td>Programming Skill</td><td><input type='text' name='pskill' value='{{$resume->programming_skill}}' style='width:350px'/></td></tr>
                        <tr><td>Other Skill</td><td><input type='text' name='oskill' value='{{$resume->other_skill}}'style='width:350px'/></td></tr>

                        <tr><td>Achievement Year</td><td><input type='text' name='ayear' value='{{$resume->achievement_year}}' style='width:350px' /></td></tr>
                        <tr><td>Achievement</td><td><input type='text' name='aa' value='{{$resume->achievement}}' style='width:350px'/></td></tr>

                        <tr><td>Reference Name</td><td><input type='text' name='rname' value='{{$resume->reference_name}}' style='width:350px'/></td></tr>
                        <tr><td>Reference Email</td><td><input type='text' name='remail' value='{{$resume->reference_email}}' style='width:350px'/></td></tr>
                        <tr><td>Reference Phone</td><td><input type='text' name='rphone' value='{{$resume->reference_phone}}' style='width:350px'/></td></tr>
                        <tr><td>Image</td>
                            <td><input type="file"  name="img"  class="hidden" value='{{$resume->image}}'/><label for="files" style="position:absolute; left:320px;">Select file</label></td>
                        </tr>


                    </table>
                    <div style = "position:absolute; left:630px; top:750px;"><input type='submit' value='Submit'></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
