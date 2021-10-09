@extends('frontend.layouts.master')
@section('title')

@endsection

@section('header')
    <section class="home-section home-fade home-full-height" id="home" style="height: 501px;">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark shop-page-header flex-active-slide"
                    style="background-image: url(&quot;/images/LOL/Header/bilgewater_06.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"
                    data-thumb-alt="">
                    <div class="titan-caption">
                        <div class="caption-content" style="opacity: 1;">
                            <div class="font-alt mb-30 titan-title-size-1">Welcome to theatre of Dreams</div>
                            <div class="font-alt mb-30 titan-title-size-4"> Blood Season 2021</div>
                            <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div><a
                                class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                        </div>
                    </div>
                </li>
                <li class="bg-dark-30 bg-dark shop-page-header"
                    style="background-image: url(&quot;/images/LOL/Header/freljord-cavernshowling.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                    data-thumb-alt="">
                    <div class="titan-caption">
                        <div class="caption-content" style="opacity: 1;">
                            <div class="font-alt mb-30 titan-title-size-1">Welcome to theatre of Dreams</div>
                            <div class="font-alt mb-40 titan-title-size-4">Exclusive products</div><a
                                class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging">
                <li><a href="#" class="flex-active">1</a></li>
                <li><a href="#">2</a></li>
            </ol>
            <ul class="flex-direction-nav">
                <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
                <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
            </ul>
        </div>
    </section>
@endsection

@section('main')
    <section class="module-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Latest in clothing</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-7.jpg"
                                alt="Accessories Pack" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-8.jpg"
                                alt="Men’s Casual Pack" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-9.jpg"
                                alt="Men’s Garb" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-10.jpg"
                                alt="Cold Garb" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-11.jpg"
                                alt="Accessories Pack" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-12.jpg"
                                alt="Men’s Casual Pack" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-13.jpg"
                                alt="Men’s Garb" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="shop-item">
                        <div class="shop-item-image"><img src="/frontend/assets/images/shop/product-14.jpg"
                                alt="Cold Garb" />
                            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To
                                        Cart</span></a></div>
                        </div>
                        <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">See all products</a></div>
            </div>
        </div>
    </section>
    <section class="module module-video bg-dark-30" data-background="">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
                </div>
            </div>
        </div>
        <div class="video-player"
            data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}">
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Exclusive products</h2>
                    <div class="module-subtitle font-serif">No one can know what will happen in the future, the game can be
                        reversed at any time. That's why you should keep faith in the unlimited potential of the future and
                        keep trying. Explore for yourself to find true happiness in the future.</div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="ex-product"><a href="#"><img src="/frontend/assets/images/shop/product-1.jpg"
                                        alt="Leather belt" /></a>
                                <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£12.00
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="ex-product"><a href="#"><img src="/frontend/assets/images/shop/product-2.jpg"
                                        alt="Derby shoes" /></a>
                                <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>£54.00
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="ex-product"><a href="#"><img src="/frontend/assets/images/shop/product-3.jpg"
                                        alt="Leather belt" /></a>
                                <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="ex-product"><a href="#"><img src="/frontend/assets/images/shop/product-4.jpg"
                                        alt="Leather belt" /></a>
                                <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£14.00
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="ex-product"><a href="#"><img src="/frontend/assets/images/shop/product-5.jpg"
                                        alt="Chelsea boots" /></a>
                                <h4 class="shop-item-title font-alt"><a href="#">Chelsea boots</a></h4>£44.00
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="col-sm-12">
                            <div class="ex-product"><a href="#"><img src="/frontend/assets/images/shop/product-6.jpg"
                                        alt="Leather belt" /></a>
                                <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Our News</h2>
                </div>
            </div>
            <div class="row multi-columns-row post-columns wo-border">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-40">
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-40">
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-40">
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">New lookbook</a></h2>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-40">
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-40">
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-40">
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">New lookbook</a></h2>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
