@extends('layouts.app')
@section('content')
 <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{route('login')}}" method="post">
                              @csrf
                                <div class="form-group">
                                    <label  for="email" :value="__('Email')">Email Address</label>
                                    <input class="au-input au-input--full" id="email" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label for="password" :value="__('Password')">Password</label>
                                    <input class="au-input au-input--full" id="password"  type="password" name="password" required autocomplete="current-password">
                                </div>
                         
                                <div class="login-checkbox">
                                    <label for="remember_me">
                                        <input id="remember_me" type="checkbox" >{{ __('Remember me') }}
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Log in') }}</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{route('register')}}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
















