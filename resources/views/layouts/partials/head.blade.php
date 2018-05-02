<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_NAME') }} | @yield('title', trans('Page'))</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="author"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- BEGIN GLOBAL MANDATORY STYLES --}}
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/fonts/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    {{-- END GLOBAL MANDATORY STYLES --}}
    {{-- BEGIN PAGE LEVEL PLUGIN STYLES --}}
    @yield('plugin_styles')
    {{-- END PAGE LEVEL PLUGIN STYLES --}}
    {{-- BEGIN THEME GLOBAL STYLES --}}
    {{-- END THEME GLOBAL STYLES --}}
    {{-- BEGIN THEME LAYOUT STYLES --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive/responsive.css') }}" rel="stylesheet" type="text/css" />
    {{-- END THEME LAYOUT STYLES --}}

    {{-- BEGIN PAGE LEVEL STYLES --}}
    @yield('page_styles')
    {{-- END PAGE LEVEL STYLES --}}
    @yield('inline_styles')
</head>
