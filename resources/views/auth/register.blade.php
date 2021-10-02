@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Register</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
                <form class="signin-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" placeholder="Password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
                    </div>
                </form>
                <p class="w-100 text-center">&mdash; Already have an account? <a href="{{ route('login') }}">Login here</a> &mdash;</p>
            </div>
        </div>
    </div>
</div>
@endsection

