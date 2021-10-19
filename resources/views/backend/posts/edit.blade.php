@extends('backend.layouts.master')
@section('title')
    Edit Post
@endsection
@section('main')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Edit Post </a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <form action="#"
                                                    class="dropzone dropzone-custom needsclick add-professors dz-clickable"
                                                    id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="title" type="text" class="form-control"
                                                                    placeholder="Course Name" value="Apps Development">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="created_at" type="text" class="form-control"
                                                                    placeholder="Course Duration" value="6 Months">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="updated_at" class="form-control"
                                                                    placeholder="Course Price" value="Charlie">
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
                                                                    <input name="image_url" class="hd-pro-img"
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group res-mg-t-15">
                                                                <input type="text" name="tags[]" class="form-control"
                                                                    placeholder="Department" value="CSE">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="slug" type="text" class="form-control"
                                                                    placeholder="Course Professor" value="Selima -sha"
                                                                    disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                @include('backend.comporment.summernote',[
                                                                'name'=> 'content',
                                                                'description'=>'summernote'
                                                                ])
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Update</button>
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
    </div>

@endsection
