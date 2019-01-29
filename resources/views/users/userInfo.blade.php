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
                        <td>User Id</td>
                        <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>User Email</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </table>
                    <br/><br/>
                    <div style = "position:absolute; left:660px; top:250px; background-color:yellow;"><a href= "{{url('home')}}">Return</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
