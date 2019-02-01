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
                        <th>Cart id</th>
                        <th>Product id</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Purchase</th>
                    </tr>
                    @foreach($carts as $c)
                    @if($c->user_id === Auth::user()->id)
                    <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->product_id}}</td>
                    @if ($c->product)
                    <td><img src="../products/{{$c->product->image}}" width='130' height='180'></td>
                    <td>RM {{$c->product->product_price}}</td>
                    @else
                    <td>
                        Oops, product deleted
                    </td>
                    @endif
                   <td><a href='{{url('purchase',$c->id)}}'>Purchase</a></td>
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
