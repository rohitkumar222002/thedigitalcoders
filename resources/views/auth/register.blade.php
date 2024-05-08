@extends('layouts.app')
@section('content')
<div class="container">
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="CoolAdmin">
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name" :value="__('Name')">Name</label>
                        <input class="au-input au-input--full" id="name" name="name" :value="old('name')"
                            autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email" :value="__('Email')">Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" id="email"
                            :value="old('email')">
                    </div>
                    <div class="form-group">
                        <label for="password" :value="__('Password')">Password</label>
                        <input class="au-input au-input--full" type="password" id="password" name="password"
                            autocomplete="new-password" />
                    </div>
                    <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="aggree">Agree the terms and policy
                        </label>
                    </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20">
                        {{ __('Register') }}</button>
                    <div class="social-login-content">
                        <div class="social-button">
                            <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                            <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                        </div>
                    </div>
                </form>
                <div class="register-link">
                    <p>
                        Already have account?
                        <a href="{{route('login')}}">Log-In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection