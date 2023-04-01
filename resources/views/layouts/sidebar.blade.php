@php
    use App\Models\Permission;
    use App\Models\User;
    $user = User::where('id', Auth::id())->first();
    $permisos = $user->getPermissionNames();

    $datapermisos = Permission::whereIn('name', $permisos)
        ->orderBy('id')
        ->get();

@endphp
@if ($permisos->count())
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><img src="{{ asset('img/logo.jpeg') }}" alt="Logo"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                @foreach ($datapermisos as $ls)
                    @switch($ls->categoria)
                        @case('vender')
                            <li class="sidebar-item active">
                                <a href="{{ route('sales.point') }}" class="sidebar-link" style="background:#F25D50;">
                                    <i class="bi bi-cart-check"></i>
                                    <span>Venta</span>
                                </a>
                            </li>
                        @break

                        @case('corte_caja')
                            <li class="sidebar-item">
                                <a href="{{ route('corte.caja') }}" class="sidebar-link">
                                    <i class="bi bi-cash"></i>
                                    <span>Corte Caja</span>
                                </a>
                            </li>
                        @break

                        @case('estadisticas')
                            <div class="sidebar-item has-sub">
                                <a href="#" class="sidebar-link">
                                    <i class="bi bi-bar-chart"></i>
                                    <span>Estadisticas</span>
                                </a>
                                <ul class="submenu" style="display: none;">
                                    <li class="parent-li">
                                        @switch($ls->name)
                                            @case('productos_vendidos')
                                                <a href="{{ route('bestSellers.index') }}" class="sidebar-link">
                                                    <i class="bi bi-bar-chart-fill"></i>
                                                    <span>Productos mas vendidos</span>
                                                </a>
                                            @break
                                            @case('membresias_vendidas')
                                                <a href="{{ route('bestSellers.index') }}" class="sidebar-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                                        <path
                                                            d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                                        <path
                                                            d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                                        <path
                                                            d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                                    </svg>
                                                    <span>Membresias mas vendidas</span>
                                                </a>
                                            @break

                                            @case('mayores_ventas')
                                                <a href="{{ route('bestSellers.index') }}" class="sidebar-link">
                                                    <i class="bi bi-bar-chart-fill"></i>
                                                    <span>Mayores ventas</span>
                                                </a>
                                            @break
                                        @endswitch
                                    </li>
                                </ul>
                            </div>
                        @break

                        @case('membresias')
                            <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">
                                    <i class="bi bi-credit-card-fill"></i>
                                    <span>Membres&iacute;as</span>
                                </a>
                                <ul class="submenu" style="display: none;">
                                    @switch($ls->name)
                                        @case('ver_membresias')
                                            <li>
                                                <a href="{{ route('Membership.index') }}" class="sidebar-link">
                                                    <i class="bi bi-grid-fill"></i>
                                                    <span>Ver Membres&iacute;as</span>
                                                </a>
                                            </li>
                                        @break;
                                        @case('tipo_membresias')
                                            <li>
                                                <a href="{{ route('Membership-type.index') }}" class="sidebar-link">
                                                    <i class="bi bi-tag-fill"></i>
                                                    <span>Tipo Membresias</span>
                                                </a>
                                            </li>
                                        @break
                                    @endswitch
                                </ul>
                            </li>
                        @break

                        @case('inventario')
                            @can('inventario')
                                <li class="sidebar-item">
                                    <a href="{{ route('inventario.index') }}" class="sidebar-link">
                                        <i class="bi bi-shop"></i>
                                        <span>Inventario</span>
                                    </a>
                                </li>
                            @endcan
                        @break

                        @case('productos')
                            <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">
                                    <i class="bi bi-card-list"></i>
                                    <span>Productos</span>
                                </a>

                                <ul class="submenu" style="display: none;">
                                    @switch($ls->name)
                                        @case('ver_productos')
                                            <li class="submenu-item">

                                                <a href="{{ route('products.index') }}" class="sidebar-link"> <i
                                                        class="bi bi-list-ul"></i>
                                                    <span>Ver Productos</span></a>

                                            </li>
                                        @break

                                        @case('categorias')
                                            <li class="submenu-item">
                                                <a href="{{ route('product-categories.index') }}"><i class="bi bi-bookmark-check"></i>
                                                    <span>Categorías</span></a>
                                            </li>
                                        @break

                                        @case('unidades')
                                            <li class="submenu-item">
                                                <a href="{{ route('product-units.index') }}">
                                                    <i class="bi bi-cup-fill"></i>
                                                    <span>Unidades de Medida</span></a>
                                            </li>
                                        @break

                                        @case('proveedores')
                                            <li class="submenu-item">
                                                <a href="{{ route('provider.index') }}" class="sidebar-link">
                                                    <i class="bi bi-people-fill"></i>
                                                    <span>Proveedores</span>
                                                </a>
                                            </li>
                                        @break
                                    @endswitch



                                </ul>
                            </li>
                        @break

                        @case('clientes')
                            @can('clientes')
                                <li class="sidebar-item  ">
                                    <a href="{{ route('user.index') }}" class="sidebar-link">
                                        <i class="bi bi-person-badge-fill"></i>
                                        <span>Clientes</span>
                                    </a>
                                </li>
                            @endcan
                        @break

                        @case('colaboradores')
                            @can('colaboradores')
                                <li class="sidebar-item">
                                    <a href="{{ route('colaboradores.index') }}" class="sidebar-link">
                                        <i class="bi bi-person-bounding-box"></i>
                                        <span>Colaboradores</span>
                                    </a>

                                </li>
                            @endcan
                        @break

                        @case('expediente')
                            @can('expedientes')
                                <li class="sidebar-item  ">
                                    <a href="{{ route('record.index') }}" class="sidebar-link">
                                        <i class="bi bi-list-check"></i>
                                        <span>Expedientes</span>
                                    </a>
                                </li>
                            @endcan
                        @break

                        @case('bitacora')
                            <li class="sidebar-item  has-sub">
                                <a href="#" class="sidebar-link">
                                    <i class="bi bi-filter-square-fill"></i>
                                    <span>Bitacoras</span>
                                </a>

                                <ul class="submenu" style="display: none;">
                                    @switch($ls->name)
                                        @case('bitacoras_acceso')
                                            <li class="submenu-item">

                                                <a href="{{ route('index.acceso') }}" class="sidebar-link"> <i
                                                        class="bi bi-list-ul"></i>
                                                    <span>Bitacora de accesos</span></a>

                                            </li>
                                        @break

                                        @case('bitacoras_cancelacion')
                                            <li class="submenu-item">
                                                <a href="{{ route('bitacora.cancelacion') }}"><i class="bi bi-list-ul"></i>
                                                    <span>Bitacora de cancelacion</span></a>
                                            </li>
                                        @break

                                        @case('bitacoras_ventas')
                                            <li class="submenu-item">
                                                <a href="{{ route('bitacora.ventas') }}"><i class="bi bi-graph-up-arrow"></i>
                                                    <span>Bitacora Ventas</span></a>
                                            </li>
                                        @break
                                    @endswitch

                                </ul>
                            </li>
                        @break

                    @endswitch
                @endforeach


            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
@endif
