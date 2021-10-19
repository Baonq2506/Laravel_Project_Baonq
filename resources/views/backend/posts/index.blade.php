@extends('backend.layouts.master')
@section('title')
    Post
@endsection
@section('main')
    <div class="courses-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner res-mg-b-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Apps Development</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span style="background:green" class="cr-ic-r badge badge-success">Public</span>
                            </span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span>
                                50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-eye"
                                        aria-hidden="true"></i></span>
                                500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Writer:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Created:</b> 6 Months</p>

                            <p><span><i class="fa fa-clock"></i></span> <b>Updated:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <a href="{{ route('backend.post.show', ['post_id' => 1]) }}"><button type="button"
                                    class="button-default cart-btn">Read More</button></a>
                            &ensp;&ensp;&ensp;
                            <a href=""><button style="color:red" data-toggle="tooltip" title="" class="pd-setting-ed"
                                    data-original-title="Trash"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button></a>&ensp;&ensp;
                            <a href="{{ route('backend.post.edit', ['post_id' => 1]) }}"><button style="color:purple"
                                    data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"
                                    href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
