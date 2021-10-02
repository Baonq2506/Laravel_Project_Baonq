@extends('frontend.layouts.master')
@section('title')
    Singer Portfolio
@endsection

@section('header')
    <section class="module bg-dark-60 portfolio-page-header"
        data-background="assets/images/portfolio/portfolio_header_bg.jpg"
        style="background-image: url(&quot;assets/images/portfolio/portfolio_header_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Portfolio Single</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like
                        these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image" /></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="work-details">
                        <h5 class="work-details-title font-alt">Project Details</h5>
                        <p>The languages only differ in their grammar, their pronunciation and their most common words.
                            Everyone realizes why a new common language would be desirable: one could refuse to pay
                            expensive translators.</p>
                        <ul>
                            <li><strong>Client: </strong><span class="font-serif"><a href="#"
                                        target="_blank">SomeCompany</a></span>
                            </li>
                            <li><strong>Date: </strong><span class="font-serif"><a href="#" target="_blank">23 November,
                                        2015</a></span>
                            </li>
                            <li><strong>Online: </strong><span class="font-serif"><a href="#"
                                        target="_blank">www.example.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module bg-dark-60 parallax-bg" data-background="assets/images/landing/why_choose_bg.png">
        <div class="container">
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-wallet"></span></div>
                        <h3 class="count-to font-alt" data-countto="6543"></h3>
                        <h5 class="count-title font-serif">Dollars raised for charity</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-wine"></span></div>
                        <h3 class="count-to font-alt" data-countto="8"></h3>
                        <h5 class="count-title font-serif">Cups of wine consumed</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-camera"></span></div>
                        <h3 class="count-to font-alt" data-countto="184"></h3>
                        <h5 class="count-title font-serif">Photographs taken</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-map-pin"></span></div>
                        <h3 class="count-to font-alt" data-countto="32"></h3>
                        <h5 class="count-title font-serif">Locations covered</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="font-alt mb-20">Skills for this project</h5><br>
                    <h6 class="font-alt"><span class="icon-tools-2"></span> Development
                    </h6>
                    <div class="progress">
                        <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"><span class="font-alt"></span></div>
                    </div>
                    <h6 class="font-alt"><span class="icon-strategy"></span> Branding
                    </h6>
                    <div class="progress">
                        <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"><span class="font-alt"></span></div>
                    </div>
                    <h6 class="font-alt"><span class="icon-target"></span> Marketing
                    </h6>
                    <div class="progress">
                        <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"><span class="font-alt"></span></div>
                    </div>
                    <h6 class="font-alt"><span class="icon-camera"></span> Photography
                    </h6>
                    <div class="progress">
                        <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"><span class="font-alt"></span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="alt-features-item mt-20">
                        <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                        <h3 class="alt-features-title font-alt">Development</h3>A wonderful serenity has taken possession of
                        my entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                        <h3 class="alt-features-title font-alt">Branding</h3>A wonderful serenity has taken possession of my
                        entire soul like these sweet mornings.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="alt-features-item mt-20">
                        <div class="alt-features-icon"><span class="icon-target"></span></div>
                        <h3 class="alt-features-title font-alt">Marketing</h3>A wonderful serenity has taken possession of
                        my entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-camera"></span></div>
                        <h3 class="alt-features-title font-alt">Photography</h3>A wonderful serenity has taken possession of
                        my entire soul like these sweet mornings.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Related Projects</h2>
                </div>
            </div>
            <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
                <li class="work-item illustration webdesign"><a href="portfolio_single_featured_slider1.html">
                        <div class="work-image"><img src="assets/images/portfolio/grid-portfolio1.jpg"
                                alt="Portfolio Item" /></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Corporate Identity</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a></li>
                <li class="work-item marketing webdesign"><a href="portfolio_single_featured_video1.html">
                        <div class="work-image"><img src="assets/images/portfolio/grid-portfolio6.jpg"
                                alt="Portfolio Item" /></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Paper clip</h3>
                            <div class="work-descr">Marketing</div>
                        </div>
                    </a></li>
                <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image1.html">
                        <div class="work-image"><img src="assets/images/portfolio/grid-portfolio8.jpg"
                                alt="Portfolio Item" /></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Branding</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a></li>
            </ul>
        </div>
    </section>
@endsection
