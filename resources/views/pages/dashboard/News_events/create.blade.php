@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'Post Event or News'])
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
                    <h2>Post details</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Title</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="title" class="form-control mb-2" placeholder="title" value="" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('title')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter the news or event title</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
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
                    <label class="required form-label">Post type</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select class="form-control mb-2" name="type">
                        <option value="">Select post type</option>
                        <option value="News">News</option>
                        <option value="Event">Event</option>
                    </select>
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('type')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Select post type</div>
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
                    <h2>For events only</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Venue</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="venue" class="form-control mb-2" placeholder="venue" value="{{ old('venue') }}" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('venue')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter event venue here</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">event url</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="text" name="event_url" class="form-control mb-2" placeholder="event url" value="{{ old('event_url') }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('event_url')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter event website if any</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Start date</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="date" name="start_date" class="form-control mb-2" placeholder="Event start Date" value="{{ old('start_date') }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('start_date')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Event start date</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">End date</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="date" name="end_date" class="form-control mb-2" placeholder="End Date" value="{{ old('end_date') }}" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('end_date')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Event end date</div> 
                    @enderror
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="form-label">Registration fee</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input type="number" name="regestration_fee" class="form-control mb-2" placeholder="Registration fee" value="" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    @error('regestration_fee')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Registration/Paticipation fee if any</div> 
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
            <a href="{{ route('admin_news') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                <span class="indicator-label">Sumit Item</span>
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