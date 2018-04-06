@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">View permissions</h1>
            </div> <!-- end of column -->

            <div class="column">
                <a href="{{route('permissions.edit', $permission->id)}}" class="button is-success is-pulled-right"><i class="fas fa-edit m-r-5"></i>Edit</a>
            </div>
        </div>
    </div>
    @endsection