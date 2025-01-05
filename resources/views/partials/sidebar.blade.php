@php
$menus = [
    [
        'name' => 'Dashboard',
        'url' => route('admin.dashboard'),
        'icon' => 'bx bx-home',
        'roles' => ['admin'],
    ],
    [
        'name' => 'Dashboard',
        'url' => route('karyawan.dashboard'),
        'icon' => 'bx bx-home',
        'roles' => ['karyawan'],
    ],
    [
        'name' => 'Management User',
        'url' => route('users.index'),
        'icon' => 'bx bx-user',
        'roles' => ['admin'],
    ],
    [
        'name' => 'Data Barang',
        'url' => 'javascript:void(0);',
        'icon' => 'bx bx-grid',
        'roles' => ['admin'],
        'submenu' => [
            [
                'name' => 'Kategori Barang',
                'url' => route('kategori-barang.index'),
            ],
            [
                'name' => 'Management Barang',
                'url' => route('barang.index'),
            ],
        ],
    ],
];
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/logo/83790f2b43f00be.png') }}" alt="Logo" width="50">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">CumaEvos</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @foreach ($menus as $menu)
            @if (in_array(auth()->user()->role, $menu['roles']))
                @php
                    $isSubmenuActive = isset($menu['submenu']) && collect($menu['submenu'])->contains(fn($submenu) => request()->url() === $submenu['url']);
                @endphp

                <li class="menu-item {{ request()->url() === $menu['url'] || $isSubmenuActive ? 'active open' : '' }}">
                    <a href="{{ $menu['url'] }}" class="menu-link {{ isset($menu['submenu']) ? 'menu-toggle' : '' }}">
                        <i class="menu-icon tf-icons {{ $menu['icon'] }}"></i>
                        <div class="text-truncate">{{ $menu['name'] }}</div>
                        @isset($menu['submenu'])
                            <span class="badge rounded-pill bg-danger ms-auto">2</span>
                        @endisset
                    </a>
                    
                    <!-- Submenu -->
                    @isset($menu['submenu'])
                        <ul class="menu-sub">
                            @foreach ($menu['submenu'] as $submenu)
                                <li class="menu-item {{ request()->url() === $submenu['url'] ? 'active' : '' }}">
                                    <a href="{{ $submenu['url'] }}" class="menu-link">
                                        <div class="text-truncate">{{ $submenu['name'] }}</div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endisset
                </li>
            @endif
        @endforeach
    </ul>
</aside>
