@extends('frontend.layouts.master')
@section('title')
    About
@endsection
@section('header')
    <section class="module bg-dark-60 about-page-header" data-background="/images/LOL/Header/eyes-in-the-abyss.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">About</h2>
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
                <div class="col-sm-6">
                    <h5 class="font-alt">We’re a digital creative agency</h5><br />
                    <p>The European languages are members of the same family. Their separate existence is a myth. For
                        science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their
                        grammar, their pronunciation and their most common words.</p>
                    <p>The European languages are members of the same family. Their separate existence is a myth. For
                        science, music, sport, etc, Europe uses the same vocabulary.</p>
                </div>
                <div class="col-sm-6">
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
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Meet Our Team</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                    <div class="team-item">
                        <div class="team-image"><img style="width:260px;height:390px;object-fit:cover"
                                src="/images/FEHeader/j.jpeg" alt="Member Photo" />
                            <div class="team-detail">
                                <h5 class="font-alt">Hi all</h5>
                                <p class="font-serif">If you take competition seriously, you will have to wait until
                                    your opponent makes a move.
                                    If you take the customer first, you will be a pioneer.</p>
                                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                        href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">Jeff Bezos</div>
                            <div class="team-role">Co-Founder</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                    <div class="team-item">
                        <div class="team-image"><img style="width:260px;height:390px;object-fit:cover"
                                src="/images/FEHeader/m.jpg" alt="Member Photo" />
                            <div class="team-detail">
                                <h5 class="font-alt">Good day</h5>
                                <p class="font-serif">Act faster and break things. Otherwise you won't be fast enough
                                    to act.</p>
                                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                        href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">Mark Zuckerberg</div>
                            <div class="team-role">Co-Founder</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                    <div class="team-item">
                        <div class="team-image"><img style="width:260px;height:390px;object-fit:cover"
                                src="/images/FEHeader/R.jpg" alt="Member Photo" />
                            <div class="team-detail">
                                <h5 class="font-alt">Hello</h5>
                                <p class="font-serif">If you wake up every morning thinking that tomorrow will be a
                                    brighter day, that day will be a good day for you.</p>
                                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                        href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">Elon Musk</div>
                            <div class="team-role">Co-Founder</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                    <div class="team-item">
                        <div class="team-image"><img style="width:260px;height:390px;object-fit:cover"
                                src="/images/FEHeader/w.jpg" alt="Member Photo" />
                            <div class="team-detail">
                                <h5 class="font-alt">Hi, it's me</h5>
                                <p class="font-serif">When you're on a damaged ship, it's often more effective to
                                    switch to another ship than to try to patch the hole in the ship.</p>
                                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                        href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">Warren Buffett</div>
                            <div class="team-role">Co-Founder</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module module-video bg-dark-30" data-background="/images/LOL/Header/pexels-photo-2724664.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="module-title font-alt align-left">Our office</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="font-serif">The European languages are members of the same family. Their separate
                        existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages
                        only differ in their grammar, their pronunciation and their most common words.</p>
                    <p class="font-serif">The European languages are members of the same family. Their separate
                        existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages
                        only differ in their grammar, their pronunciation and their most common words.</p>
                </div>
                <div class="col-sm-3">
                    <p class="font-serif">The European languages are members of the same family. Their separate
                        existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                </div>
            </div>
        </div>
        <div class="video-player"
            data-property="{videoURL:'https://www.youtube.com/watch?v=UPAr2cSUcFw', containment:'.module-video', startAt:0, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}">
        </div>
        <div class="video-controls-box">
            <div class="container">
                <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a
                        class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
            </div>
        </div>
    </section>
    <section class="module" id="alt-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Our advantages</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
            <div class="row">
                <div style="margin-top:50px;" class="col-md-6 col-lg-6 hidden-xs hidden-sm">

                    <div class="alt-services-image align-center"><img src="/images/LOL/Header/demacia-silvermere.jpg"
                            alt="Feature Image">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                        <h3 class="alt-features-title font-alt">Branding</h3>A wonderful serenity has taken possession of
                        my entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                        <h3 class="alt-features-title font-alt">Development</h3>A wonderful serenity has taken possession
                        of my entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-target"></span></div>
                        <h3 class="alt-features-title font-alt">Marketing</h3>A wonderful serenity has taken possession of
                        my entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-tools"></span></div>
                        <h3 class="alt-features-title font-alt">Design</h3>A wonderful serenity has taken possession of my
                        entire soul like these sweet mornings.
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-camera"></span></div>
                        <h3 class="alt-features-title font-alt">Photography</h3>A wonderful serenity has taken possession
                        of my entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                        <h3 class="alt-features-title font-alt">Mobile</h3>A wonderful serenity has taken possession of my
                        entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                        <h3 class="alt-features-title font-alt">Music</h3>A wonderful serenity has taken possession of my
                        entire soul like these sweet mornings.
                    </div>
                    <div class="alt-features-item">
                        <div class="alt-features-icon"><span class="icon-basket"></span></div>
                        <h3 class="alt-features-title font-alt">Shop</h3>A wonderful serenity has taken possession of my
                        entire soul like these sweet mornings.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
