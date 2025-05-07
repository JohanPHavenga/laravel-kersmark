<x-base-layout>
    <section id="content">
        <div class="content-wrap py-0">
            <div id="section-notice" class="center">
                <img src="images/{{ __('content.kennisgewing_img') }}" alt="Uitsig Kersmark Kennisgewing" class="mx-auto d-block">
            </div>
            {{-- <div id="section-about" class="center">
                <div class="container clearfix">
                    <p>
                        <img src="images/Uitsig_Kersmark.jpg" alt="Uitsig Kersmark" class="mx-auto d-block" />
                    </p>
                    <h1 class="font-weight-bold font-body opm-medium-word" style="line-height: 1.3em">
                        {{ __('content.heading.h1') }}
                    </h1>

                    <h2 class="mx-auto bottommargin font-body"
                        style="
                                max-width: 700px;
                                font-size: 40px;
                                line-height: 1.2em;
                            ">
                        {{ __('content.heading.date') }}<br />
                        <span style="font-size: 0.8em;font-weight: normal;">{!! __('content.heading.time') !!}</span>
                    </h2>

                    <p class="lead mx-auto" style="max-width: 800px">
                        {!! __('content.heading.intro1') !!}</p>
                    <p class="lead mx-auto bottommargin" style="max-width: 800px">
                        {!! __('content.heading.intro2') !!}</p>

                    <!-- <p class="bottommargin" style="font-size: 16px">
                        <a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Vendor Application
                            <i class="icon-angle-right"></i></a>
                    </p> -->
                    <div class="clear"></div>
                </div>
            </div>

            <div id="section-contact" class="page-section pt-0" style="padding-bottom: 0">
                <div class="row mx-0 bottommargin-lg align-items-stretch">
                    <div class="col-lg-8 col-md-6 px-0">
                        <div class="gmap h-100">
                            <iframe frameborder="0" style="border: 0; height: 100%" src="https://www.google.com/maps/embed/v1/place?key={{ env('GOOGLE_API') }}" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="background-color: #f5f5f5">
                        <div class="col-padding">
                            <h3 class="font-body font-weight-normal ls1">
                                {{ __('content.contact.heading') }}
                            </h3>

                            <div
                                style="
                                        font-size: 16px;
                                        line-height: 1.7;
                                    ">
                                <address style="line-height: 1.7">{!! __('content.contact.address') !!}</address>

                                <div class="clear topmargin-sm"></div>

                                <abbr title="{{ __('content.contact.phone_title') }}"><strong>{{ __('content.contact.phone_text') }}:</strong></abbr>
                                <a href="tel:+27219194220">+27 (0)21 919 4220</a><br />
                                <abbr title="{{ __('content.contact.email_title') }}"><strong>{{ __('content.contact.email_text') }}:</strong></abbr>
                                <a href="mailto:kersmark@uitsigkerk.co.za">kersmark@uitsigkerk.co.za</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-vendor" class="page-section pt-0">
                <div class="container clearfix">
                    <h2 class="mx-auto bottommargin font-body center" style="max-width: 700px; font-size: 40px; line-height: 1.2em;">
                        {{ __('content.vendor.heading') }}
                    </h2>
                    <div class="col-mb-50">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ __('content.vendor.step1.heading') }}</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="accordion accordion-border clearfix" data-state="closed">
                                    @foreach (__('content.vendor.step1') as $key => $step)
                                        @if (is_array($step))
                                            <div class="accordion-header">
                                                <div class="accordion-icon">
                                                    <i class="accordion-closed icon-ok-circle"></i>
                                                    <i class="accordion-open icon-remove-circle"></i>
                                                </div>
                                                <div class="accordion-title">
                                                    {{ $step['heading'] }}
                                                </div>
                                            </div>
                                            <div class="accordion-content" style="display: none">
                                                {!! $step['text'] !!}
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ __('content.vendor.step2.heading') }}</h3>
                            </div>

                            <div class="col-md-12">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSd4dQftgGRBdPU7PZDFQ48Jx8ESnFu3-67eEwH6nQyX6_ZkjQ/viewform"
                                    class="button button-desc button-3d button-rounded button-default center">{!! __('content.vendor.step2.button_vendor_app') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

    </section>
</x-base-layout>
