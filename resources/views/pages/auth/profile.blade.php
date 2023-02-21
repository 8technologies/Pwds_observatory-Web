@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'User profile'])
    <div class="container px-5 py-2">
        <div class="row px-5">@include('layouts.flash')</div>
    </div>    
@endsection

@section('content')
<form class="form d-flex flex-column flex-lg-row" method="POST" enctype="multipart/form-data">
    @csrf
    <!--begin::Aside column-->
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Thumbnail settings-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2 class="required">Profile Image</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
                <!--begin::Image input-->
                <!--begin::Image input placeholder-->
                @if ($avator == 'default.png')
                <style>.image-input-placeholder { background-image: url({{asset('assets/media/svg/files/blank-image.svg') }}); }</style>    
                @else
                <style>.image-input-placeholder { background-image: url({{asset('storage/'.$avator) }}); }</style>     
                @endif
                <!--end::Image input placeholder-->
                <!--begin::Image input-->
                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-150px h-150px"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                        <!--begin::Icon-->
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <!--end::Icon-->
                        <!--begin::Inputs-->
                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="avatar_remove" />
                        <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Description-->
                <div class="text-muted fs-7">Set the post banner image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                <!--end::Description-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Thumbnail settings-->
    </div>
    <!--end::Aside column-->
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Profile details</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Organization Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="name" class="form-control mb-2" placeholder="title" value="{{ old('name', $user_name) }}" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('name')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter Organization name here</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">About Organization</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <textarea name="about" id="details_editor">{{ old('about', $profile->about ?? null) }}</textarea>
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('about')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter breif company description</div>
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
                    <h2>Contact Information</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Phone Number</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="phone" class="form-control mb-2" placeholder="phone number" value="{{ old('phone', $profile->phone ?? null) }}" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('phone')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter organization phone number</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Organization Address</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="text" name="address" class="form-control mb-2" placeholder="Registration fee" value="{{ old('address', $profile->address ?? null) }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('address')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter organization address here</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->                
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">Website</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="text" name="website" class="form-control mb-2" placeholder="website url" value="{{ old('website', $profile->website ?? null) }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('website')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter organisation website url (optional)</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">Twiter url</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="text" name="twitter" class="form-control mb-2" placeholder="Twitter url" value="{{ old('twitter', $profile->twitter ?? null) }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('twitter')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter twitter url (optional)</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">Facebook url</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="text" name="facebook" class="form-control mb-2" placeholder="facebook url" value="{{ old('facebook', $profile->facebook ?? null) }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('facebook')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter facebook url (optional)</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <!--end::General options-->
        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                <span class="indicator-label">Update Profile</span>
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
<script>
    KTUtil.onDOMContentLoaded(function () {
        tinymce.init({
            selector: 'textarea#details_editor',
            height : "480",
            menubar: false,
        });
    });
</script>
@endsection