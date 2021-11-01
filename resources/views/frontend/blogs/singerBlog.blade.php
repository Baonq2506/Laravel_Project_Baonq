@extends('frontend.layouts.master')
@section('title')
    | Blog Singer
@endsection
@section('header')
    <section class="module bg-dark-60 blog-page-header">
        <video style="margin-top: -250px;margin-bottom: -255px;" preload='auto' autoplay loop width="100%" height="auto">
            <source src="/images/live.mp4">
        </video>
    </section>
@endsection
@section('main')
    <section class="module-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 sidebar">
                    <div class="widget">
                        <form role="form">
                            <div class="search-box">
                                <input class="form-control" type="text" placeholder="Search..." />
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Blog Categories</h5>
                        <ul class="icon-list">

                            @foreach ($categories as $cate)
                                <li><a href="{{ route('frontend.blog.showCategory', [
    'slug' => $cate->slug,
]) }}">
                                        {{ $cate->name }}-
                                        {{ $posts[$cate->id] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">New Posts</h5>
                        <ul class="widget-posts">
                            @foreach ($postnew as $pnew)
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img
                                                style="height:40px !important;width:100%"
                                                src="{{ $pnew->image_url_full }}" alt="Post Thumbnail" /></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a
                                                href="{{ route('frontend.blog.singerBlog', [
    'slug' => $pnew->slug,
    'blog_id' => $pnew->id,
    'slug_cate' => $pnew->category->slug,
]) }}">
                                                <span class="p-style">
                                                    {{ $pnew->title }}</span>
                                            </a>
                                        </div>
                                        <div class="widget-posts-meta">{{ $pnew->created_at->toFormattedDateString() }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Tag</h5>
                        <div class="tags font-serif">
                            @foreach ($tags as $tag)
                                <a href="#" rel="tag">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Text</h5>If you’re good at something, never do it for free. <br>
                        You can’t rely on anyone these days, you gotta do everything yourself.
                    </div>

                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{ $post->image_url_full }}" alt="Blog Featured Image" />
                        </div>
                        <div class="post-header font-alt">
                            <h1 class="post-title">{{ $post->title }}</h1>
                            <div class="post-meta">By&nbsp;<a
                                    href="{{ route('frontend.blog.singerBlog', [
    'slug' => $post->slug,
    'blog_id' => $post->id,
    'slug_cate' => $post->category->slug,
]) }}">{{ $post->userCreated->name }}</a>|
                                {{ $post->created_at->toFormattedDateString() }}
                                | @foreach ($post->tag as $pt)
                                    {{ $pt->name . '|' }}
                                @endforeach </a>
                            </div>
                        </div>
                        <div class="post-entry">
                            <p>{{ $post->content }}</p>
                        </div>

                        <br><br>

                        <div class="fb-comments"
                            data-href="https://project-baonq.herokuapp.com/blog/{{ $post->category->name }}/{{ $post->slug }}/{{ $post->id }}"
                            data-width="100%" data-numposts="1">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
