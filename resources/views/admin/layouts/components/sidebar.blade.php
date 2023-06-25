<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a class="navbar-brand" href="/"><img src="{{ asset('user/assets/img/logo.svg')}}" height="40" alt="logo" /></a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"><i class="bx bx-chevron-left bx-sm align-middle"></i></a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1 mt-3">
        <!-- Dashboard -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>
        <li class="menu-item {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
            <a href="{{ route('admin.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master</span>
        </li>
        <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
            <a href="{{ route('admin.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Dokumen</div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
            <a href="{{ route('admin.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">User</div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
            <a href="{{ route('admin.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Penduduk</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pengajuan</span>
        </li>
        <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
            <a href="{{ route('admin.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Pengajuan</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Template</span>
        </li>
        <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
            <a href="{{ route('admin.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Template Surat</div>
            </a>
        </li>
        {{-- <li class="menu-item {{ (request()->is('pengajuan*')) ? 'active' : '' }}">
            <a href="{{ route('admin.submission.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div data-i18n="Basic">Pengajuan Dokumen</div>
            </a>
        </li> --}}
    </ul>
</aside>
<!-- / Menu -->
