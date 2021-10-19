@extends('backend.layouts.master')
@section('title')
    Personnel Edit
@endsection

@section('main')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Edit Basic Personnel</a></li>
                            <li class=""><a href="#reviews"> Edit Acount </a></li>
                            <li class=""><a href="#INFORMATION">Edit Social </a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="#"
                                                    class="dropzone dropzone-custom needsclick add-professors dz-clickable"
                                                    id="demo1-upload" novalidate="novalidate">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input name="name" type="text" class="form-control"
                                                                    value="Fly Zend">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="address" type="text" class="form-control"
                                                                    placeholder="E104, catn-2, UK."
                                                                    value="E104, catn-2, UK.">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="date" type="text" class="form-control"
                                                                    placeholder="12/10/1993" value="12/10/1993">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name='phone' type="number" class="form-control"
                                                                    placeholder="01962067309" value="01962067309">
                                                            </div>
                                                            <div class="form-group alert-up-pd">
                                                                <div id="dropzone1" class="multi-uploader-cs">
                                                                    <form action="/upload"
                                                                        class="dropzone dropzone-custom needsclick"
                                                                        id="demo1-upload">
                                                                        <div class="dz-message needsclick download-custom">
                                                                            <i class="fa fa-download"
                                                                                aria-hidden="true"></i>
                                                                            <h2>Drop files here or click to upload.</h2>
                                                                            <p><span class="note needsclick">(This is just a
                                                                                    demo dropzone. Selected files are
                                                                                    <strong>not</strong> actually
                                                                                    uploaded.)</span>
                                                                            </p>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="role" type="text" class="form-control"
                                                                    placeholder="CSE" value="CSE">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option>Male</option>
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                @include('backend.comporment.summernote',[
                                                                'name'=> 'description',
                                                                'description'=>'summernote'
                                                                ])
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email" value="Admin@gmail.com"
                                                                    name="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" value="#123#123">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirm Password"
                                                                    name="password_confirmation" value="#123#123">
                                                            </div>
                                                            <a href="#!"
                                                                class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <form action="" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" name="fb_url"
                                                                    placeholder="Facebook URL"
                                                                    value="http://www.facebook.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" name="switter_url" class="form-control"
                                                                    placeholder="Twitter URL"
                                                                    value="http://www.twitter.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" name="gg_url"
                                                                    placeholder="Google Plus"
                                                                    value="http://www.google-plus.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" name="linked_url"
                                                                    placeholder="Linkedin URL"
                                                                    value="http://www.Linkedin.com">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
