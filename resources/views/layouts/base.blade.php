<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Uitsig Kersmark') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/bootstrap.css', 'resources/css/style.css', 'resources/css/onepage.css', 'resources/css/font-icons.css', 'resources/css/custom.css', 'resources/js/app.js'])
</head>

<body class="stretched">
    <!-- Document Wrapper -->
    <div id="wrapper" class="clearfix">
        <!-- Page Heading -->
        <header id="header" class="full-header border-full-header header-size-custom" data-sticky-shrink="false" data-sticky-class="not-dark" data-sticky-offset="full"
            data-sticky-offset-negative="100">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="#" class="standard-logo" data-href="#wrapper" data-dark-logo="images/Uitsig_Kersmark.jpg"><img src="images/Uitsig_Kersmark.jpg"
                                    alt="Uitsig Kersmark" /></a>
                            <a href="#" class="retina-logo" data-href="#wrapper" data-dark-logo="images/Uitsig_Kersmark.jpg"><img src="images/Uitsig_Kersmark.jpg"
                                    alt="Uitsig Kersmark" /></a>
                        </div>
                        <!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                            </svg>
                        </div>

                        <!-- Primary Navigation -->
                        <nav class="primary-menu">
                            <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#wrapper">
                                        <div>{{ __('content.menu.home') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-vendor">
                                        <div>{{ __('content.menu.vendor_application') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-contact">
                                        <div>{{ __('content.menu.contact') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="button button-3d button-rounded button-dirtygreen" style="padding: 8px 15px;"
                                        href="{{ LaravelLocalization::getCurrentLocale() === 'af' ? url('en') : url('af') }}" class="menu-link">
                                        <div>
                                            @if (LaravelLocalization::getCurrentLocale() == 'af')
                                                EN
                                            @else
                                                AF
                                            @endif
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- #primary-menu end -->
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="dark border-0">
            <div id="copyrights">
                <div class="container center clearfix">
                    Copyrights &copy; <?= date('Y') ?> NG Kerk Uitsig Gemeente | All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- #footer end -->
    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/plugins.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAf9RjGBfasEEV3Dg8YVkBpVA1VgmebarU"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ url('js/functions.js') }}"></script>
</body>

</html>
