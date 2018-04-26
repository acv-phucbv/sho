@extends('layouts.login')
@section('title', trans('common.auth.register'))

@section('plugin_styles')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('page_styles')
    <link href="{{ asset('assets/pages/css/account.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/pages/css/util.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="limiter">
        <div class="container-resgister">
            <div class="wrap-register">
                {!! Form::open(['route'=>'register', 'class'=>'login-form validate-form']) !!}
                <span class="login-form-logo"></span>

					<span class="login-form-title p-b-34 p-t-27">
						{{ trans('common.auth.register') }}
					</span>

                @include('layouts.partials.messages')

                <div class="wrap-input validate-input" data-validate = "Enter username">
                    {{ Form::text('username', null, ['class'=>'input', 'placeholder'=>trans('common.auth.username')]) }}
                    <span class="focus-input" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input validate-input" data-validate = "Enter username">
                    {{ Form::email('email', null, ['class'=>'input', 'placeholder'=>trans('common.auth.email')]) }}
                    <span class="focus-input" data-placeholder="&#xf15a;"></span>
                </div>

                <div class="wrap-input validate-input" data-validate="Enter password">
                    {{ Form::password('password', ['id'=>"password", 'class'=>'input', 'placeholder'=>trans('common.auth.password')]) }}
                    <span class="focus-input" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input validate-input" data-validate="Enter password">
                    {{ Form::password('password_confirmation', ['id'=>"password-confirm", 'class'=>'input', 'placeholder'=>trans('common.auth.password_confirm')]) }}
                    <span class="focus-input" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-register-form-btn">
                    <button class="login-form-btn">
                        {{ trans('common.auth.register') }}
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="{{ route('login') }}">{{ trans('common.auth.login') }}</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
