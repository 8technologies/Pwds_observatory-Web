@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'Dashboard'])
@endsection

@section('content')
<!--begin::Card-->
<div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('assets/media/illustrations/sketchy-1/4.png')">
    <!--begin::Card header-->
    <div class="card-header pt-10">
        <div class="d-flex align-items-center">
            <!--begin::Icon-->
            <div class="symbol symbol-circle me-5">
                <!--begin::Menu wrapper-->
                <div class="cursor-pointer symbol symbol-30px symbol-md-50px">
                    @if (Auth::user()->avator == 'default.png')
                    <img src="{{ asset('assets/media/svg/avatars/001-boy.svg') }}" alt="{{ Auth::user()->name }}" />	
                    @else
                    <img src="{{ asset('storage/'.Auth::user()->avator) }}" alt="{{ Auth::user()->name }}" />	
                    @endif
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Icon-->
            <!--begin::Title-->
            <div class="d-flex flex-column">
                <h2 class="mb-1">{{ Auth::user()->name }}</h2>
                <div class="text-muted fw-bold">
                <a href="#">Account type: {{ Auth::user()->account_type }}</a>
                <span class="mx-3">|</span>
                <a href="#">Account Email: {{ Auth::user()->email }}</a>
                <span class="mx-3">|</span>2.6 GB Available</div>
            </div>
            <!--end::Title-->
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pb-0">
        <!--begin::Navs-->
        <div class="d-flex overflow-auto h-55px">
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6 active" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6" href="{{ route('profile') }}">Profile</a>
                </li>
                <!--end::Nav item-->
            </ul>
        </div>
        <!--begin::Navs-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection                                    
