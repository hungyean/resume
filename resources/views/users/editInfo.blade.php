@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

                <div class="card-body">
                    <form action = "{{action('HomeController@updateUser',$user->id)}}" method = "post">
                    @csrf

                    <table>
                        <tr><td>Name</td><td> <input type='text' value='{{$user->name}}' name= 'uname' style='width:350px'></td></tr>
                        <tr><td>Email</td><td><input type='text' value='{{$user->email}}' name = 'uemail'  style='width:350px'></td></tr>
                    </table>
                    <input type='submit' value='Update' style='position:absolute; left:630px; top:150px;'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
