@extends('layouts.app')

@section('content')


        @if (session('status'))
            <div class="notification is-success">
                {{ session('status') }}
            </div>
        @endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Forgot password</h1>

                    <form action="{{route('password.email')}}" method="POST" role="form">
                        {{csrf_field()}}

                        <div class="field">
                            <label class="label">Email</label>
                            <p class="control has-icons-left has-icons-right">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" placeholder="example@com" value="{{old('email')}}">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>

                        <button type="submit" class="button is-success is-outlined is-fullwidth">Send me a reset link</button>
                    </form>
                </div>

                <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted"><i class="fas fa-long-arrow-alt-left"></i>Back to login page</a></h5>
            </div>
        </div>
    </div>


@endsection
