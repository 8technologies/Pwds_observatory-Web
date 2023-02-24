@extends('layouts.layout-main')
@section('main-content')
    <!-- Hero -->
    <section class="position-relative pt-5">

        <!-- Background -->
        <div class="position-absolute top-0 start-0 w-100 bg-position-bottom-center bg-size-cover bg-repeat-0"
            style="background-image: url(assets/img/about/hero-bg.svg);">
            <div class="d-lg-none" style="height: 960px;"></div>
            <div class="d-none d-lg-block" style="height: 768px;"></div>
        </div>

        <!-- Content -->
        <div class="container position-relative zindex-5 pt-5">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Breadcrumb -->
                    <nav class="pt-md-2 pt-lg-3 pb-4 pb-md-5 mb-xl-4" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <h1>Our vision & mission</h1>
        </div>
    </section>



    <!-- Benefits (features) -->
    <div class="container mt-3 mb-5 pt-lg-5 bg-secondary  rounded my-3 my-md-5 border-1 border-primary lead"
        style="border: solid 3px #024928;" id="benefits">
        <div class="swiper pt-3"
            data-swiper-options='{
                  "slidesPerView": 1,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "breakpoints": {
                    "500": {
                      "slidesPerView": 2
                    },
                    "991": {
                      "slidesPerView": 3
                    }
                  }
                }'>
            <div class="swiper-wrapper pt-4 text-dark">

                <!-- Item -->
                <div class="swiper-slide border-end-lg px-2">
                    <div class="text-center">
                        <img src="assets/img/landing/digital-agency/icons/idea.svg" width="48" alt="Bulb icon"
                            class="d-block mb-4 mx-auto">
                        <h4 class="mb-2 pb-1">Our Vision</h4>
                        <p class="mx-auto" style="max-width: 336px;">Unity and Development.<br><br><br><br><br><br></p>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide border-end-lg px-2 ">
                    <div class="text-center">
                        <img src="assets/img/landing/digital-agency/icons/award.svg" width="48" alt="Award icon"
                            class="d-block mb-4 mx-auto">
                        <h4 class="mb-2 pb-1">Our Mission</h4>
                        <p class="mx-auto" style="max-width: 336px;">To create fellowship among IUIU Alumni under one
                            umbrella and offer practical solutions that benefit members and the Alma mater through rigorous
                            networking.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide px-2">
                    <div class="text-center">
                        <img src="assets/img/landing/digital-agency/icons/team.svg" width="48" alt="Team icon"
                            class="d-block mb-4 mx-auto">
                        <h4 class="mb-2 pb-1">Our Core Values</h4>
                        <p class="mx-auto " style="max-width: 336px; ">Integrity, Diversity, Creativity & coexistence.</p>
                    </div>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
    </div>




    <!-- Contact CTA -->
    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 bg-gradient-primary">
                    <div class="card-body p-md-5 p-4 bg-size-cover"
                        style="background-image: url(assets/img/landing/digital-agency/contact-bg.png);">
                        <div class="py-md-5 py-4 text-center">
                            <h3 class="h4 fw-normal text-light opacity-75">Want to work with us? Let's talk</h3>
                            <a href="mailto:info@iuiuaa.org" class="display-6 text-light">info@iuiuaa.org</a>
                            <div class="pt-md-5 pt-4 pb-md-2">
                                <a href="mailto:info@iuiuaa.org" class="btn btn-lg btn-light">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
