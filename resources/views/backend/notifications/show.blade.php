@extends('backend.layouts.master')
@section('title')
    Show Notification
@endsection
@section('main')
    <div class="blog-details-area mg-b-15">
        <div class="container-fluid">
            <a href="{{ route('backend.notification.index') }}"><i class="fas fa-arrow-left"></i></a>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <h3>From: <span>Manager</span></h3>
                                    <h4>Title: <span> {{ json_decode($notification->data)->title }}</span></h4>
                                    <hr>
                                    <div class="blog-image">

                                        {!! json_decode($notification->data)->content !!}

                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
