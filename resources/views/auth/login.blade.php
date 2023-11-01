@extends('layouts.app')
@section('title')
{{ __('LOGIN') }}
@endsection

@section('content')
    <!-- Login Area Start -->
    <div class="block login-modal py-[50px]" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div class="header-area">
                        <h4 class="title">Great to have you back!</h4>
                        <p class="sub-title">Enter your details below.</p>
                    </div>
                    <div class="form-area">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="login-input-email">Email*</label>
                                <input id="login-input-emaill" type="email" placeholder="Enter your Email"
                                    class="form-control input-field @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="login-input-password">Password*</label>
                                <input id="login-input-password" type="password"
                                        class="form-control input-field @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <div class="box">
                                    <div class="left">
                                        <input class="form-check-input check-box-field" type="checkbox" name="remember" id="input-save-password"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="input-save-password">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="right">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="mybtn1 bg-red-500">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-footer">
                        <p>Not a member?
                            <a href="{{ route( 'register' ) }}">Create account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End -->
@endsection
