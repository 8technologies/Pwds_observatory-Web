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

                    <!-- Text -->
                    <h1 class="pb-2 pb-md-3">About IUIU Alumni Association</h1>
                    <p class="fs-xl pb-4 mb-1 mb-md-2 mb-lg-3" style="max-width: 526px;">


                        The Islamic university in Uganda Alumni Association(IUIU-AA) founded is an association of graduates
                        of IUIU. <br><br>

                        The organization seeks to create a platform for discussion and offering of practical solutions that
                        benefit the members and our great university.<br><br>

                        Further more, to promote fellowship among IUIU graduates, to assist members to develop careers that
                        use their abilities and education and to maintain a database of skills that can be furnished to suit
                        both domestic and international users. <br><br>

                        As the network that brings all IUIU old students together under one umbrella, we look forward to
                        promoting the interests, welfare and educational aims of IUIU and its alumni, and encourage lifelong
                        engagement of alumni with their fellow alumni and the university community.
                    </p>
                    <h2 class="  mb-2 h4">Registered Members with IUIU-AA</h2>
                    <div class="row row-cols-4   ">
                        <div class="col">
                            <h3 class="h2 mb-2 text-primary">480</h3>
                            <p class="mb-0"><strong>Kampala</strong> campus</p>
                        </div>
                        <div class="col">
                            <h3 class="h2 mb-2 text-primary">760</h3>
                            <p class="mb-0 "><strong>Mbale</strong> campus</p>
                        </div>
                        <div class="col">
                            <h3 class="h2 mb-2 text-primary">200</h3>
                            <p class="mb-0"><strong>Female</strong> campus - Kaboja</p>
                        </div>
                        <div class="col">
                            <h3 class="h2 mb-2 text-primary">120</h3>
                            <p class="mb-0"><strong>Arua</strong> campus</p>
                        </div>
                    </div>
                </div>

                <!-- Images -->
                <div class="col-lg-6 mt-xl-3 pt-5 pt-lg-4">
                    <div class="row row-cols-2 gx-3 gx-lg-4">
                        <div class="col pt-lg-5 mt-lg-1">
                            <img src="assets/images/group/1.jpg" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
                            <img src="assets/images/group/2.jpg" class="d-block rounded-3" alt="Image">
                            <img src="assets/images/group/7.jpg" class="d-block rounded-3 mt-4" alt="Image">
                            <img src="assets/images/group/8.jpg" class="d-block rounded-3 mt-4" alt="Image">
                        </div>
                        <div class="col">
                            <img src="assets/images/group/10.jpg" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
                            <img src="assets/images/group/4.jpg" class="d-block rounded-3" alt="Image">
                            <img src="assets/images/group/5.jpg" class="d-block rounded-3 mt-4" alt="Image">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Benefits (features) -->
    <div class="container mt-3 mb-5 pt-lg-5 bg-secondary rounded my-3 my-md-5" id="benefits">
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
            <div class="swiper-wrapper pt-4">

                <!-- Item -->
                <div class="swiper-slide border-end-lg px-2">
                    <div class="text-center">
                        <img src="assets/img/landing/digital-agency/icons/idea.svg" width="48" alt="Bulb icon"
                            class="d-block mb-4 mx-auto">
                        <h4 class="mb-2 pb-1">Our Vision</h4>
                        <p class="mx-auto" style="max-width: 336px;">Unity and Development.<br><br><br><br></p>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide border-end-lg px-2">
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
                        <p class="mx-auto" style="max-width: 336px;">Integrity, Diversity, Creativity & coexistence.</p>
                    </div>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
    </div>

    <!-- Video showreel -->
    <section class="container text-center pb-5 mt-n2 mt-md-0 mb-md-2 mb-lg-4">
        <div class="position-relative rounded-3 overflow-hidden mb-lg-3">
            <div
                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
                <a href="../external.html?link=https://youtu.be/yGxEamdlHB4"
                    class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video">
                    <i class="bx bx-play"></i>
                </a>
            </div>
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
            <img src="assets/images/iuiuaa.jpg" alt="Cover image">
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



    <section class="container py-5 my-md-3 ">
        <h2 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4">IUIU ALUMNI ASSOCIATION Frequently Asked Questions</h2>
        <div class="  fs-xl">


            <h3>What is the IUIU Alumni Association (IUIUAA)?</h3>

            <p>IUIU-AA is the umbrella organisation that seeks to bring together all the people that went through and
                completed
                at least a course of study at Islamic University In Uganda. The idea of re-establishing this association
                (this
                is the second effort) was mooted at the beginning of the Coronavirus pandemic outbreak as a way to reach out
                to
                our colleagues and see how best we support each other through the crisis, as well as find a way to support
                our
                dear University that، in large part, made us who we are individually and collectively.</p>

            <h3>IUIUAA Leadership?</h3>

            <p>At the start of the pandemic, it was not possible to call a physical meeting to elect leaders. We had a
                series
                of virtual meetings which culminated into a general membership that elected an interim leadership with a
                clear
                mandate to remobilise the members, write up a constitution, register the Association with Uganda government
                authorities, open bank accounts and establish the association website (iuiuaa.org;), Twitter (@iuiu_alumni),
                Facebook, etc. Most of these have so far been achieved, and available on request. The leadership is
                supported by
                an IUIU Alumni Administrator who was being paid for by the Association. The leadership meets once a month
                virtually.</p>

            <h3>IUIU alumni Association Independence.</h3>

            <p>IUIU-AA is an independent body but works collaboratively with other stake holders including IUIU
                administration
                to achieve its objectives. To IUIU Administration credit, they have been extremely supportive and we have
                held a
                series of meetings with them to inform them of our presence and objectives. They currently offer us an
                office
                space at IUIU Liaison Office, King Fahd Plaza, where our IUIU Alumni Administrator is based.</p>

            <h3>Mobilisation</h3>


            <p>We are doing our best to mobilise our membership via WhatsApp, Twitter, Facebook and all other media outlets.
                We
                ask that all members forward our leaflets and literature/messages to all individual WhatsApp or Facebook
                groups
                and contacts etc.</p>


            <h3>IUIU Alumni Day.</h3>

            <p> When we met with IUIU Administration in June 2021, we asked for a Day to be recognised in IUIU Calendar and
                so
                they agreed that 10th February (which is the Day of IUIU’s founding) will now be established as IUIU Alumni
                Day
                annually and they agreed for us to plan our activities as/how/when we want them.</p>

            <h3>The Dinner.</h3>

            <p> The idea of the dinner was mooted as part of our efforts at mobilising our general membership for purposes
                already mentioned. The IUIU Alumni Executive appoints an organising committee to plan and execute this and
                this
                committee meets regularly for this purpose.</p>

            <p>10/02 this year fell on a Thursday and so we thought it best to move the dinner to a Saturday to accommodate
                people who might otherwise be busy during the week. However, we had a series of activities during the entire
                week beginning 7/2/2022, which culminated into the grand dinner on Saturday 12/02/2022 at Hotel Africana. We
                also launched a Scholarship Fund and currently has two students sponsored at IUIU. We are grateful to all
                who
                contribute to this Fund and we appeal to all of you to join this effort. Contributions can be deposited on
                our
                account with DFCU.</p>

            <h3>Date/Venue of the Dinner for Feb 2023.</h3>

            <p>The Organising Committe which was appointed and is led by Chairman Adnan Kawoya deliberated at length about
                venue with suggestions about using either a hotel environment or our own IUIU campuses. The modalities and
                complexities of travel, etc were discussed and members agreed on IUIU Female Campus, Kabojja as a more
                acceptable venue in view of planned launch of Hostel Construction as part of the activities for this Dinner.
                This will be our Project as IUIU Alumni and we are grateful to IUIU Administration who have offered us land
                at
                Kabojja to construct this hostel.</p>

            <h3>Cost of dinner.</h3>

            <p>The Organising Committee has agreed to 4 categories of tickets, details are already published. As executive,
                we
                urge all of you to buy as many tickets as you can. Even those in Diaspora who may not attend the dinner,
                buying
                the ticket will help with both organisation of dinner and also as part of the Fundraising effort for the
                Hostel
                Project.</p>

            <h3>Activities planned.</h3>

            <p>Building on modest successes for last dinner, we plan to have a series of activities we are planning for this
                Day and for the entire week. Some of the activities we plan include the Medical Camp in which our colleagues
                from the Habib Medical Foundation will showcase their work as well as provide medical services for both the
                occasion and to the public such as medical consultation and check-ups including blood glucose monitoring,
                blood
                pressure monitoring, blood testing, public health promotion, etc. We also plan career guidance activities,
                tree
                planting (in partnership with National Forests Authority) etc. As already mentioned, we will also launch our
                IUIU Alumni Investment Club and Female Hostel Construction at IUIU Kabojja Campus.</p>

            <h3>Guests.</h3>

            <p>The Organising Committee will in due course confirm Guest of Honour and Keynote Speaker. We will also have
                other
                distinguished speeches from our own, details to follow.</p>


            <p>I hope I have answered questions about who were and our mission. Kindly buy the tickets to support what we
                were
                doing. If unable to attend or to buy, please do not discourage others; in the end it will be for the
                betterment
                of our membership if we manage to mobilise ourselves fully.</p>

            <p>
                <b>Mr. Mousa S Kato,</b><br>
                <b>Executive Secretary, IUIU Alumni Association</b>
            </p>
        </div>
    </section>



    <!-- Contact CTA -->
    <section class="container mt-n2">
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


    <!-- Social networks (Carousel on narrow screens) -->
    <section class="container text-center py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 mb-4">We Have Social Networks</h2>
        <p class="fs-lg text-muted pb-2 mb-5">Follow us and keep up to date with the freshest news!</p>
        <div class="swiper"
            data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3
            },
            "650": {
              "slidesPerView": 4
            },
            "900": {
              "slidesPerView": 5
            },
            "1100": {
              "slidesPerView": 6
            }
          }
        }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">

                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Facebook</h6>
                            <p class="fs-sm text-muted mb-0">iuiuaa</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a href="#" class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link">
                            <i class="bx bxl-instagram"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Instagram</h6>
                            <p class="fs-sm text-muted mb-0">@iuiuaa</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center border-end mx-n1">
                        <a target="_blank" href="https://twitter.com/iuiu_alumni"
                            class="btn btn-icon btn-secondary btn-twitter btn-lg stretched-link">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">Twitter</h6>
                            <p class="fs-sm text-muted mb-0">@iuiuaa</p>
                        </div>
                    </div>
                </div>



                <!-- Item -->
                <div class="swiper-slide">
                    <div class="position-relative text-center mx-n1">
                        <a target="_blank" href="https://www.youtube.com/channel/UCkykO2raYBAmss28fwnnu1w"
                            class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link">
                            <i class="bx bxl-youtube"></i>
                        </a>
                        <div class="pt-4">
                            <h6 class="mb-1">YouTube</h6>
                            <p class="fs-sm text-muted mb-0">iuiuaa</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative bottom-0 pt-3 mt-4"></div>
        </div>
    </section>
    </main>
@endsection
