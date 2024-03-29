<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/suppliers') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.supplier.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/barangs') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.barang.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/promos') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.promo.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/penjualans') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.penjualan.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/keperluans') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.keperluan.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/pelanggans') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.pelanggan.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
