@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Register</h1>

                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}

                        <div class="field">
                            <label class="label">Username</label>
                            <p class="control has-icons-left has-icons-right">
                                <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="name" name="name" placeholder="username" value="{{old('name')}}" required>
                                <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>

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


                        <label class="checkbox">
                            <input type="checkbox">
                            I agree to the <a href="#">terms and conditions</a>
                        </label>
                        <button type="submit" class="button is-success is-outlined is-fullwidth m-t-30">Register</button>
                    </form>
                </div>
                <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already registered?</a></h5>
            </div>
        </div>
    </div>



    {{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
