@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Login</h1>

                    <form action="{{route('login')}}" method="POST" role="form">
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

                        <div class="field">
                            <label class="label">Password</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" placeholder="*********">
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>


                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox">Remember me
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="button is-success is-outlined is-fullwidth">Login</button>
                    </form>
                </div>

                <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Forgot password?</a></h5>
            </div>
        </div>
    </div>

@endsection
