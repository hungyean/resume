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
                            <td>View Your Personal Information</td>
                            <td><a href='viewInfo/{{Auth::user()->id}}'>View</a></td>
                        </tr>
                        <tr><td>Edit Your Personal Information</td>
                            <td><a href = "editInfo/{{Auth::user()->id}}">Edit</td>
                        </tr>
                        <tr><td>Add the resume information</td>
                            <td><a href = "addResumeInfo/{{Auth::user()->id}}">Add</a></td>
                        </tr>
                        <tr><td>Update the resume information</td>
                            <td><a href = "updateResumeInfo/{{Auth::user()->id}}">Update</td></tr>
                        <tr><td></td><td></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
