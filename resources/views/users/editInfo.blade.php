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
                    <input type='text' value='{{$user->id}}' name='uid'>
                    <br/>
                    <input type='text' value='{{$user->name}}' name= 'uname'>
                    <br/>
                    <input type='text' value='{{$user->email}}' name = 'uemail'>
                    <br/>
                    <input type='submit' value='Update'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
