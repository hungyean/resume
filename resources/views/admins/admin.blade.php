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
                            <td>View User Information</td>
                            <td><a href='viewUser'>View</a></td>
                        </tr>
                        <tr><td>Add Product</td>
                            <td><a href = "addProduct">Add</td>
                        </tr>
                        <tr><td>Update The Product</td>
                            <td><a href = "updateProduct">Update</a></td>
                        </tr>
                        <tr><td>Delete The Product</td>
                            <td><a href = "delete">Delete</td></tr>

                        <tr><td></td><td></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
