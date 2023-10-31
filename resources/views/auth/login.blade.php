@extends('layouts.guest')
@section('title', 'Login | ' .config('app.name'))
@section('contents')
<!--section start-->
<section class="py-4 border login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class=" col-lg-6">
                <h3 class="py-3 font-weight-bolder">Login</h3>
                <div class="p-4 border rounded done-two theme-card" style="background-color: #eee!important ">
                    <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" style="font-size: 22px; font-weight: 600 ">Email
                                @error('email')
                                <span class="invalid-feedback d-inline" role="alert">
                                    <strong>: {{ $message }}</strong>
                                </span>
                                @enderror
                            </label>
                            <input type="text" name="email"
                                class="form-control form-large @error('email') is-invalid @enderror" id="email"
                                placeholder="Email" required="" autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="review" style="font-size: 22px; font-weight: 600 ">Password</label>
                            @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="review"
                                placeholder="Enter your password" required="" autocomplete="current-password">
                        </div>
                        <input name="remember" type="checkbox" id="remember" checked style="display:none;">
                        <button type="submit" class="btn btn-solid primary-btn">Login</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </form>
                </div>
            </div>
            <div class=" col-lg-6 right-login">
                <h3 class="py-3 font-weight-bolder">New Member</h3>
                <div class="p-4 border rounded theme-card authentication-right done-two"
                    style="background-color: #eee!important ">
                    <h6 class="title-font" style="font-size: 22px; font-weight: 600; padding: 14px 0;">Create An Account
                    </h6>
                    <p class="">Smart people shop at Binters! Sign up for a free account. As a member, you earn points
                        each time you shop here.
                        You earn additional points when you refer friends and family to shop with us.
                        To become a member, create an account.</p>
                    <a href="{{route('register')}}" class="my-2 mb-6 btn btn-solid primary-btn">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection