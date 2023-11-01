@extends('layouts.app')
@section('title')
{{ __('REGISTER') }}
@endsection

@section('content')
    <div class="container">
        <!-- Login Area Start -->
        <div class="block login-modal py-[50px]" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="header-area">
                            <h4 class="title">Welcome!</h4>
                            <p class="sub-title">Enter your details below.</p>
                        </div>
                        <div class="form-area">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input id="name" type="text" placeholder="Enter your Name"
                                        class="form-control input-field @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input id="email" type="email" placeholder="Enter your Email"
                                        class="form-control input-field @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input id="password" type="password"
                                        class="form-control input-field @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password *</label>
                                    <input id="password-confirm" type="password"
                                        class="form-control input-field"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="mybtn1 bg-red-500">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="form-footer">
                            <p>Already have one?
                                <a href="{{ route('login') }}">Log In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Area End -->
    </div>
@endsection
