@extends('layouts.base-layout')
{{-- account-details --}}
@section('base-content')
    <?php
    $header_data['header_style'] = 2;
    ?>

    <body>
        <main class="page-wrapper">

            @include('layouts.header', $header_data)

            <!-- Page content -->
            <section class="position-relative h-100 pt-5 pb-4">

                <!-- Sign in form -->
                <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
                    <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
                        <h1 class="text-center text-xl-start">Welcome Back
                        </h1>
                        <p class="text-center text-xl-start pb-3 mb-3">Don’t have an account yet?<a href="register">Sign in
                                here.</a></p>
                        <form class="needs-validation" method="POST" action="{{ admin_url('auth/login') }}" novalidate>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">


                                <div class="col-12 mb-3">

                                    @include('components.input-text', [
                                        'name' => 'email',
                                        'label' => 'Email',
                                    ])

                                </div>
                                <div class="col-12 mb-4">

                                    @include('components.input-text', [
                                        'name' => 'password',
                                        'type' => 'password',
                                        'label' => 'Password',
                                    ])
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input type="checkbox" id="terms" class="form-check-input">
                                    <label for="terms" class="form-check-label fs-base">Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Sign in</button>
                        </form>

                    </div>
                    <div class="w-100 align-self-end">
                        <p class="nav d-block  text-center text-md-start pb-2 pb-lg-0 mb-0">
                            Hand-made with ❤️ by
                            <a class="nav-link d-inline-block p-0" href="https://twitter.com/mubahood360"
                                target="_blank" rel="noopener">M. Muhindo 🥰</a>
                        </p>
                    </div>
                </div>

                <!-- Background -->
                <div class="position-absolute top-0 end-0 w-50 h-100 bg-position-center bg-repeat-0 bg-size-cover d-none d-xl-block"
                    style="background-image: url(assets/img/account/signin-bg.jpg);"></div>
            </section>
        </main>
    @endsection
