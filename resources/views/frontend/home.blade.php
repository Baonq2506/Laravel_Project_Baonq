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
                            <div class="font-alt mb-30 titan-title-size-1">Welcome to Belgorod</div>
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
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img
                                    style="width:100% !important;height:250px !important;object-fit:cover"
                                    src="{{ Storage::disk('products')->url($product->product_image[0]->path) }}"
                                    alt="Accessories Pack" />
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span
                                            class="icon-basket">Add To
                                            Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt p-style"><a
                                    href="{{ route('frontend.shop.detail', ['slug' => $product->slug, 'product_id' => $product->id]) }}">{{ $product->name }}</a>
                            </h4>
                            {{ number_format($product->sale_price) }} USD
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row mt-30">
                <div class="col-sm-12 align-center"><a class="btn btn-b btn-round"
                        href="{{ route('frontend.shop.index') }}">See all products</a></div>
            </div>
        </div>
    </section>
    <section class="module module-video bg-dark-30" data-background="/images/LOL/Header/pexels-photo-1647962.jpeg">
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
                    @foreach ($news as $product)
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img
                                            style="width:250px !important;height:130px !important;object-fit:cover"
                                            src="{{ Storage::disk('products')->url(json_decode($product->info)[0]) }}"
                                            alt="Leather belt" /></a>
                                    <h4 class="shop-item-title font-alt p-style"><a
                                            href="#"><strong>{{ $product->name }}</strong></a></h4>
                                    {{ number_format($product->sale_price) }} USD
                                </div>
                            </div>
                        </div>
                    @endforeach


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
                @foreach ($blogs as $blog)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title p-style"><a href="#">{{ $blog->title }}</a></h2>
                            </div>
                            <div class="post-entry blog-style">
                                <p>{{ $blog->content }}</p>
                            </div>
                            <div class="post-more"><a class="more-link"
                                    href="{{ route('frontend.blog.singerBlog', [
                                        'blog_id' => $blog->id,
                                        'slug' => $blog->slug,
                                        'slug_cate' => $blog->category->slug,
                                    ]) }}"><strong>Read
                                        more</strong></a></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
