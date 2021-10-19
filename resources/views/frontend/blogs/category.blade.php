@extends('frontend.layouts.master')
@section('title')
    | Blog Category
@endsection

@section('header')
    <section class="module bg-dark-60 blog-page-header" data-background="/images/LOL/Header/shadow-isles-crator.jpg"
        style="background-image: url(&quot;/images/a10.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Blog</h2>
                    <div class="module-subtitle font-serif">One ought, every day at least, to hear a little song, read a good
                        poem, see a fine picture, and, if it were possible, to speak a few reasonable words.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('style')
    <style>
        .activeText {
            color: red;
        }

    </style>
@endsection
@section('main')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 sidebar">
                    <div class="widget">
                        <form role="form">
                            <div class="search-box">
                                <input class="form-control" type="text" placeholder="Search...">
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Blog Categories</h5>
                        <ul class="icon-list">
                            @foreach ($categories as $cate)
                                <li><a href="{{ route('frontend.blog.showCategory', ['slug' => $cate->slug]) }}">

                                        {{ $cate->name }}-
                                        {{ $cate_count[$cate->id] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Popular Posts</h5>
                        <ul class="widget-posts">
                            @foreach ($postnew as $pnew)
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="{{ $pnew->image_url }}"
                                                alt="Post Thumbnail" /></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a
                                                href="{{ route('frontend.blog.singerBlog', [
    'slug' => $pnew->slug,
    'blog_id' => $pnew->id,
    'slug_cate' => $cate->slug,
]) }}">{{ $pnew->title }}</a>
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
                        <h5 class="widget-title font-alt">Text</h5>Those mob fools want you gone. So they can get back to
                        the way things were. But I know the truth, there’s no going back. You’ve changed things…forever.
                        <br>
                        I believe whatever doesn’t kill you, simply makes you…stranger.
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    @foreach ($posts as $post)
                        <div class="post">
                            <div class="post-thumbnail"><a href="#"><img src="/frontend/assets/images/post-1.jpg"
                                        alt="Blog-post Thumbnail"></a></div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a
                                        href="{{ route('frontend.blog.singerBlog', [
    'blog_id' => $post->id,
    'slug' => $post->slug,
    'slug_cate' => $post->category->slug,
]) }}">{{ $post->title }}</a>
                                </h2>
                                <div class="post-meta">By&nbsp;<a href="#">{{ $post->userCreated->name }}</a>|
                                    {{ $post->created_at->toFormattedDateString() }}
                                    @foreach ($post->tag as $pt)
                                        <a href="#">{{ $pt->name }} </a>
                                    @endforeach
                                </div>
                                <div class="post-entry">
                                    <p>{{ $post->content }}</p>
                                </div>
                                <div style="width:100px;font-size:14px;font-weight:bold;text-align:left"
                                    class="post-more"><a class="more-link"
                                        href="{{ route('frontend.blog.singerBlog', [
    'blog_id' => $post->id,
    'slug' => $post->slug,
    'slug_cate' => $post->category->slug,
]) }}">Read
                                        more</a>
                                </div>
                            </div>

                    @endforeach
                </div>
                <div style="margin: 0 auto;"> {{ $posts->links('frontend.comporment.simple') }}</div>
            </div>
        </div>
        </div>
    </section>
@endsection
