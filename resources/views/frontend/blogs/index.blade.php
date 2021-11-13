@extends('frontend.layouts.master')
@section('title')
    Blog
@endsection
@section('style')
    <style>
        .ex-product {

            color: black;
            display: inline-block;
            font-size: 13px;
            height: 30px;
            line-height: 30px;
            font-weight: bold;
            text-align: center;
            width: 100px;
        }

        .ex-product a:hover {
            color: rgb(28, 160, 242);
        }

    </style>
@section('header')
    <section class="module bg-dark-60 blog-page-header" data-background="/images/LOL/Header/piltover_culture_01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Blog Grid</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like
                        these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <div class="container" style="margin-top:10px;margin-bottom:10px">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel text-center" data-items="5" data-pagination="true" data-navigation="true">
                    @foreach ($categories as $cate)
                        <div class="ex-product" style="border:1px solid purple;border-radius:10px">
                            <a
                                href="{{ route('frontend.blog.showCategory', [
                                    'slug' => $cate->slug,
                                ]) }}">{{ $cate->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section style="background-color: rgb(245, 245, 250)">
        <div class="container">
            <br>
            <div class="row multi-columns-row post-columns">
                @foreach ($posts as $post)
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="post">
                            <div class="post-thumbnail"><a href="#"><img
                                        style="border:1px solid black;border-radius:10px;height: 200px;width: 100%;"
                                        src="{{ $post->image_url_full }}" alt="Blog-post Thumbnail" /></a></div>
                            <div class="post-header font-alt">
                                <h3 class="post-title"><a
                                        href="{{ route('frontend.blog.singerBlog', [
                                            'blog_id' => $post->id,
                                            'slug' => $post->slug,
                                            'slug_cate' => $post->category->slug,
                                        ]) }}">
                                        <p class="p-style">
                                            {{ $post->title }}</p>
                                    </a>
                                </h3>
                                <div class="post-meta">By&ensp;<a href="#">{{ $post->userCreated->name }}</a>
                                    &nbsp;| {{ $post->created_at->format('d-m-Y') }}</div>
                            </div>
                            <div class="post-entry">
                                <p
                                    style="display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;word-break: break-word;">
                                    {{ $post->content }}</p>
                            </div>
                            <div style="width:100px;font-size:14px;font-weight:bold;text-align:left" class="post-more">
                                <a class="more-link"
                                    href="{{ route('frontend.blog.singerBlog', ['blog_id' => $post->id, 'slug' => $post->slug, 'slug_cate' => $post->category->slug]) }}">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="display: flex;justify-content:center"> {{ $posts->links('frontend.comporment.simple') }}</div>
        </div>
    </section>
@endsection
