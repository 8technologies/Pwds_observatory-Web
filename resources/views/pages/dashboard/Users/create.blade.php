@extends('layouts.app')

@section('bread')
    @include('layouts.bread', ['current_page' => 'Register New Member'])
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
                    <h2>Bio Data</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="required form-label">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control mb-2" placeholder="name" value="{{ old('name') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('name')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Member full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="required form-label">Phone Number</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="phone" class="form-control mb-2" placeholder="e.g 256701234567" value="{{ old('phone') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('phone')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Member full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>  
                    </div>
                </div>    
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="email" class="form-control mb-2" placeholder="johndoe@example.com" value="{{ old('email') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('email')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Member Email Address</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="required form-label">Date of Birth</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="date" name="dob" class="form-control mb-2" value="{{ old('dob') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('dob')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Enter date of birth</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Gender</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="gender" class="form-control mb-2">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('gender')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Member full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>                        
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="form-label">Level of Education</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="education_level" class="form-control mb-2">
                                <option value="">Select education level</option>
                                <option value="No formal Education">No formal Education</option>
                                <option value="Primary">Primary Level</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Tertiary">Tertiary level</option>
                                <option value="University">University</option>
                            </select>
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('education_level')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Member full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="required form-label">Employemnt type</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="employment_type" class="form-control mb-2">
                                <option value="">Select Employemnt type</option>
                                <option value="Non employeed">No employment</option>
                                <option value="Semi Employeed">Semi Employeed</option>
                                <option value="Full Employeed">Full Employeed</option>
                                <option value="Self Employeed">Self Employeed/Business</option>
                            </select>
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('employment_type')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Member full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Type of disability</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="disability_type" class="form-control mb-2" placeholder="Type of disability" value="{{ old('disability_type') }}" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    @error('disability_type')
                    <div class="text-danger fs-7">{{ $message }}</div>
                    @else
                    <div class="text-muted fs-7">Enter type of disability</div> 
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
                    <h2>Next of Kin Infomartion</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="nok" class="form-control mb-2" placeholder="Full Name" value="{{ old('nok') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('nok')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Next of kin full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Contact</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="nok_contact" class="form-control mb-2" placeholder="Contact" value="{{ old('nok_contact') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('nok_contact')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Next of Kin contact</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Relationship</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="nok_relationship" class="form-control mb-2" placeholder="Relationship" value="{{ old('nok_relationship') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('nok_relationship')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Relationship with Next of Kin</div> 
                            @enderror
                            <!--end::Description-->
                        </div>                        
                    </div>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Caregiver Information</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="care_giver_name" class="form-control mb-2" placeholder="Full Name" value="{{ old('care_giver_name') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('care_giver_name')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Care giver full name</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Contact</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="care_giver_contact" class="form-control mb-2" placeholder="Contact" value="{{ old('care_giver_contact') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('care_giver_contact')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Care giver contact</div> 
                            @enderror
                            <!--end::Description-->
                        </div>
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="form-label">Relationship</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="care_giver_relationship" class="form-control mb-2" placeholder="Relationship" value="{{ old('care_giver_relationship') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('care_giver_relationship')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Relationship with care giver</div> 
                            @enderror
                            <!--end::Description-->
                        </div>                        
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <div class="row">
                        <div class="col-md-6">
                            <!--begin::Label-->
                            <label class="form-label">Date of birth</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="date" name="care_giver_dob" class="form-control mb-2" placeholder="title" value="{{ old('care_giver_dob') }}" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            @error('care_giver_dob')
                            <div class="text-danger fs-7">{{ $message }}</div>
                            @else
                            <div class="text-muted fs-7">Caregiver date of birth</div> 
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
            <a href="{{ route('users') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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