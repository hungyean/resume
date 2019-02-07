@extends('layouts.app')

@section('content')

<div class="login-form">
    <form action="{{ route('login') }}" method="post">
    @csrf
        <h2 class="text-center">{{ __('Login') }}</h2>       
        <div class="form-group">
        <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
        <!-- <div class="col-md-6"> -->
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email Address" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        <!-- </div> -->
        </div>
        <div class="form-group">
        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                <!-- <div class="col-md-6"> -->
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required> 

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <!-- </div> -->
        </div>
        <div class="form-group">
        <!-- <div class="col-md-8 offset-md-4"> -->
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                
                            <!-- </div> -->
        </div>
        <div class="clearfix">
        <!-- <div class="col-md-6 offset-md-4"> -->
                                <!-- <div class="form-check"> -->
                                    

                                    <label class="pull-left checkbox-inline" for="remember">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                <!-- </div> -->
                            <!-- </div> -->
            @if (Route::has('password.request'))
                                    <a class="pull-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
            @endif
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
@endsection
