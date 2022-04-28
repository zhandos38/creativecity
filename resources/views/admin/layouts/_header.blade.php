<!-- begin app-header -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">

        <!-- begin navbar-header -->
        <div class="navbar-header d-flex align-items-center">
            <a href="javascript:void(0)" class="mobile-toggle" onclick="$('body').toggleClass('sidebar-toggled')">
                <i class="ti ti-align-right"></i>
            </a>
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('admin-panel/img/logo.png') }}" class="img-fluid logo-desktop" alt="logo" />
                <img src="{{ asset('admin-panel/img/logo.png') }}" class="img-fluid logo-mobile" alt="logo" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
        </button>
        <!-- end navbar-header -->
        <!-- begin navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                            <i class="ti ti-align-right"></i>
                        </a>
                    </li>


                    <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                        <a href="javascript:void(0)" class="nav-link expand">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-right ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-bell"></i>
{{--                            @if($g_orders->count())--}}
                                <span class="notify">
                                    <span class="blink"></span>
                                    <span class="dot"></span>
                                </span>
{{--                            @endif--}}
                        </a>
                        <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                            <ul>
                                <li class="dropdown-header bg-gradient p-4 text-white text-left">
                                    Уведомления
{{--                                    @if($g_orders->count())--}}
                                        <a href="" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                            <span class="font-13"> Очистить все</span></a>
{{--                                    @endif--}}
                                </li>
{{--                                @if($g_orders->count())--}}
{{--                                    <li class="dropdown-body min-h-240 nicescroll">--}}
{{--                                        <ul class="scrollbar scroll_dark max-h-240">--}}
{{--                                            @foreach($g_orders as $order)--}}
{{--                                                <li>--}}
{{--                                                    <a href="{{ route('admin.orders.show', $order->id) }}">--}}
{{--                                                        <div class="notification d-flex flex-row align-items-center">--}}
{{--                                                            <div class="notify-icon bg-img align-self-center">--}}
{{--                                                                <div class="bg-type bg-type-md">--}}
{{--                                                                    <span>НЗ</span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="notify-message">--}}
{{--                                                                <p class="font-weight-bold">Новый заказ №{{ $order->id }}</p>--}}
{{--                                                                <small>{{ $order->getDateAgo() }}</small>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="dropdown-footer">--}}
{{--                                        <a href="{{ route('admin.orders.index') }}" class="font-13">--}}
{{--                                            Просмотреть все заказы--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @else--}}
{{--                                    <li class="dropdown-footer">--}}
{{--                                       Не найдено--}}
{{--                                    </li>--}}
{{--                                @endif--}}
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown user-profile">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('admin-panel/img/avatar/default_avatar.png') }}" alt="avtar-img">
                            <span class="bg-success user-status"></span>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="bg-gradient px-4 py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-1">
                                        <h4 class="text-white mb-0">{{ \Illuminate\Support\Facades\Auth::user()->name }}</h4>
                                        <small class="text-white">{{ \Illuminate\Support\Facades\Auth::user()->email }}</small>
                                    </div>
                                    <a href="{{ route('accounts.logout') }}" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top"
                                       title="Выйти" data-original-title="Выйти">
                                        <i class="zmdi zmdi-power"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <a class="dropdown-item d-flex nav-link" href="{{ route('admin.account.index') }}">
                                    <i class="fa fa-user pr-2 text-success"></i>
                                    Профиль
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>
<!-- end app-header -->
