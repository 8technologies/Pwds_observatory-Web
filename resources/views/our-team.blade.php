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
                            <li class="breadcrumb-item active" aria-current="page">Our team</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="container  my-md-3 ">
        <h1 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4">Our Leadership</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/abdunur.jpg" class="rounded-3" alt="Jenny Wilson">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Abdunur M. Sekindi</h3>
                        <p class="fs-sm mb-0">CHAIRMAN</p>
                    </div>
                </div>
            </div>




            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/mwebesa.jpg" class="rounded-3" alt="Ralph Edwards">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Mwebesa Umar</h3>
                        <p class="fs-sm mb-0">Vice Chairman</p>
                    </div>
                </div>
            </div>




            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="https://iuiuaa.org/storage/user.jpg" class="rounded-3" alt="Jerome Bell">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Mr. Mousa S Kato</h3>
                        <p class="fs-sm mb-0">Executive Secretary</p>
                    </div>
                </div>
            </div>




            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/nakibuule.jpg" class="rounded-3" alt="Cameron Williamson">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2">
                                    <i class="bx bxl-dribbble"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Aisha Nakibuule</h3>
                        <p class="fs-sm mb-0">TREASURER</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/joseph.jpg" class="rounded-3" alt="Jerome Bell">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Mr. Twine Joseph Muganga</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>


            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/faiza.jpg" class="rounded-3" alt="Jerome Bell">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Ms. Faizah Noordin Ayikoru</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>





            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/aisha-3.jpg" class="rounded-3">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Hajjat Aisha Nambooze</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>
            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/abdulrahman.jpg" class="rounded-3">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Mr. Abdulrahman</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>


            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/buwembo.jpg" class="rounded-3">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Mr. Buwembo Ali</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/kassim.jpg" class="rounded-3">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Mr. Kassim Kayira</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/taufiq.jpg" class="rounded-3">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Prof. Dr. Taufiq</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>


            <!-- Item -->
            <div class="col">
                <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                        <img src="assets/images/team/kayiira.jpg" class="rounded-3">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                            <div class="position-relative d-flex zindex-2">
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center p-3">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2">Ms. Kayiira</h3>
                        <p class="fs-sm mb-0">Executive Member</p>
                    </div>
                </div>
            </div>



        </div>
    </section>


    <!-- Contact CTA -->
    <section class="container my-2 my-md-5">
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
    </section>



    </main>
@endsection
