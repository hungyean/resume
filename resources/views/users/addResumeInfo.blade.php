@extends('layouts.app')
{{--  action = "{{action('HomeController@function',$user->id)}}"  --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

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
                    <div style = "position:absolute; left:630px; top:800px;"><input type='submit' value='Submit'></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
