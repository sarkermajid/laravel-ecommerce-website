@extends('frontend.master')

@section('body')

    <!-- Register Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="col-lg-12 col-md-12 mb-3">
                            <input type="text"  id="name" class="@error('name') is-invalid @enderror" name="name" required placeholder="Your Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 mb-3">
                            <input type="email"  id="email" class="@error('email') is-invalid @enderror" name="email" required placeholder="Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 mb-3">
                            <input type="password"  id="password" class="@error('password') is-invalid @enderror" name="password" required placeholder="Your Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 mb-3">
                            <input type="password"  id="password-confirm" class="@error('password') is-invalid @enderror" name="password_confirmation" required placeholder="Password Confirm">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="form-btn">
                                {{ __('Register') }}
                            </button>
                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Register Form End -->
@endsection
