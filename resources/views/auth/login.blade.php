@extends('backend.template.authtemplate')

@section('auth-body')

<div class="d-flex align-items-center justify-content-center ht-100v">

    <!-- video start -->
    <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{asset('backend/videos/video1.mp4')}}" type="video/mp4">
        <source src="{{asset('backend/videos/video1.ogv')}}" type="video/ogg">
        <source src="{{asset('backend/videos/video1.webm')}}" type="video/webm">
    </video>
    <!-- video end-->

    <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-br-primary rounded bd bd-white-1">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> Log <span class="tx-info">In</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-20">The Admin Template For Perfectionist</div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control form-control-dark" required autofocus placeholder="Enter your username">
            </div>

            <div class="form-group">
                <label for="password"></label>
                <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control form-control-dark" placeholder="Enter your password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                @endif
            </div>

            <button type="submit" class="btn btn-info btn-block">Log In</button>
        </form>

        <div class="mg-t-10 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Registration Here</a></div>
        </div><!-- login-wrapper -->
    </div>

</div>
@endsection





