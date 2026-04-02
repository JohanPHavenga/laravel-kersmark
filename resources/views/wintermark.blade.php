<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Uitsig Wintermark</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @vite(['resources/css/app.css', 'resources/css/bootstrap.css', 'resources/css/style.css', 'resources/css/onepage.css', 'resources/css/font-icons.css', 'resources/css/custom.css', 'resources/js/app.js'])

    <style>
        /* Wintermark colour scheme — warm earthy tones */
        :root {
            --wm-primary:   #4a2010;
            --wm-secondary: #8b5c3a;
            --wm-accent:    #f2d5b8;
            --wm-bg-light:  #fdf3e8;
            --wm-white:     #ffffff;
        }

        #wm-header #header-wrap {
            background-color: var(--wm-primary) !important;
        }

        #wm-header .menu-link div,
        #wm-header .menu-link:hover div {
            color: var(--wm-accent) !important;
        }

        #wm-header .menu-link:hover div {
            color: var(--wm-white) !important;
        }

        #wm-hero {
            background-color: var(--wm-bg-light);
            padding: 60px 0 50px;
        }

        #wm-hero h1 {
            color: var(--wm-primary);
        }

        #wm-hero h2 {
            color: var(--wm-secondary);
        }

        #wm-vendor {
            background-color: var(--wm-white);
            padding: 60px 0;
        }

        #wm-vendor h2 {
            color: var(--wm-primary);
        }

        #wm-vendor h3 {
            color: var(--wm-secondary);
        }

        #wm-vendor ol li {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .wm-contact-panel {
            background-color: var(--wm-primary);
            color: var(--wm-white);
        }

        .wm-contact-panel h3,
        .wm-contact-panel a {
            color: var(--wm-accent);
        }

        .wm-contact-panel address {
            color: var(--wm-white);
        }

        .wm-divider {
            border-top: 3px solid var(--wm-secondary);
            max-width: 80px;
            margin: 20px auto 30px;
        }

        .wm-btn {
            background-color: var(--wm-secondary);
            color: var(--wm-white) !important;
            border-radius: 30px;
            padding: 12px 28px;
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.2s;
        }

        .wm-btn:hover {
            background-color: var(--wm-primary);
            color: var(--wm-white) !important;
            text-decoration: none;
        }

        #wm-footer {
            background-color: var(--wm-primary);
            color: var(--wm-accent);
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
        }

        #wm-footer a {
            color: var(--wm-accent);
        }
    </style>
</head>

