@extends('frontend.layouts.master')
@section('title')
    Blog
@endsection

@section('header')
    <section class="module bg-dark-60 blog-page-header" data-background="/images/LOL/Header/shadow-isles-crator.jpg"
        style="background-image: url(&quot;/images/a10.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Blog</h2>
                    <div class="module-subtitle font-serif">One ought, every day at least, to hear a little song, read a good
                        poem, see a fine picture, and, if it were possible, to speak a few reasonable words.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 sidebar">
                    <div class="widget">
                        <form role="form">
                            <div class="search-box">
                                <input class="form-control" type="text" placeholder="Search...">
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Blog Categories</h5>
                        <ul class="icon-list">
                            <li><a href="#">Photography - 7</a></li>
                            <li><a href="#">Web Design - 3</a></li>
                            <li><a href="#">Illustration - 12</a></li>
                            <li><a href="#">Marketing - 1</a></li>
                            <li><a href="#">Wordpress - 16</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Popular Posts</h5>
                        <ul class="widget-posts">
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="/frontend/assets/images/rp-1.jpg"
                                            alt="Post Thumbnail"></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                    <div class="widget-posts-meta">23 january</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="/frontend/assets/images/rp-2.jpg"
                                            alt="Post Thumbnail"></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                    <div class="widget-posts-meta">15 February</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="/frontend/assets/images/rp-3.jpg"
                                            alt="Post Thumbnail"></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Eco bag Mockup</a></div>
                                    <div class="widget-posts-meta">21 February</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="/frontend/assets/images/rp-4.jpg"
                                            alt="Post Thumbnail"></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Bottle Mockup</a></div>
                                    <div class="widget-posts-meta">2 March</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Tag</h5>
                        <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Photo</a><a
                                href="#" rel="tag">Video</a><a href="#" rel="tag">Image</a><a href="#"
                                rel="tag">Minimal</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Theme</a><a
                                href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#"
                                rel="tag">Bootstrap</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">English</a>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Text</h5>The languages only differ in their grammar, their
                        pronunciation and their most common words. Everyone realizes why a new common language would be
                        desirable: one could refuse to pay expensive translators.
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Recent Comments</h5>
                        <ul class="icon-list">
                            <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                            <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                            <li>Andy on <a href="#">Eco bag Mockup</a></li>
                            <li>Jack on <a href="#">Bottle Mockup</a></li>
                            <li>Mark on <a href="#">Our trip to the Alps</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="post">
                        <div class="post-thumbnail"><a href="#"><img src="/frontend/assets/images/post-1.jpg"
                                    alt="Blog-post Thumbnail"></a></div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>| 23 November | 3 Comments | <a
                                    href="#">Photography, </a><a href="#">Web Design</a>
                            </div>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in
                                this spot, which was created for the bliss of souls like mine.</p>
                        </div>
                        <div class="post-more"><a class="more-link"
                                href="{{ route('frontend.blog.singerBlog') }}">Read more</a></div>
                    </div>
                    <div class="post">
                        <div class="post-quote">
                            <blockquote class="font-serif">
                                <p>" The languages only differ in their grammar, their pronunciation and their most common
                                    words. Everyone realizes why a new common language would be desirable: one could refuse
                                    to pay expensive translators. "</p>
                                <p class="font-inc font-uppercase">- Thomas Anderson</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="post">
                        <div class="post-video embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Jkk0VHiCnKY" frameborder="0"
                                allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Post with video</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>| 23 November | 3 Comments | <a
                                    href="#">Marketing, </a><a href="#">Web Design</a>
                            </div>
                        </div>
                        <div class="post-entry">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in
                                this spot, which was created for the bliss of souls like mine.</p>
                        </div>
                        <div class="post-more"><a class="more-link"
                                href="{{ route('frontend.blog.singerBlog') }}">Read more</a></div>
                    </div>
                    <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a
                            class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a
                            href="#"><i class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>
@endsection