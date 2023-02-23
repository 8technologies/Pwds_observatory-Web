@extends('layouts.base')

@section('content')
    <div class="container">
        @include('layouts.bread', ['current_page' => 'Innovations']) 
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="mb-md-5 mb-xl-10">
                    <!--begin::Card widget 17-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <div class="row px-5 py-5 g-10">
                            <div class="col-md-6">
                                <form>
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <input class="btn btn-secondary" type="submit" value="Search" id="button-addon2">
                                    </div>
                                </form> 
                            </div>
                            <div class="col-md-6"></div>
                            <div class="separator separator-dashed mb-5"></div>
                            @if ($innovations->count() == 0)
                            <div class="my-5 px-5 py-5">
                                <h1>No Innovations</h1>
                                <p>No innovations have been posted yet, please come again later</p>
                            </div>                                    
                            @else
                                @foreach ($innovations as $innovation)
                                    <!--begin::Col-->
                                    <div class="col-md-4">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch me-md-6">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="#">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url({{asset('storage/'.$innovation->banner_image ) }});"></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-2x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->
                                            <!--begin::Body-->
                                            <div class="mt-5">
                                                <!--begin::Title-->
                                                <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $innovation->title }}</a>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-dark mt-3">{!! Str::limit($innovation->details, 280) !!}</div>
                                                <!--end::Text-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bold">
                                                    <a class="text-gray-700 text-hover-primary">By: Jane Miller</a>
                                                    <span class="text-muted">on {{ $innovation->created_at->format('d M Y') }}</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->
                                    </div>
                                    <!--end::Col-->                                          
                                @endforeach
                                <div class="separator separator-dashed mb-5"></div>
                                {{ $innovations->links() }}
                            @endif
                        </div>
                    </div>
                    <!--end::Card widget 17-->
                </div>  
            </div>   
        </div>   
    </div>   
@endsection