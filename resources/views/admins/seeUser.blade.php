@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>
                <div class="card-body">
                    <a href='admin'>Return</a>
                    <table>
                    <tr>
                        <th>User id</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($user as $u)
                    @if ($u->type === 'default')
                    <tr>
                   <td>{{$u->id}}</td>
                   <td>{{$u->name}}</td>
                   <td>{{$u->email}}</td>
                   <td><a href='deleteUser/{{$u->id}}'>Delete</a></td>
                    </tr>
                    @endif
                   @endforeach
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
