@extends('layouts.app')
{{--  action = "{{action('HomeController@function',$user->id)}}"  --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

                <div class="card-body">
                    <form action = "{{action('HomeController@store',$user->id)}}"method = "post">
                    @csrf
                    <table>
                        <tr><td>Description</td><td><input type='text' name='description'/></td></tr>
                        <tr><td>Phone Number</td><td><input type='text' name='pnum'/></td></tr>
                        <tr><td>Fax Number</td><td><input type='text' name='fnum'/></td></tr>

                        <tr><td>Education Year</td><td><input type='text' name='eyear'/></td></tr>
                        <tr><td>Education Level</td><td><input type='text' name='elevel'/></td></tr>

                        <tr><td>Programming Skill</td><td><input type='text' name='pskill'/></td></tr>
                        <tr><td>Other Skill</td><td><input type='text' name='oskill'/></td></tr>

                        <tr><td>Achievement Year</td><td><input type='text' name='ayear'/></td></tr>
                        <tr><td>Achievement</td><td><input type='text' name='aa'/></td></tr>

                        <tr><td>Reference Name</td><td><input type='text' name='rname'/></td></tr>
                        <tr><td>Reference Email</td><td><input type='text' name='remail'/></td></tr>
                        <tr><td>Reference Phone</td><td><input type='text' name='rphone'/></td></tr>
                    </table>
                    <div style = "position:absolute; left:630px; top:750px;"><input type='submit' value='Submit'></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
