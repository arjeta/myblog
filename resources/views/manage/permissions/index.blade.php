@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Permissions</h1>
            </div>
            <div class="column">
                <a href="{{route('permissions.create')}}" class="button is-success"><i class="fas fa-user-plus m-r-5"></i>Add new
                    permission</a>
            </div>
        </div>
        <hr>

        <div class="card-content">
            <table class="table is-striped is-narrow is-fullwidth">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Permission name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($permissions as $permission )
                    <tr>
                        <th>{{$permission->display_name}}</th>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->description}}</td>
                        <td class="has-text-right"><a class="button is-outlined is-small m-r-10" href="{{route('permissions.show', $permission->id)}}">View</a>
                                                   <a class="button is-outlined is-small m-r-10" href="{{route('permissions.edit', $permission->id)}}">Edit</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection