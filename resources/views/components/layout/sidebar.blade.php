<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">TokoKu</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Master</span></li>
        
        <li class="menu-item {{ request()->routeIs('category.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Kategori">Kategori</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('category.index') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}" class="menu-link">
                        <div data-i18n="Daftar Kategori">Daftar Kategori</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('category.create') ? 'active' : '' }}">
                    <a href="{{ route('category.create') }}" class="menu-link">
                        <div data-i18n="Tambah Kategori">Tambah Kategori</div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="menu-item {{ request()->routeIs('products.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Produk">Katalog Produk</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('products.index') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}" class="menu-link">
                        <div data-i18n="Daftar Produk">Daftar Produk</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('products.create') ? 'active' : '' }}">
                    <a href="{{ route('products.create') }}" class="menu-link">
                        <div data-i18n="Tambah Data">Tambah Data</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>