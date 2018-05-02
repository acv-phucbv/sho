@if (\Auth::check() && \Auth::user()->isAdmin())
<div class="page-sidebar-wrapper">
    <div class="{{ isset($sidebarClass) ? $sidebarClass : 'page-sidebar navbar-collapse collapse' }}">
        <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 40px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>

            <li class="nav-item start @yield('dashboard_menu')">
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="icon-dashboard"></i>
                    <span class="title">{{ trans('common.dashboard') }}</span>
                    @if (\View::hasSection('dashboard_menu'))
                    <span class="selected"></span>
                    @endif
                </a>
            </li>

            <li class="nav-item  @yield('user_menu')">
                <a href="{{ route('admin.users.index') }}" class="nav-link ">
                    <i class="icon-user"></i>
                    <span class="title">{{ trans('common.user.user_menu') }}</span>
                    @if (\View::hasSection('user_menu'))
                        <span class="selected"></span>
                    @endif
                </a>
            </li>

            <li class="nav-item  @yield('category_menu')">
                <a href="{{ route('admin.categories.index') }}" class="nav-link ">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ trans('common.category.category_menu') }}</span>
                    @if (\View::hasSection('category_menu'))
                        <span class="selected"></span>
                    @endif
                </a>
            </li>
        </ul>
    </div>
</div>
@endif
