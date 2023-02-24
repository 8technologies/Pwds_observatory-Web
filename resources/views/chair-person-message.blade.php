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
        <div class="container position-relative zindex-5 pt-5 ">
            <div class="row">
                <div class="col-lg-6">

                    <!-- Breadcrumb -->
                    <nav class="pt-md-2 pt-lg-3 pb-0 pb-md-5 mb-xl-4 " aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('about-us') }}">About us</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Chair person message</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <div class="row  justify-content-center mb-4 mb-md-5">

                <div class="col-lg-8 lead">
                    <h1>Chairperson's message</h1>
                    <p>It is my distinct honour and privilege to welcome you to the IUIU Alumni Association website.</p>
                    <p>If you are a graduate of IUIU and you are yet to become a member of this Association, I earnestly
                        invite you to do so - it's easy and inexpensive.</p>
                    <p>Membership enables you to reconnect with your former classmates, meet up with other graduates during
                        such events as the Annual Alumni Grand Dinners and to enjoy many other benefits, as you will
                        soon find out from this website.</p>
                    <p>Take advantage of our potential resources for mentorship, resume help, networking and interviewing
                        tips, assistance with job searching and applying for graduate or professional school programs to
                        mention
                        but a few.</p>
                    <p>Membership also affords you the opportunity to give back to our alma mater and to support its
                        advancement.</p>
                    <blockquote>Be <b>“Proud to be an IUIU Graduate!”</b></blockquote>
                    <p> - <b>Abdunur M. Sekindi</b></p>
                    <p> <b>Chairperson IUIU Alumni Association</b></p>
                </div>
            </div>
        </div>
    </section>
@endsection
