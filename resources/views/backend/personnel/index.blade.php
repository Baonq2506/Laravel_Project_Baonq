@extends('backend.layouts.master')
@section('title')
    Personnel
@endsection
@section('main')
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div style="margin-bottom: 15px;" class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                        <div class="panel-body custom-panel-jw">
                            <div class="social-media-in">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                            </div>
                            <img alt="logo" class="img-circle m-b" src="img/contact/1.jpg">
                            <h3><a href="">John Alva</a></h3>
                            <p class="all-pro-ad">London, LA</p>
                            <p>
                                Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est
                                vitae ultrices accumsan.
                            </p>
                        </div>
                        <div class="panel-footer contact-footer">
                            <div class="professor-stds-int">
                                <div class="professor-stds">
                                    <div class="contact-stat"><a
                                            href="{{ route('backend.personnel.edit', ['personnel' => '1']) }}">
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit" href=""><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                        </a></div>
                                </div>
                                <div class="professor-stds">
                                    <div class="contact-stat"><a href="">
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </a></div>
                                </div>
                                <div class="professor-stds">
                                    <div class="contact-stat"><a
                                            href="{{ route('backend.personnel.show', [
    'personnel' => 1,
]) }}">
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Detail"><i class="fa fa-search"
                                                    aria-hidden="true"></i></button>
                                        </a></div>
                                </div>
                                <div class="professor-stds">
                                    <div class="contact-stat"><a href="">
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Sign in"><i class="fa fa-sign-in"
                                                    aria-hidden="true"></i></button>
                                        </a></div>
                                </div>
                                <div class="professor-stds">
                                    <div class="contact-stat"><a href="">
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Restore"><i class="fa fa-reddit-alien"
                                                    aria-hidden="true"></i></button>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
