@extends('layouts.app')
@section('title')
{{ __('RESET PASS') }}
@endsection

@section('content')
    <!-- Login Area Start -->
    <div class="block login-modal py-[50px]" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div class="header-area">
                        <h4 class="title">Password Reset</h4>
                        <p class="sub-title">Enter your Email address below.</p>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-area">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input id="email" type="email" placeholder="Enter your Email"
                                    class="form-control input-field @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="mybtn1 bg-red-500">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Area End -->
    </div>
@endsection
