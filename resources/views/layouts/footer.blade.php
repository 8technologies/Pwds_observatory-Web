<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
    <!--begin::Copyright-->
    <div class="text-dark order-2 order-md-1">
        <span class="text-muted fw-semibold me-1">{{ now()->year }}&copy;</span>
        <a href="#" target="_blank" class="text-gray-800 text-hover-primary">ICT For Persons with Disabilities</a>
    </div>
    <!--end::Copyright-->
    @if (!Auth::user())
    <!--begin::Menu-->
    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
        <li class="menu-item">
            <a href="#" target="_blank" class="menu-link px-2">About</a>
        </li>
        <li class="menu-item">
            <a href="#" target="_blank" class="menu-link px-2">Contact Us</a>
        </li>
    </ul>
    <!--end::Menu-->        
    @endif
</div>