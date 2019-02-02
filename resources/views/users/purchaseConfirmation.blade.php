@extends('layouts.app')

@section('content')

<script>
function calc()
{
var price = document.getElementById("price").innerHTML;
var qty = document.getElementById("qty").value;
var total = parseFloat(price) * qty
if (!isNaN(total))
document.getElementById("total").value = total
}
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>

                <div class="card-body">
                <form action="url('purchase',{{$cart->id}})" method='post'>
                    @csrf
                    <table>
                        <input type='hidden' name='userId' value="{{$cart->user_id}}">
                        <tr>
                        <td>Cart Id</td>
                        <td><input type='text' name='cartId' value="{{$cart->id}}"></td>
                        </tr>
                        <tr>
                            <td>Product Id</td>
                            <td><input type='text' name='productId' value="{{$cart->product_id}}"></td>
                        </tr>
                         <tr>
                            <td>Product Price</td>
                         <td>$<span id='price'>{{$cart->product->product_price}}</span></td>
                        </tr>
                        <tr>
                            <td>Enter Quantity</td>
                            <td><input type='text' name='qty' id='qty' oninput="calc()"></td>
                        </tr>
                        <tr>
                            <td>Total price</td>
                            <td><input type='text' name='price' id='total'></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type='submit' value='Purchase'></td>
                        </tr>
                    </table>
                </form>
                    <br/><br/>
                    {{-- <div style = "position:absolute; left:660px; top:250px; background-color:yellow;"><a href= "{{url('home')}}">Return</a></div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
