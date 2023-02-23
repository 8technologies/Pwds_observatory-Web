@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'Account Settings'])
    <div class="container px-5 py-2">
        <div class="row px-5">@include('layouts.flash')</div>
    </div>    
@endsection

@section('content')
<form class="form d-flex flex-column flex-lg-row" method="POST" enctype="multipart/form-data">
    @csrf
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Account Info</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="required form-label">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control mb-2" readonly value="{{ Auth::user()->email }}" />
                            <!--end::Input-->
                        </div>
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="required form-label">Account Type</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control mb-2" readonly value="{{ Auth::user()->account_type }}" />
                            <!--end::Input-->
                        </div>  
                    </div>
                </div>    
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Phone Number</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="phone" class="form-control mb-2" readonly value="{{ Auth::user()->phone }}" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('phone')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Update your phone number</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->                
            </div>
            <!--end::Card header-->
        </div>
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Update Password</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-12">
                            <!--begin::Label-->
                            <label class="form-label">Old Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="old_password" class="form-control mb-2" placeholder="old password" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('old_password')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Enter your old password</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-6" data-kt-password-meter="true">
                            <!--begin::Label-->
                            <label class="form-label">New Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" 
                                autocomplete="off"/>
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                            <!--begin::Hint-->
                            @error('password')
                            <div class="text-danger mt-2 fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                            @enderror
                            <!--end::Hint-->                            
                            <!--end::Description-->
                        </div>
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="form-label">Confirm Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="password_confirmation" class="form-control mb-2" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('nok_relationship')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Repeat new password</div> 
                            @enderror
                            <!--end::Description-->
                        </div>                        
                    </div>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="{{ route('dashboard') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                <span class="indicator-label">Save Changes</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Main column-->
</form>   
@endsection

@section('page_js')
<script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
@endsection