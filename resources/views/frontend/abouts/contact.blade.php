@extends('frontend.layouts.master')
@section('title')
    Contact
@endsection
@section('style-color')
    style="color:white"
@endsection
@section('header')
    <section class="module bg-dark-70 contact-page-header" data-background="/images/header/a19.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 @yield('style-color') class="module-title font-alt">Contact Us</h2>
                    <div @yield('style-color') class="module-subtitle font-serif">A wonderful serenity has taken possession
                        of
                        my entire soul, like
                        these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <section class="module" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Contact us</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form id="contactForm" role="form" method="post" action="/frontend/php/contact.php">
                        <div class="form-group">
                            <label class="sr-only" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*"
                                required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*"
                                required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="7" id="message" name="message"
                                placeholder="Your Message*" required="required"
                                data-validation-required-message="Please enter your message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                        </div>
                    </form>
                    <div class="ajax-response font-alt" id="contactFormResponse"></div>
                </div>
                <div class="col-sm-4">
                    <div class="alt-features-item mt-0">
                        <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                        <h3 class="alt-features-title font-alt">Where to meet</h3>Dracula Castel<br />25 Greate
                        City<br />Phúc Hòa, Phúc Thọ, Hà Nội
                    </div>
                    <div class="alt-features-item mt-xs-60">
                        <div class="alt-features-icon"><span class="icon-map"></span></div>
                        <h3 class="alt-features-title font-alt">Say Hello</h3>Email: baonq.2506.vnua@gmail.com<br />Phone:
                        +84 962 023 641
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map-section">
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14888.491004826608!2d105.53789723016163!3d21.10767179335658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134588abae6ff45%3A0xd20b05cf045ae987!2zdHQuIFBow7pjIFRo4buNLCBQaMO6YyBUaOG7jSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1633187075236!5m2!1svi!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <br>
@endsection
