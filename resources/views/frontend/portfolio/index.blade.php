@extends('frontend.layouts.master')
@section('title')
    Portfolio
@endsection
@section('header')
    <section class="module bg-dark-60 portfolio-page-header" data-background="/images//header/a5new.jpg"
        style="background-image: url(&quot;/images/a5new.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Portfolio Boxed</h2>
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
                <div class="col-sm-12">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="current wow fadeInUp" href="#" data-filter="*"
                                style="visibility: visible; animation-name: fadeInUp;">All</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Illustration</a>
                        </li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Marketing</a>
                        </li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Photography</a>
                        </li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Web Design</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="works-grid works-grid-gut works-grid-4 works-hover-w" id="works-grid"
                style="position: relative; height: 354.766px;">
                <li class="work-item illustration webdesign" style="position: absolute; left: 0px; top: 0px;"><a
                        href="portfolio_single_featured_image1.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio1.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Corporate Identity</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a></li>
                <li class="work-item marketing photography" style="position: absolute; left: 287px; top: 0px;"><a
                        href="portfolio_single_featured_image2.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio2.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Bag MockUp</h3>
                            <div class="work-descr">Marketing</div>
                        </div>
                    </a></li>
                <li class="work-item illustration photography" style="position: absolute; left: 575px; top: 0px;"><a
                        href="portfolio_single_featured_slider1.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio3.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Disk Cover</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a></li>
                <li class="work-item marketing photography" style="position: absolute; left: 862px; top: 0px;"><a
                        href="portfolio_single_featured_slider2.htmll">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio4.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Business Card</h3>
                            <div class="work-descr">Photography</div>
                        </div>
                    </a></li>
                <li class="work-item illustration webdesign" style="position: absolute; left: 0px; top: 177px;"><a
                        href="portfolio_single_featured_video1.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio5.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Web Design</h3>
                            <div class="work-descr">Webdesign</div>
                        </div>
                    </a></li>
                <li class="work-item marketing webdesign" style="position: absolute; left: 287px; top: 177px;"><a
                        href="portfolio_single_featured_video2.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio6.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Paper clip</h3>
                            <div class="work-descr">Marketing</div>
                        </div>
                    </a></li>
                <li class="work-item marketing webdesign" style="position: absolute; left: 575px; top: 177px;"><a
                        href="portfolio_single_featured_image1.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio7.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">New Product</h3>
                            <div class="work-descr">Marketing</div>
                        </div>
                    </a></li>
                <li class="work-item illustration webdesign" style="position: absolute; left: 862px; top: 177px;"><a
                        href="portfolio_single_featured_image2.html">
                        <div class="work-image"><img src="/frontend/assets/images/portfolio/grid-portfolio8.jpg"
                                alt="Portfolio Item"></div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Branding</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a></li>
            </ul>
        </div>
    </section>
@endsection