<body class="stretched">
    <!-- Document Wrapper -->
    <div id="wrapper" class="clearfix">

        <!-- Header -->
        <header id="wm-header" id="header" class="full-header border-full-header header-size-custom" data-sticky-shrink="false" data-sticky-offset="full" data-sticky-offset-negative="100">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="#wrapper" class="standard-logo">
                                <img src="{{ url('images/wintermark-logo-whitebg.png') }}" alt="Uitsig Wintermark" style="max-height: 60px;" />
                            </a>
                            <a href="#wrapper" class="retina-logo">
                                <img src="{{ url('images/wintermark-logo-whitebg.png') }}" alt="Uitsig Wintermark" style="max-height: 60px;" />
                            </a>
                        </div>

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
                                        <div>{{ __('wintermark.menu.home') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#wm-vendor">
                                        <div>{{ __('wintermark.menu.vendor_application') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#wm-contact">
                                        <div>{{ __('wintermark.menu.contact') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/') }}" class="menu-link">
                                        <div>{{ __('wintermark.menu.kersmark') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="button button-3d button-rounded button-dirtygreen" style="padding: 8px 15px;"
                                        href="{{ LaravelLocalization::getCurrentLocale() === 'af' ? url('en/wintermark') : url('af/wintermark') }}" class="menu-link">
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
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        <!-- #header end -->

        <!-- Page Content -->
        <main>
            <section id="content">
                <div class="content-wrap py-0">

                    <!-- Hero / About -->
                    <div id="wm-hero" class="center">
                        <div class="container clearfix">
                            <p>
                                <img src="{{ url('images/wintermark-logo-removebg.png') }}" alt="Uitsig Wintermark" class="mx-auto d-block" style="max-width: 400px; width: 100%;" />
                            </p>

                            <h1 class="font-weight-bold font-body" style="line-height: 1.3em; margin-top: 20px;">
                                {{ __('wintermark.heading.h1') }}
                            </h1>

                            <div class="wm-divider"></div>

                            <h2 class="mx-auto bottommargin font-body" style="max-width: 700px; font-size: 36px; line-height: 1.3em;">
                                {{ __('wintermark.heading.date') }}
                            </h2>

                            <p class="lead mx-auto bottommargin" style="max-width: 800px;">
                                {{ __('wintermark.heading.intro1') }}
                            </p>

                            <p class="lead mx-auto bottommargin" style="max-width: 800px; font-weight: bold;">
                                {!! __('wintermark.heading.intro2') !!}
                            </p>
                        </div>
                    </div>
                    <!-- #wm-hero end -->

                    <!-- Contact -->
                    <div id="wm-contact" class="page-section pt-0" style="padding-bottom: 0;">
                        <div class="row mx-0 bottommargin-lg align-items-stretch">
                            <div class="col-lg-8 col-md-6 px-0">
                                <div class="gmap h-100">
                                    <iframe
                                        frameborder="0"
                                        style="border: 0; height: 100%; min-height: 300px; width: 100%;"
                                        src="https://www.google.com/maps/embed/v1/place?key={{ env('GOOGLE_API') }}&q=NG+Church+Bellville-Uitsig,Bellville,South+Africa"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wm-contact-panel">
                                <div class="col-padding">
                                    <h3 class="font-body font-weight-normal ls1">{{ __('wintermark.contact.heading') }}</h3>

                                    <div style="font-size: 16px; line-height: 1.7;">
                                        <address style="line-height: 1.7; color: #fff;">
                                            {!! __('wintermark.contact.address') !!}
                                        </address>

                                        <div class="clear topmargin-sm"></div>

                                        <abbr title="WhatsApp"><strong style="color: var(--wm-accent);">WhatsApp:</strong></abbr>
                                        <a href="https://wa.me/+27637212584">+27 (0)63 721 2584</a><br />
                                        <abbr title="{{ __('wintermark.contact.phone_title') }}"><strong style="color: var(--wm-accent);">{{ __('wintermark.contact.phone_text') }}:</strong></abbr>
                                        <a href="tel:+27637212584">063 721 2584</a><br />
                                        <abbr title="{{ __('wintermark.contact.email_title') }}"><strong style="color: var(--wm-accent);">{{ __('wintermark.contact.email_text') }}:</strong></abbr>
                                        <a href="mailto:kersmark@uitsigkerk.co.za">kersmark@uitsigkerk.co.za</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #wm-contact end -->

                    <!-- Vendor Application -->
                    <div id="wm-vendor" class="page-section">
                        <div class="container clearfix">

                            <h2 class="mx-auto bottommargin font-body center" style="max-width: 700px; font-size: 38px; line-height: 1.2em;">
                                {{ __('wintermark.vendor.heading') }}
                            </h2>
                            <div class="wm-divider"></div>

                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <h3 class="mb-3">{{ __('wintermark.vendor.step_heading') }}</h3>
                                    <p style="font-size: 16px;">{{ __('wintermark.vendor.step_intro') }}</p>

                                    <h5 class="mt-4 mb-3" style="color: var(--wm-primary); font-weight: 600;">{{ __('wintermark.vendor.guide_title') }}</h5>
                                    <ol>
                                        @foreach (__('wintermark.vendor.steps') as $step)
                                            <li>{!! $step !!}</li>
                                        @endforeach
                                    </ol>

                                    <a href="https://ecrafter.co.za/" target="_blank" rel="noopener noreferrer" class="wm-btn">
                                        {{ __('wintermark.vendor.button') }} &nbsp;<i class="icon-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- #wm-vendor end -->

                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer id="wm-footer">
            <div class="container center clearfix">
                Copyrights &copy; <?= date('Y') ?> NG Kerk Uitsig Gemeente &nbsp;|&nbsp; All Rights Reserved
            </div>
        </footer>

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/plugins.min.js') }}"></script>

    <!-- Footer Scripts -->
    <script src="{{ url('js/functions.js') }}"></script>
</body>

</html>
