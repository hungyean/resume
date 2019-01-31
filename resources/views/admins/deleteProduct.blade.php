@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

                <div class="card-body">
                    <table>
                    <tr>
                        <th>Product id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($product as $p)
                    <tr>
                   <td>{{$p->id}}</td>
                   <td>{{$p->product_name}}</td>
                   <td><img src="{{url('products/'.$p->image)}}" alt="{{$p->image}}" width='130' height='180'></td>
                   <td><a href='delete/{{$p->id}}'>Delete</a></td>
                    </tr>
                   @endforeach
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
