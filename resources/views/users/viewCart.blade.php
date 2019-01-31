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
                        <th>Purchase</th>
                    </tr>
                    @foreach($carts as $c)
                    @if($c->user_id === Auth::user()->id)
                    <tr>
                   <td>{{$c->id}}</td>
                   <td>{{$c->product_id}}</td>
                   {{--  <td>${{$c->product->image}}</td>  --}}
                   <td><img src="../products/{{$c->product->image}}" width='130' height='180'></td>
                   {{--  <td><img src="{{url('products/'.)}}" alt="{{$p->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><img src="{{url('products/'.)}}" alt="{{$c->product->image}}" width='130' height='180'></td>  --}}
                   <td><a href='#'>Add</a></td>
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
