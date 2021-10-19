@extends('backend.layouts.master')
@section('title')
    Personnel Create
@endsection

@section('main')
    <br>
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Create Personnel</a></li>
                            <li><a href="#reviews"> Account Personnel</a></li>
                            <li><a href="#INFORMATION">Social Personnel</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="#" method="post" enctype="multipart"
                                                    class="dropzone dropzone-custom needsclick add-professors dz-clickable"
                                                    id="demo1-upload" novalidate="novalidate">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder=" Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="address" type="text" class="form-control"
                                                                    placeholder="Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="phone" type="number" class="form-control"
                                                                    placeholder="Mobile no.">
                                                            </div>

                                                            <div class="form-group data-custon-pick" id="data_3">
                                                                <div class="input-group date">
                                                                    <span class="input-group-addon"><i
                                                                            class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control"
                                                                        value="13/1/1997">
                                                                </div>
                                                            </div>


                                                            <div class="form-group alert-up-pd">
                                                                <div class="dz-message needsclick download-custom">
                                                                    <i class="fa fa-download edudropnone"
                                                                        aria-hidden="true"></i>
                                                                    <h2 class="edudropnone">Drop image here or click to
                                                                        upload.</h2>
                                                                    <p class="edudropnone"><span
                                                                            class="note needsclick">(This is just a demo
                                                                            dropzone. Selected image is <strong>not</strong>
                                                                            actually uploaded.)</span>
                                                                    </p>
                                                                    <input name="avatar" class="hd-pro-img" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="role" type="text" class="form-control"
                                                                    placeholder="Role">
                                                            </div>
                                                            <div class="form-group">
                                                                @include('backend.comporment.summernote',[
                                                                'name'=> 'description',
                                                                'description'=>'summernote'
                                                                ])
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select
                                                                        Gender</option>
                                                                    <option value="0">Male</option>
                                                                    <option value="1">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Create</button>
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
                                                        <form id="acount-infor" action="#" class="acount-infor"
                                                            novalidate="novalidate">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="email"
                                                                        placeholder="Email">
                                                                </div>
                                                                <div class="sparkline9-graph">
                                                                    <div id="pwd-container4">
                                                                        <div class="form-group">
                                                                            <input type="password"
                                                                                class="form-control example4"
                                                                                name="password" id="password4"
                                                                                placeholder="Password">
                                                                        </div>
                                                                        <div class="form-group mg-b-pass">
                                                                            <span
                                                                                class="font-bold pwstrength_viewport_verdict4"></span>
                                                                            <span
                                                                                class="pwstrength_viewport_progress4"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password_confirmation" type="password"
                                                                        class="form-control"
                                                                        placeholder="Confirm Password">
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-primary waves-effect waves-light">Create
                                                                    Account</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input name="fb_url" type="url" class="form-control"
                                                                    placeholder="Facebook URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="switter_url" type="url" class="form-control"
                                                                    placeholder="Twitter URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" name="gg_url" class="form-control"
                                                                    placeholder="Google Plus">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="linked_url" type="url" class="form-control"
                                                                    placeholder="Linkedin URL">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
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
@endsection
@push('stack_js')

    <!-- datapicker JS-->
    <script src="/backend/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/backend/js/datapicker/datepicker-active.js"></script>
    <!-- pwstrength JS -->
    <script src="/backend/js/password-meter/pwstrength-bootstrap.min.js"></script>
    <script src="/backend/js/password-meter/zxcvbn.js"></script>
    <script src="/backend/js/password-meter/password-meter-active.js"></script>

@endpush
@push('stack_css')
    <!-- forms Css -->
    <link rel="stylesheet" href="/backend/css/form/all-type-forms.css">
    <!-- datapicker CSS-->
    <link rel="stylesheet" href="/backend/css/datapicker/datepicker3.css">

@endpush
