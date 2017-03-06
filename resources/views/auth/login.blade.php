@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <img src="img/bola.gif" height="433" width="750" class="img-responsive image-login" />
        </div>
        <div class="col-lg-4">
            <div class="card card-container text-center">
                @if (session('info')) <div class="alert alert-danger">{{ session('info') }}</div> @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1>Login</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" style="height: 40px; line-height: 1; margin-bottom: 2px;">LOGIN</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block btn-social facebook" type="button" onclick="FBLogin();" style="height: 40px; line-height: 1;"> Sign in with Facebook </button>
                    </div>
                    <div class="form-group">
                        <a  class="btn btn-lg btn-primary btn-block btn-register" type="button" onclick="return registernow();" style="height: 40px; line-height: 1;" href="{{ route('register') }}">DAFTAR SEKARANG</a>
                    </div>
                </form>
                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a> </div>
        </div>
    </div>
</div>
@endsection