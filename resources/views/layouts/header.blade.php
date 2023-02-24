<?php
use App\Models\PostCategory;
if (!isset($header_style)) {
    $header_style = 11;
}

?>

@if ($header_style == 1)
    <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
    @elseif($header_style == 2)
        <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
        @else
            <header class="header navbar navbar-expand-lg bg-light border-bottom border-light shadow-sm fixed-top">
@endif




<div class="container px-3">
    <a href="{{ url('/') }}" class="navbar-brand pe-3">
        <img src="assets/img/logo.png" width="50" alt="IUIUAA"> IUIUAA
    </a>
    <div id="navbarNav" class="offcanvas offcanvas-end">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">Home</a>
                </li>
 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About IUIUAA</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('about-us') }}" class="dropdown-item">About US</a>
                        </li>
                        <li>
                            <a href="{{ url('vision-mission') }}" class="dropdown-item">Our Vision & Mission</a>
                        </li>
                        <li>
                            <a href="{{ url('constitution') }}" class="dropdown-item">Our Constitution</a>
                        </li>
                        <li>
                            <a href="{{ url('our-team') }}" class="dropdown-item">Our team</a>
                        </li>
                        <li>
                            <a href="{{ url('chairperson-message') }}" class="dropdown-item">Chairperson's message</a>
                        </li>
                    </ul>
                </li>


                {{--         <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        aria-current="page">About IUIUAA</a>
                    <div class="dropdown-menu p-0">
                        <div class="d-lg-flex" style="height: 20rem">
                            <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0"
                                style="background-image: url(assets/img/landings.jpg); margin: -1px;"></div>
                            <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="javascript:;" class="dropdown-item">About us</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">Mission & Vision</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">What we do</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">Chairperson's message</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">Our team</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">Constitution</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
  --}}

                <li class="nav-item">
                    <a href="{{ url('our-team') }}" class="nav-link">Committee</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('members') }}" class="nav-link">Members</a>
                </li>



                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News</a>
                    <ul class="dropdown-menu">
                        @foreach (PostCategory::all() as $cat)
                            <li><a href="news-category" class="dropdown-item">{{ $cat->name }}</a></li>
                        @endforeach
                </li>
            </ul>
            </li>

            <style>
                .blink {
                    animation: blinking 1s linear infinite;
                    color: white;
                    border-radius: 2rem;
                    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
                    border: 3px dashed rgb(225, 225, 4);
                    padding: 3px;
                    font-weight: 800;
                }

                @keyframes blinking {

                    from,
                    49.9% {
                        background-color: rgb(178, 3, 3);
                    }

                    50%,
                    to {
                        background-color: green;
                    }
                }

                .blink:hover {
                    background-color: green;
                    color: white !important;
                }
            </style>

            <li class="nav-item">
                <a href="{{ url('dinner') }}" title="IUIU Alumni association grand 4th dinner - 2023"
                    class="nav-link blink">Dinner 2023</a>
            </li>



            </ul>
        </div>
        <div class="offcanvas-header border-top">

            @guest
                <a href="{{ admin_url() }}" class="btn btn-primary w-100" rel="noopener">
                    <i class="bx bx-cart fs-4 lh-1 me-1"></i> &nbsp;JOIN NOW
                </a>
            @endguest
            @auth
                <a href="{{ url('dashboard') }}" class="btn btn-primary w-100" rel="noopener">
                    <i class="bx bx-cart fs-4 lh-1 me-1"></i> &nbsp;MY DASHBOARD
                </a>
            @endauth

        </div>
    </div>
    <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
        <input type="checkbox" class="form-check-input" id="theme-mode">
        <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
        <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
    </div>
    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @guest
        <a href="{{ admin_url('') }}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex"
            rel="noopener">
            <i class="bx bx-user-plus fs-5 lh-1 me-1"></i> &nbsp;JOIN NOW
        </a>
    @endguest

    @auth
        <a href="{{ url('dashboard') }}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex"
            rel="noopener">
            <i class="bx bx-cart fs-5 lh-1 me-1"></i> &nbsp;MY DASHBOARD
        </a>

    @endauth

</div>
</header>
