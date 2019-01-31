@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi, {{Auth::user()->name}}</div>
                <div class="card-body">
                    <form action ='{{action('AdminController@addNewProduct')}}' method='post' enctype="multipart/form-data">
                        @csrf
                        <table>
                            <tr><td>Product Name</td><td> <input type='text' name='pname' style='width:350px'></td></tr>
                            <tr><td>Product Description</td><td> <input type='text' name='pdes' style='width:350px'></td></tr>
                            <tr><td>Product Price</td><td> <input type='text' name='pp' style='width:350px'></td></tr>
                            <tr><td>Product Image</td><td><input type="file"  name="image"/></td></tr>
                             <tr><td></td><td><input type='submit' value='Add Product'></td></tr>
                        </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
