@extends('layouts.base')

@section('content')
<div>
    <div class="container-fluid pt-5 px-0" style="background-color: #F4DE6D;">
        <!--begin::Landing hero-->
        <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
            <!--begin::Heading-->
            <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                <!--begin::Title-->
                <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x">Welcome to
                <br />ICT for People with Disabilities</h1>
                <p class="mb-15">An observatory and resource center to help People with disabilities navigate the world of tech</p>
                <!--end::Title-->
                <!--begin::Action-->
                <a href="{{ route('sign_up') }}" class="btn btn-primary">Create Account</a>
                <a href="{{ route('login') }}" class="btn btn-danger">Already a member</a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->
            <!--begin::Clients-->
            <div class="d-flex flex-center flex-wrap position-relative px-5">
                <!--begin::Client-->
                <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                    <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="" />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                    <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="" />
                </div>
                <!--end::Client-->
            </div>
            <!--end::Clients-->
        </div>
        <!--end::Landing hero-->
        <!--begin::Highlight-->
        <div class="d-flex flex-stack flex-wrap flex-md-nowrap shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
            <!--begin::Content-->
            <div class="my-2 me-5">
                <!--begin::Title-->
                <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Download the Ict4PWD for
                <span class="fw-normal">and join the community</span></div>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">News, Events, Opportunities, Services and more</div>
                <!--end::Description-->
            </div>
            <!--end::Content-->
            <!--begin::Link-->
            <div>
                <a href="#" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">App Store</a>
                <a href="#" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2 ms-2">Google Play</a>
            </div>
            <!--end::Link-->
        </div>
        <!--end::Highlight-->        
    </div>				
    <!--begin::About card-->
    <div class="card" style="margin-top: 30px;">
        <!--begin::Body-->
        <div class="card-body p-lg-17">
            <!--begin::About-->
            <div class="mb-18">
                <!--begin::Wrapper-->
                <div class="mb-10">
                    <!--begin::Top-->
                    <div class="text-center mb-15">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-dark mb-5">About Us</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fs-5 text-muted fw-semibold">Within the last 10 years, we have sold over 100,000 admin theme copies that have been
                        <br />successfully deployed by small businesses to global enterprises</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Overlay-->
                    <div class="card bg-light mb-18">
                        <!--begin::Body-->
                        <div class="card-body py-15">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-center">
                                <!--begin::Items-->
                                <div class="d-flex justify-content-between mb-10 mx-auto w-xl-900px">
                                    <!--begin::Item-->
                                    <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
                                        <!--begin::Content-->
                                        <div class="text-center">
                                            <!--begin::Symbol-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-primary">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="mt-1">
                                                <!--begin::Animation-->
                                                <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700">0</div>+</div>
                                                <!--end::Animation-->
                                                <!--begin::Label-->
                                                <span class="text-gray-600 fw-semibold fs-5 lh-0">Businesses</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
                                        <!--begin::Content-->
                                        <div class="text-center">
                                            <!--begin::Symbol-->
                                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-success">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="currentColor" />
                                                    <path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="currentColor" />
                                                    <path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="mt-1">
                                                <!--begin::Animation-->
                                                <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="80">0</div>K+</div>
                                                <!--end::Animation-->
                                                <!--begin::Label-->
                                                <span class="text-gray-600 fw-semibold fs-5 lh-0">Quick Reports</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
                                        <!--begin::Content-->
                                        <div class="text-center">
                                            <!--begin::Symbol-->
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-info">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
                                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
                                                    <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Symbol-->
                                            <!--begin::Text-->
                                            <div class="mt-1">
                                                <!--begin::Animation-->
                                                <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="35">0</div>M+</div>
                                                <!--end::Animation-->
                                                <!--begin::Label-->
                                                <span class="text-gray-600 fw-semibold fs-5 lh-0">Payments</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Testimonial-->
                            <div class="fs-2 fw-semibold text-muted text-center mb-3">
                            <span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about it in a
                            <br />
                            <span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
                            <span class="fs-1 lh-1 text-gray-700">“</span></div>
                            <!--end::Testimonial-->
                            <!--begin::Author-->
                            <div class="fs-2 fw-semibold text-muted text-center">
                                <a href="../../demo1/dist/account/security.html" class="link-primary fs-4 fw-bold">Marcus Levy</a>
                                <span class="fs-4 fw-bold text-gray-600">,KeenThemes CEO</span>
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Description-->
                <div class="fs-5 fw-semibold text-gray-600">
                    <!--begin::Text-->
                    <p class="mb-8">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about
                    <a href="../../demo1/dist/pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
                    <!--end::Text-->
                    <!--begin::Text-->
                    <p class="mb-8">There’s an old maxim that states,
                    <span class="text-gray-800 pe-1">“No fun for the writer, no fun for the reader.”</span>No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p>
                    <!--end::Text-->
                    <!--begin::Text-->
                    <p class="mb-8">Before you do any of the following steps, be sure to pick a topic that actually interests you. Nothing – and
                    <a href="../../demo1/dist/pages/blog/home.html" class="link-primary pe-1">I mean NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from the writer. You can tell when a writer is bored by their subject, and it’s so cringe-worthy it’s a little embarrassing.</p>
                    <!--end::Text-->
                    <!--begin::Text-->
                    <p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a cardboard box manufacturing company.” I feel your pain, I really do. During the course of my career, I’ve written content for dozens of clients in some less-than-thrilling industries (such as financial regulatory compliance and corporate housing), but the hallmark of a professional blogger is the ability to write well about any topic, no matter how dry it may be. Blogging is a lot easier, however, if you can muster at least a little enthusiasm for the topic at hand.</p>
                    <!--end::Text-->
                </div>
                <!--end::Description-->
            </div>
            <!--end::About-->
            <!--begin::Card-->
            <div class="card mb-4 bg-light text-center">
                <!--begin::Body-->
                <div class="card-body py-12">
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="assets/media/svg/brand-logos/youtube.svg" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::About card--> 
</div>      
@endsection