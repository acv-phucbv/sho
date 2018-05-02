<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="{{ app()->getLocale() }}"> <!--<![endif]-->
@include('layouts.partials.head')
<body class="{{ isset($bodyClass) ? $bodyClass : 'page-header-fixed page-sidebar-closed-hide-logo page-content-white' }}">
    @include('layouts.partials.header')
    <div class="clearfix"> </div>
    @yield('slider')
    <div class="clearfix"> </div>
    <div class="container">
        {{--@include('layouts.partials.sidebar')--}}
{{--        @include('layouts.partials.breadcrumb')--}}
        <div class="clearfix margin-bottom-20"> </div>
        {{--@include('layouts.partials.messages')--}}
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    @include('layouts.partials.javascript')
    @yield('inline_scripts')
</body>
</html>
