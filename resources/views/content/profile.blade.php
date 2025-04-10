@extends('layouts.app')

@section('content')
    <div>
        <!-- Profile Content -->
        <h1>Your Profile</h1>

        <!-- Table for Profile Information -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Username</td>
                    <td>{{ $username }}</td>
                </tr>
                <tr>
                    <td>Role ID</td>
                    <td>{{ $role->id }}</td>
                </tr>
                <tr>
                    <td>Role Name</td>
                    <td>{{ $role->name }}</td>
                </tr>
                <tr>
                    <td>Role Description</td>
                    <td>{{ $role->description }}</td>
                </tr>
                <tr>
                    <td>Last Updated</td>
                    <td>{{ $role->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
