<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset("/admin/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Site</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">ADMIN ACTION</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.menu")}}" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="nav-header">TESTING</li>
                <li class="nav-item">
                    <a href="{{route("admin.test.form")}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Form Testing</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

@push('scripts')
    <script>
        /*** add active class and stay opened when selected ***/
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function () {
            if (this.href) {
                return this.href === url || url.href.indexOf(this.href) === 0;
            }
        }).addClass('active');

        // for the treeview
        $('ul.nav-treeview a').filter(function () {
            if (this.href) {
                return this.href === url || url.href.indexOf(this.href) === 0;
            }
        }).parentsUntil(" .nav-sidebar> .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    </script>
@endpush
