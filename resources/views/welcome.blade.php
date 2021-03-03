<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Volt - Free Bootstrap 5 Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt - Free Bootstrap 5 Admin Dashboard">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt-pro">
<meta property="og:title" content="Volt - Free Bootstrap 5 Admin Dashboard">
<meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
<meta property="twitter:title" content="Volt - Free Bootstrap 5 Admin Dashboard">
<meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="./assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">


<!-- Volt CSS -->
<link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary pt-4 navbar-dark">
        <div class="container position-relative">
            <div class="navbar-collapse collapse me-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html">
                                <img src="{{ asset('img/brand/light.svg') }}" alt="Volt logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item me-2">
                        <a href="home" class="nav-link">Dashboard</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Welcome {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
    <main>

        <!-- Hero -->
        <section class="section-header overflow-hidden pt-7 pt-lg-8 pb-9 pb-lg-12 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bootstrap-big-icon d-none d-lg-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="700" height="622" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                        </div>
                        <h1 class="fw-bolder">Volt Bootstrap 5 Dashboard</h1>
                        <h2 class="lead fw-normal text-muted mb-5">Open source dashboard powered by Bootstrap 5</h2>
                        <!-- Button Modal -->
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <a href="./pages/dashboard/dashboard.html" class="btn btn-secondary text-dark me-4"><span class="fas fa-chart-line me-2 d-none d-sm-inline"></span> Dashboard Demo</a>
                            <div class="mb-lg-0 mt-1">
                                <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center flex-column mb-6 mb-lg-5">
                            <a href="https://themesberg.com" target="_blank">
                                <img src="./assets/img/themesberg.svg" class="d-block mx-auto mb-3" height="25" width="25" alt="Themesberg Logo">
                                <span class="text-muted font-small">A Themesberg production</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4"><path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path></svg></figure>       
        </section>
    </main>
    <footer class="footer py-6 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="navbar-brand-dark mb-4" height="35" src="./assets/img/brand/light.svg" alt="Logo light">
                <p>Volt is a Premium Bootstrap 5 Admin Dashboard bringing together beautiful UI/UX design and functional elements.</p>
                <ul class="social-buttons mb-5 mb-lg-0">
                    <li>
                        <a href="https://twitter.com/themesberg" aria-label="twitter social link" class="icon-white me-2">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/themesberg/" class="icon-white me-2" aria-label="facebook social link">
                            <span class="fab fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/themesberg" aria-label="github social link" class="icon-white me-2">
                            <span class="fab fa-github"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://dribbble.com/themesberg" class="icon-white" aria-label="dribbble social link" >
                            <span class="fab fa-dribbble"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">Themesberg</span>
                <ul class="links-vertical mt-2">
                    <li><a target="_blank" href="https://themesberg.com/blog">Blog</a></li>
                    <li><a target="_blank" href="https://themesberg.com/products">Products</a></li>
                    <li><a target="_blank" href="https://themesberg.com/about">About Us</a></li>
                    <li><a target="_blank" href="https://themesberg.com/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">Other</span>
                <ul class="links-vertical mt-2">
                    <li><a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank">Docs
                            <span class="badge badge-sm bg-secondary text-dark ms-2">v1.3</span></a></li>
                    <li><a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/changelog/" target="_blank">Changelog</a></li>
                    <li><a target="_blank" href="https://themesberg.com/licensing">License</a>
                    </li>
                    <li><a target="_blank" href="https://themesberg.com/contact">Support</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                <span class="h5 mb-3 d-block">Subscribe</span>
                <form action="#">
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" required>
                        </div>
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-secondary" data-loading-text="Sending">
                                <span>Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-muted font-small m-0">We’ll never share your details. See our <a class="text-white" href="#">Privacy Policy</a></p>
            </div>
        </div>
        <hr class="bg-gray-700 my-5">
        <div class="row">
            <div class="col mb-md-0">
                <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                    <img src="./assets/img/themesberg-logo-alt.svg" height="35" class="mb-4" alt="Themesberg Logo">
                </a>
            <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                <p class="fw-normal font-small mb-0">Copyright © Themesberg 2019-<span class="current-year">2021</span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Core -->
<script src="./vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="./vendor/chartist/dist/chartist.min.js"></script>
<script src="./vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="./vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="./vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="./vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="./vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="./vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{ asset('/js/volt.js') }}"></script>

</body>

</html>