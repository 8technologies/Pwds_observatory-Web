<!--begin::Header-->
<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="{{ route('home') }}">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo2.png') }}" class="h-20px h-lg-30px app-sidebar-logo-default theme-light-show" />
                <img alt="Logo" src="{{ asset('assets/media/logos/logo2.png') }}" class="h-20px h-lg-30px app-sidebar-logo-default theme-dark-show" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{ route('home') }}" class="menu-title">Home</a>
                        </span>
                    </div>
                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{ route('opportunities') }}" class="menu-title">Opportunities</a>
                        </span>
                    </div> 
                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{ route('services') }}" class="menu-title">Services</a>
                        </span>
                    </div> 
                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{ route('info_bank') }}" class="menu-title">Information Bank</a>
                        </span>
                    </div>
                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{ route('events') }}" class="menu-title">Events</a>
                        </span>
                    </div>
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item ms-1 ms-md-3">
                    <a href="{{ route('login') }}" class="btn btn-sm fw-bold btn-danger">Login</a>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <a href="{{ route('sign_up') }}" class="btn btn-sm fw-bold btn-primary">Register</a>
                </div>
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->