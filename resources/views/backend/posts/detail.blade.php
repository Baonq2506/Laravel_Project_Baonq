@extends('backend.layouts.master')
@section('title')
    Detail Product
@endsection
@section('main')
    <div class="blog-details-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <a href="#">
                                            @if (!empty($post->image_url))
                                                <img class="card-img-top" src="{{ $post->image_url_full }}"
                                                    height="600px" width="100%">
                                            @endif
                                        </a>
                                        <hr>
                                        <div class="blog-date">
                                            <h2><a
                                                    href="{{ route('backend.personnel.show', [
    'personnel_id' => $post->user_created_id,
]) }}">{{ $post->userCreated->name }}</a>
                                                | <span><a href="#"><i class="fas fa-user-tag"></i></i> <b>:</b>
                                                        {{ $post->userCreated->roles[0]->name }}</a></span> | <span><a
                                                        href="#"><i class="fas fa-comments"></i><b>(</b><span
                                                            class="fb-comments-count"
                                                            data-href="https://project-baonq.herokuapp.com/blog/{{ $post->category->name }}/{{ $post->slug }}/{{ $post->id }}"></span></a>)</span>
                                            </h2>
                                            <span>
                                                {!! $post->status_text !!} -
                                            </span>
                                            <strong>{{ $post->created_at->toFormattedDateString() }}</strong>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="blog-details blog-sig-details">

                                        <h1>{{ $post->title }}</h1>
                                        <p>{{ $post->content }}</p>
                                    </div>
                                    <div>
                                        <strong>Tags:</strong>

                                        @foreach ($post->tag as $post_tag)
                                            <strong> {!! $post_tag->tag_text !!}</strong>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="comment-head">
                                    <h3>Comments</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div style="height:500px;overflow: auto;z-index:1" class="fb-comments"
                                data-href="https://project-baonq.herokuapp.com/blog/{{ $post->category->name }}/{{ $post->slug }}/{{ $post->id }}"
                                data-width="100%" data-numposts="2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
