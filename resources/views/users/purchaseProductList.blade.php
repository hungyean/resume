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
                        <th>Payment id</th>
                        <th>Cart id</th>
                        <th>Product id</th>
                        <td>Image</th>
                    </tr>
                    @foreach($payment as $p)
                    @if($p->u_id === Auth::user()->id)
                    <tr>
                   <td>{{$p->id}}</td>
                   <td>{{$p->cart_id}}</td>
                   <td>{{$p->p_id}}</td>
                   <td><img src="../products/{{$p->cart->product->image}}" width='130' height='180'></td>
                   {{--  <td>${{$c->product->image}}</td>  --}}
                   {{--  <td><img src="../products/{{$c->product->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><img src="{{url('products/'.)}}" alt="{{$p->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><img src="{{url('products/'.)}}" alt="{{$c->product->image}}" width='130' height='180'></td>  --}}
                   {{--  <td><a href='{{url('purchase',$c->id)}}'>Purchase</a></td>  --}}
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
