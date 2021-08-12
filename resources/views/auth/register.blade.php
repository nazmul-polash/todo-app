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
        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-br-primary bd bd-white-1 rounded">
            <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> Registration <span class="tx-info">Here</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-20">The Admin Template For Perfectionist</div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required autofocus class="form-control form-control-dark" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-dark" placeholder="Enter your email" required >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                     <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control form-control-dark" placeholder="Enter your Password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required  class="form-control form-control-dark" placeholder="Enter your Confirm Password">
                </div>
                <button type="submit" class="btn btn-info btn-block">Registration Now</button>
            </form>

            <div class="mg-t-20 tx-center">Alrady a member? <a href="{{ route('login') }}" class="tx-info">Log In</a></div>
        </div>
    </div>

</div>

@endsection






