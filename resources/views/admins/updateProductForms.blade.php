@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>
                <div class="card-body">
                    <form action ='{{action('AdminController@updateProduct',$product->id)}}' method='post' enctype="multipart/form-data">
                        @csrf
                        <a href='{{url('admin')}}'>return</a>
                        <table>
                            <input type='hidden' value='{{$product->image }}' name='image'>
                            <tr><td>Product Name</td><td> <input type='text' name='pname' value='{{$product->product_name}}' style='width:350px'></td></tr>
                            <tr><td>Product Description</td><td> <input type='text' name='pdes' value='{{$product->product_description}}'style='width:350px'></td></tr>
                            <tr><td>Product Price</td><td> <input type='text' name='pp' value='{{$product->product_price}}' style='width:350px'></td></tr>
                            <tr><td>Product Image</td><td><input type="file"  name="image"/></td></tr>
                            <tr><td></td><td><input type='submit' value='Update Product'></td></tr>
                        </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
