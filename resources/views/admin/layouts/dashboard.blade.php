<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="{{ app()->getLocale() }}"> <!--<![endif]-->
@include('admin.layouts.partials.head')
<body class="{{ isset($bodyClass) ? $bodyClass : 'page-header-fixed page-sidebar-closed-hide-logo page-content-white' }}">
<div class="page-wrapper">
    @include('admin.layouts.partials.header')
    <div class="clearfix"> </div>
    <div class="page-container">
        @include('admin.layouts.partials.sidebar')
        <div class="page-content-wrapper">
            <div class="page-content">
                @include('admin.layouts.partials.messages')
                @yield('content')
            </div>
        </div>
    </div>
    {{--@include('admin.layouts.partials.footer')--}}
</div>
@include('admin.layouts.partials.javascript')
@yield('inline_scripts')
</body>
</html>
