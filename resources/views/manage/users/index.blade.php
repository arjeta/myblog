@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-success"><i class="fas fa-user-plus"></i>Add new user</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-content">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email ddress</th>
                <th>Date created</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user )
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a></td>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>


@endsection