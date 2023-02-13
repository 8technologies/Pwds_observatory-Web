@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'Post New Opportunity'])
@endsection

@section('content')
<form  class="form d-flex flex-column flex-lg-row" method="POST" enctype="multipart/form-data">
    @csrf
    <!--begin::Aside column-->
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Thumbnail settings-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2 class="required">Banner Image</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
                <!--begin::Image input-->
                <!--begin::Image input placeholder-->
                <style>.image-input-placeholder { background-image: url({{asset('assets/media/svg/files/blank-image.svg') }}); }</style>
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
                @error('avatar')
                <div class="text-danger fs-7">{{ $message }}</div>
                @else
                <div class="text-muted fs-7">Set the post banner image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                @enderror
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
                    <h2>General</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Opportuity title</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="title" class="form-control mb-2" placeholder="Opportunity title" value="" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('title')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter the job or opportunity title</div>
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Details</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <textarea name="details" id="details_editor">{{ old('details') }}</textarea>
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('details')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter post details</div>
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Opportuity Category</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name ="category" class="form-control mb-2">
                        <option value="">Select Category</option>
                        <option value="job">Job</option>
                        <option value="internship">Internship</option>
                        <option value="scholarship">Scholarship</option>
                        <option value="conference">Conference</option>
                    </select>
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('category')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Select opportunity category</div>
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">opportunity url</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="text" name="url" class="form-control mb-2" placeholder="Opportunity title" value="{{ old('url') }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('url')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter website link with details about this opportunity</div>
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Expiry date</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="date" name="expiry_date" class="form-control mb-2" value="{{ old('expiry_date') }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('expiry_date')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter opportunity expiry date</div>
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
            <a href="{{ route('admin_opportunities') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" class="btn btn-primary">
                <span class="indicator-label">Post Opportunity</span>
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