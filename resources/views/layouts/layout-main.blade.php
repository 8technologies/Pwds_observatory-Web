@extends('layouts.base-layout')

@section('base-content')
    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


        @include('layouts.header')


        @yield('main-content')



    </main>


    <!-- Brands (carousel on screens < 1100px) -->
    <section class="container p-0 mt-md-2  ">
        <div class="swiper pt-2 mx-n2"
            data-swiper-options='{
                  "slidesPerView": 2,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "breakpoints": {
                    "500": {
                      "slidesPerView": 3,
                      "spaceBetween": 8
                    },
                    "650": {
                      "slidesPerView": 4,
                      "spaceBetween": 8
                    },
                    "900": {
                      "slidesPerView": 5,
                      "spaceBetween": 8
                    },
                    "1100": {
                      "slidesPerView": 6,
                      "spaceBetween": 8
                    }
                  }
                }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 mt-4"></div>
        </div>
    </section>





    <!-- Footer -->
    <footer class="footer bg-secondary pt-5 pb-4 pb-lg-5 border-top border-primary border-5">
        <div class="container pt-lg-4">
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                        <img src="assets/img/logo.png" width="150" alt="IUIUAA">
                        IUIUAA
                    </div>
                    <p class="fs-sm pb-lg-3 mb-4 lead">
                        <b class="text-dark">Islamic University in Uganda Alumni Association Mission </b> is to create
                        fellowship among IUIU Alumni under one umbrella and offer practical solutions that benefit members
                        and the Alma mater through rigorous networking
                    </p>
                    <form class="needs-validation" novalidate>
                        <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
                        <div class="input-group">
                            <input type="email" id="subscr-email" class="form-control rounded-start ps-5"
                                placeholder="Your email" required>
                            <i
                                class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                            <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email
                                address.</div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                    <div id="footer-links" class="row">
                        <div class="col-lg-4">
                            <h6 class="mb-2">
                                <a href="#useful-links" class="d-block text-primary h5 dropdown-toggle  py-0  "
                                    data-bs-toggle="collapse">Quick Links</a>
                            </h6>
                            <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                    <li class="nav-item"><a href="{{ url('') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                                    <li class="nav-item"><a href="{{ url('about-us') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">About IUIUAA</a></li>
                                    <li class="nav-item"><a href="{{ url('vision-mission') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Our Mission & Vision</a></li>
                                    <li class="nav-item"><a href="{{ url('constitution') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Constitution</a></li>
                                    <li class="nav-item"><a href="{{ url('our-team') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Our team</a></li>
                                </ul>
                                <ul class="nav flex-column mb-2 mb-lg-0">
                                    <h6 class="mb-2">More</h6>
                                    <li class="nav-item"><a href="{{ url('news') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">News</a></li>
                                    <li class="nav-item"><a href="{{ url('members') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">IUIU AA Members</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <h6 class="mb-2">
                                <a href="#social-links" class="d-block  dropdown-toggle  py-0 text-primary h5"
                                    data-bs-toggle="collapse">IUIU AA</a>
                            </h6>
                            <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column mb-2 mb-lg-0">
                                    <li class="nav-item"><a href="{{ admin_url('') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Register</a></li>
                                    <li class="nav-item"><a href="{{ admin_url('') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Login</a></li>
                                    <li class="nav-item"><a href="{{ url('dinner') }}"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">4th Grand dinner</a></li>

                                    <h6 class="mb-2 mt-3 text-primary h5 ">Our social media</h6>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                            <h6 class="mb-2 text-primary h5">Useful links</h6>
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="https://www.iuiu.ac.ug/" target="_blank"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">IUIU Website</a></li>

                                <li class="nav-item"><a href="https://www.oic-oci.org/" target="_blank"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">OIC Website</a></li>

                                <li class="nav-item"><a href="https://www.education.go.ug/" target="_blank"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Ugadna ministry of education
                                        website</a></li>
                            </ul>
                            <a href="mailto:info@iuiuaa.org" class="fw-medium">info@iuiuaa.org</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav d-block  text-center text-md-start pb-2 pb-lg-0 mb-0">
                Hand-made with ❤️ from
                <a class="nav-link d-inline-block p-0" href="https://twitter.com/8TechConsults" target="_blank"
                    rel="noopener">8Technologies 🥰</a>
            </p>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>
@endsection
