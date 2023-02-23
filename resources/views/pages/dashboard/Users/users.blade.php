@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'Organization Members'])
@endsection

@section('content')
<!--begin::Card-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header mt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1 me-5">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search User Account" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <a class="btn btn-light-primary" href="{{ route('post_member') }}">
            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
            <span class="svg-icon svg-icon-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->Register New Member</a>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        @if ($pwd_users->count() < 1)
        <div class="py-5 my-5">
            <h3 class="mt-5">No User's registered under this organisation</h3>
            <a class="btn btn-light-primary mt-3 mb-5" href="{{ route('post_member') }}">
             <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
             <span class="svg-icon svg-icon-3">
                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                     <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                     <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                 </svg>
             </span>
             <!--end::Svg Icon-->Register New Member</a>
             <a class="btn btn-light-primary mt-3 mb-5" href="#">
                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                <span class="svg-icon svg-icon-3">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor"/>
                    <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->Import from Excel</a>
        </div> 
        @else
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">Name</th>
                    <th class="min-w-250px">Type of disability</th>
                    <th class="min-w-250px">More Info</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
                @foreach ($pwd_users as $pwd_user)
                <tr>
                    <!--begin::Name=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-45px me-5">
                                @if ($pwd_user->user->avator == 'default.png')
                                <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="{{ $pwd_user->user->name }}" />    
                                @else
                                <img src="{{ asset('storage/'.$pwd_user->user->avator) }}" class="h-75 align-self-end" alt="{{ $pwd_user->user->name }}" />    
                                @endif
                            </div>
                            <div class="d-flex justify-content-start flex-column">
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ Str::title($pwd_user->user->name) }}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $pwd_user->user->phone }}</span>
                            </div>
                        </div> 
                    </td>
                    <!--end::Name=-->
                    <!--begin::Assigned to=-->
                    <td class="text-muted fw-bold">
                        {{ Str::title($pwd_user->disability_type) }}
                    </td>
                    <!--end::Assigned to=-->
                    <!--begin::Email=-->
                    <td>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Employment: {{ $pwd_user->employment_type }}</span>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Educatian: {{ $pwd_user->education_level }}</span>
                    </td>
                    <!--end::Email=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a class="menu-link px-3" onclick='deleteItem("{{ route("users", ["id" => $pwd_user->id]) }}?action=delete")'>Delete</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->            
        @endif
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->    
@endsection

@section('page_js')
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/deleteAlert.js') }}"></script>
@endsection