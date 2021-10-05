@extends('frontend.layouts.master')
@section('title')
    Header
@endsection
@section('style')
    <style>
        .work-image img {
            width: 443.36px;
            height: 300px;
        }

    </style>
@endsection
@section('header')
    <section class="home-section bg-dark bg-dark" id="home" data-background="/images/header/a3.jpg"
        style="height: 425.85px; background-image: url(&quot;/images/a3.jpg&quot;);">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
                <div class="font-alt mb-40 titan-title-size-4">Dracula Castel</div><a
                    class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
            </div>
        </div>
    </section>
@endsection
@section('main')
    <section class="module" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="module-title font-alt">Welcome to Dracula Castel</h2>
                    <div class="module-subtitle font-serif large-text">Instead of sticking to the thought that you have to
                        have a beautiful death, die painlessly and go to heaven, why not live beautifully until you die?
                        Heaven or hell, after all, is just a human belief, the important thing is how we live now so that
                        when we die, we have no regrets, regrets, and suffering.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5">
                    <div class="large-text align-center"><a class="section-scroll" href="#services"><i
                                class="fa fa-angle-down"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Our Services</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lightbulb"></span></div>
                        <h3 class="features-title font-alt">Ideas and concepts</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-bike"></span></div>
                        <h3 class="features-title font-alt">Optimised for speed</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-tools"></span></div>
                        <h3 class="features-title font-alt">Designs &amp; interfaces</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-gears"></span></div>
                        <h3 class="features-title font-alt">Highly customizable</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-tools-2"></span></div>
                        <h3 class="features-title font-alt">Coding &amp; development</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-genius"></span></div>
                        <h3 class="features-title font-alt">Features &amp; plugins</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-mobile"></span></div>
                        <h3 class="features-title font-alt">Responsive design</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lifesaver"></span></div>
                        <h3 class="features-title font-alt">Dedicated support</h3>
                        <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for
                            all your visitors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module bg-dark-60" data-background="/images/portfolio/01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="video-box">
                        <div class="video-box-icon"><a class="video-pop-up"
                                href="https://www.youtube.com/watch?v=TTxZj3DZiIM"><span class="icon-video"></span></a>
                        </div>
                        <div class="video-title font-alt">Presentation</div>
                        <div class="video-subtitle font-alt">Watch the video about our new products</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module pb-0" id="works">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Our Works</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".illustration"
                                data-wow-delay="0.2s">Illustration</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Marketing</a>
                        </li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".photography"
                                data-wow-delay="0.6s">Photography</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
            <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="/images/portfolio/01.jpg" alt="Portfolio Item" /></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Corporate Identity</h3>
                        <div class="work-descr">Illustration</div>
                    </div>
                </a></li>
            <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="/images/portfolio/2.jpeg" alt="Portfolio Item" /></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Bag MockUp</h3>
                        <div class="work-descr">Marketing</div>
                    </div>
                </a></li>
            <li class="work-item illustration photography"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="/images/portfolio/3.jpeg" alt="Portfolio Item" /></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Disk Cover</h3>
                        <div class="work-descr">Illustration</div>
                    </div>
                </a></li>
            <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="/images/portfolio/4.jpeg" alt="Portfolio Item" /></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Business Card</h3>
                        <div class="work-descr">Photography</div>
                    </div>
                </a></li>
            <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="/images/portfolio/5.jpeg" alt="Portfolio Item" /></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Business Card</h3>
                        <div class="work-descr">Webdesign</div>
                    </div>
                </a></li>
            <li class="work-item marketing webdesign"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="/images/portfolio/6.jpeg" alt="Portfolio Item" /></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Business Cards in paper clip</h3>
                        <div class="work-descr">Marketing</div>
                    </div>
                </a></li>
        </ul>
    </section>
@endsection
