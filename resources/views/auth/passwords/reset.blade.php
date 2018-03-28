@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Reset password</h1>

                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="field">
                            <label class="label">Email</label>
                            <p class="control has-icons-left has-icons-right">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" placeholder="example@com" value="{{old('email')}}" required>
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
                                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" placeholder="*********" required>
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">Confirm password</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('password_confirm') ? 'is-danger' : ''}}" type="password" name="password_confirm" placeholder="*********" required>
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password_confirm')}}</p>
                            @endif
                        </div>

                        <button type="submit" class="button is-success is-outlined is-fullwidth m-t-30">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
