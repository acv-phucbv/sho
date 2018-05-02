@extends('layouts.login')
@section('title', trans('common.auth.login'))

@section('plugin_styles')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('page_styles')
    <link href="{{ asset('css/account.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login">
                {!! Form::open(['route'=>'login', 'class'=>'login-form validate-form']) !!}
					<span class="login-form-logo"></span>

					<span class="login-form-title p-b-34 p-t-27">
						{{ trans('common.auth.login') }}
					</span>

                    @include('layouts.partials.messages')

                    <div class="wrap-input validate-input" data-validate = "Enter username">
                        {{ Form::text('username', null, ['class'=>'input', 'placeholder'=>trans('common.auth.username')]) }}
                        <span class="focus-input" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input validate-input" data-validate="Enter password">
                        {{ Form::password('password', ['class'=>'input', 'placeholder'=>trans('common.auth.password')]) }}
                        <span class="focus-input" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact-form-checkbox">
                        <input class="input-checkbox" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox" for="ckb1">
                            {{ trans('common.auth.remember_me') }}
                        </label>
                    </div>

                    <div class="container-login-form-btn">
                        <button class="login-form-btn">
                            {{ trans('common.auth.login') }}
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('password.request') }}">{{ trans('common.auth.forgot_password') }}</a>
                        <br>
                        <a class="txt1" href="{{ route('register') }}">{{ trans('common.auth.register') }}</a>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
