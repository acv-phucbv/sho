{{-- END CORE PLUGINS --}}
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/others/plugins.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/active.js') }}" type="text/javascript"></script>
{{-- BEGIN PAGE LEVEL PLUGINS --}}
@yield('page_plugin_scripts')
{{-- END PAGE LEVEL PLUGINS --}}
{{-- BEGIN THEME GLOBAL SCRIPTS --}}
{{-- END THEME GLOBAL SCRIPTS --}}
{{-- BEGIN PAGE LEVEL SCRIPTS --}}
@yield('page_scripts')
{{-- END PAGE LEVEL SCRIPTS --}}
{{-- BEGIN THEME LAYOUT SCRIPTS --}}
{{-- END THEME LAYOUT SCRIPTS --}}

{{--<script src="{{ asset('js/account.js') }}" type="text/javascript"></script>--}}
