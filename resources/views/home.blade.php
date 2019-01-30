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
                        <tr><td>Add The Resume Information</td>
                            <td><a href = "addResumeInfo/{{Auth::user()->id}}">Add</a></td>
                        </tr>
                        <tr><td>Update The Resume Information</td>
                            <td><a href = "updateResumeInfo/{{Auth::user()->id}}">Update</td></tr>
                        <tr><td>View your resume information</td><td><a href ="viewResumeInfo/{{Auth::user()->id}}">View</a></td></tr>
                        <tr><td>Resume Style Switcher</td><td><a href = "styleSwitcher/{{Auth::user()->id}}">Switch</td></tr>
                        <tr><td></td><td></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
