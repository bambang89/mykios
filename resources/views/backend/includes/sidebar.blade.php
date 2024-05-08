<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>
        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.items.*') || Route::is('admin.category.*'), 'c-open c-show') }}">
            <x-utils.link
                href="#"
                icon="c-sidebar-nav-icon cil-screen-desktop"
                class="c-sidebar-nav-dropdown-toggle"
                :text="__('Master Data')" />

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.items.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Item')"
                        :active="activeClass(Route::is('admin.items.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.category.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Katagori')"
                        :active="activeClass(Route::is('admin.category.*'), 'c-active')" />
                </li>

            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.discount.*') || Route::is('admin.tax.*') || Route::is('admin.cost.*'), 'c-open c-show') }}">
            <x-utils.link
                href="#"
                icon="c-sidebar-nav-icon cil-tags"
                class="c-sidebar-nav-dropdown-toggle"
                :text="__('Diskon, Pajak & Biaya')" />
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.discount.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Diskon')"
                        :active="activeClass(Route::is('admin.discount.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.tax.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Pajak')"
                        :active="activeClass(Route::is('admin.tax.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.cost.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Biaya')"
                        :active="activeClass(Route::is('admin.cost.*'), 'c-active')" />
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.supplier.*') || Route::is('admin.customergroup.*') || Route::is('admin.customer.*'), 'c-open c-show') }}">
            <x-utils.link
                href="#"
                icon="c-sidebar-nav-icon cil-people"
                class="c-sidebar-nav-dropdown-toggle"
                :text="__('Pelanggan & Supplier')" />
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.supplier.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Supplier')"
                        :active="activeClass(Route::is('admin.supplier.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.customer.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Pelanggan')"
                        :active="activeClass(Route::is('admin.customer.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.customergroup.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Grup Pelanggan')"
                        :active="activeClass(Route::is('admin.customergroup.*'), 'c-active')" />
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.selling.*') || Route::is('admin.buying.*'), 'c-open c-show') }}">
            <x-utils.link
                href="#"
                icon="c-sidebar-nav-icon cil-fax"
                class="c-sidebar-nav-dropdown-toggle"
                :text="__('Laporan')" />

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.selling.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Penjualan')"
                        :active="activeClass(Route::is('admin.selling.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.buying.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Pembelian')"
                        :active="activeClass(Route::is('admin.buying.*'), 'c-active')" />
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.unit.*') || Route::is('admin.brand.*') || Route::is('admin.type.*') || Route::is('admin.subtype.*') || Route::is('admin.warehouse.*'), 'c-open c-show') }}">
            <x-utils.link
                href="#"
                icon="c-sidebar-nav-icon cil-puzzle"
                class="c-sidebar-nav-dropdown-toggle"
                :text="__('Data Lainnya')" />
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.unit.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Satuan')"
                        :active="activeClass(Route::is('admin.unit.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.brand.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Merek')"
                        :active="activeClass(Route::is('admin.brand.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.type.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Jenis')"
                        :active="activeClass(Route::is('admin.type.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.subtype.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Sub Jenis')"
                        :active="activeClass(Route::is('admin.subtype.*'), 'c-active')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link
                        :href="route('admin.warehouse.index')"
                        class="c-sidebar-nav-link"
                        :text="__('Daftar Gudang')"
                        :active="activeClass(Route::is('admin.warehouse.*'), 'c-active')" />
                </li>
            </ul>
        </li>

        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-list"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::dashboard')"
                            class="c-sidebar-nav-link"
                            :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::logs.list')"
                            class="c-sidebar-nav-link"
                            :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
