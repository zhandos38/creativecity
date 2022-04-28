
<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">

            <li class="{{ route('admin.dashboard') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <i class="nav-icon fa fa-dashboard "></i>
                    <span class="nav-title">Дэшбоард</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'call-requests' ? 'active' : '' }}">
                <a href="{{ route('admin.call-requests.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa-reorder "></i>
                    <span class="nav-title">Заявки</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'blocks' ? 'active' : '' }}">
                <a href="{{ route('admin.blocks.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa fa-cogs "></i>
                    <span class="nav-title">Главный блок</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'partners' ? 'active' : '' }}">
                <a href="{{ route('admin.partners.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa fa-trademark "></i>
                    <span class="nav-title">Партнеры</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'points' ? 'active' : '' }}">
                <a href="{{ route('admin.points.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa fa-circle "></i>
                    <span class="nav-title">Точки</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'banners' ? 'active' : '' }}">
                <a href="{{ route('admin.banners.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa fa-list "></i>
                    <span class="nav-title">Баннер</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'prices' ? 'active' : '' }}">
                <a href="{{ route('admin.prices.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa-dollar "></i>
                    <span class="nav-title">Прайс-лист</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'employee-contacts' ? 'active' : '' }}">
                <a href="{{ route('admin.employee-contacts.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa-users"></i>
                    <span class="nav-title">Контакты Сотрудников</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'contacts' ? 'active' : '' }}">
                <a href="{{ route('admin.contacts.index') }}" aria-expanded="false">
                    <i class="nav-icon fa fa-phone"></i>
                    <span class="nav-title">Контакты</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>

