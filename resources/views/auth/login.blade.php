@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Have an account?</h3>
                <form class="signin-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                    </div>

                    <div class="form-group d-md-flex">
                        <div class="form-check W-50">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label checkbox-wrap checkbox-primary" for="remember">Remember Me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="w-50 text-md-right">
                                <a href="{{ route('password.request') }}" style="color: #fff">Forgot Password</a>
                            </div>
                        @endif

                    </div>
                </form>
                 <p class="w-100 text-center">&mdash; Don't have an account? <a href="{{ route('register') }}">Register here</a> &mdash;</p>
            </div>
        </div>
    </div>
</div>
@endsection

