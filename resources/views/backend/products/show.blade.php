@extends('backend.layouts.master')
@section('title')
    Detail Product
@endsection
@section('css')
    <style>
        .star,
        .star-off {
            margin-bottom: 5px;
            color: #f1c40f;

        }

        .star-off {
            color: #e5e5e5;
        }



        .cta-100 {
            margin-top: 100px;
            padding-left: 8%;
            padding-top: 7%;
        }

        .col-md-4 {
            padding-bottom: 20px;
        }

        .white {
            color: #fff !important;
        }

        .mt {
            float: left;
            margin-top: -20px;
            padding-top: 20px;
        }

        .bg-blue-ui {
            background-color: #708198 !important;
        }

        figure img {
            width: 300px;
        }

        #blogCarousel {
            padding-bottom: 100px;
        }

        .blog .carousel-indicators {
            left: 0;
            top: -50px;
            height: 50%;
        }


        /* The colour of the indicators */

        .blog .carousel-indicators li {
            background: #708198;
            border: 1px solid white;
            border-radius: 50%;
            width: 8px;
            height: 8px;
        }

        .blog .carousel-indicators .active {
            background: #0fc9af;
        }

        .item-carousel-blog-block {
            outline: medium none;
            padding: 15px;
        }

        .item-box-blog {
            border: 1px solid #dadada;
            text-align: center;
            z-index: 4;
            padding: 20px;
        }

        .item-box-blog-image {
            position: relative;
        }

        .item-box-blog-image figure img {
            width: 100%;
            height: auto;
        }

        .item-box-blog-date {
            position: absolute;
            z-index: 5;
            padding: 4px 20px;
            top: -20px;
            right: 8px;
            background-color: #41cb52;
        }

        .item-box-blog-date span {
            color: #fff;
            display: block;
            text-align: center;
            line-height: 1.2;
        }

        .item-box-blog-date span.mon {
            font-size: 18px;
        }

        .item-box-blog-date span.day {
            font-size: 16px;
        }

        .item-box-blog-body {
            padding: 10px;
        }

        .item-heading-blog a h5 {
            margin: 0;
            line-height: 1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .item-box-blog-heading a {
            text-decoration: none;
        }

        .item-box-blog-data p {
            font-size: 13px;
        }

        .item-box-blog-data p i {
            font-size: 12px;
        }

        .item-box-blog-text {
            max-height: 100px;
            overflow: hidden;
        }

        .mt-10 {
            float: left;
            margin-top: -10px;
            padding-top: 10px;
        }

        .btn.bg-blue-ui.white.read {
            cursor: pointer;
            padding: 4px 20px;
            float: left;
            margin-top: 10px;
        }

        .btn.bg-blue-ui.white.read:hover {
            box-shadow: 0px 5px 15px inset #4d5f77;
        }

    </style>
@endsection
@section('main')
    <div class="card card-solid">
        <div class="card-body">
            <a href="{{ route('backend.product.index') }}"><i class="fas fa-arrow-left"> Back</i></a>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $product->name }}</h3>
                    <div class="col-12">
                        @foreach ($images as $key => $image)
                            @if ($key == 0)
                                <img style="width:100%;height:300px;object-fit: cover;" src="{{ $image->image_url_full }}"
                                    class="product-image" alt="Product Image">
                            @endif
                        @endforeach
                    </div>
                    {{-- product-image-thumb --}}
                    <br>
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < $images->lastPage(); $i++)
                                        <li data-target="#blogCarousel" data-slide-to="{{ $i }}"
                                            class="@if ($i == 0)
                                            active
                                        @endif">
                                        </li>
                                    @endfor
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    @for ($i = 0; $i < $images->lastPage(); $i++)
                                        <div style="margin-left: 23.5px !important;"
                                            class="carousel-item @if ($i == 0)
                                        active
                                        @endif">
                                            <div class="row">
                                                @foreach ($imagesCount as $key => $image)
                                                    @if ($key < $images->perPage() * ($i + 1) && $key >= $images->perPage() * $i)
                                                        <div class="col-md-3 product-image-thumb"
                                                            style="margin-right: 28px;margin-left:-10px">
                                                            <a href="#">
                                                                <img src="{{ $image->image_url_full }}" alt="Image">
                                                            </a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!--.row-->
                                        </div>
                                    @endfor
                                </div>
                                <!--.carousel-inner-->
                            </div>
                            <!--.Carousel-->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <h4 class="my-3">{{ $product->name }} -<span>
                            @php
                                $i = 0;
                                $x = floor($reviews->sum('star') / $reviews->count());
                                while ($x > 0) {
                                    echo '<i class="fa fa-star star"></i>';
                                    $i++;
                                    $x--;
                                }
                                if ($i < 5) {
                                    for ($j = 1; $j <= 5 - $i; $j++) {
                                        echo '<i class="fa fa-star star-off"></i>';
                                    }
                                }
                            @endphp

                        </span>({{ $reviews->count() }})</h2>
                        <div>
                            {!! $product->status_text !!}
                        </div>
                        <hr>
                        <span style="color:green"><i
                                class="far fa-eye">&ensp;{{ number_format($product->view_count) }}</i></span>&ensp;
                        <span style="color:red"><i class="far fa-star">

                                &ensp;{{ number_format($product->review_count) }}</i></span>&ensp;
                        <span><i class="fas fa-cart-arrow-down">&ensp;{{ number_format($product->sale_count) }}</i></span>
                        <br>
                        <hr>
                        <span><i class="fas fa-dollar-sign"></i>: {{ number_format($product->origin_price) }} USD ~
                            {{ number_format($product->origin_price * 22600) }} VNĐ</span>&ensp;&ensp;
                        <span> <i class="fas fa-hand-holding-usd"></i>: {{ number_format($product->sale_price) }} USD
                            ~
                            {{ number_format($product->sale_price * 22600) }} VNĐ</span>
                        <hr>
                        <Strong>{{ $product->option }}</Strong>
                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                            role="tab" aria-controls="product-comments"
                            aria-selected="false">Comments({{ $comments->count() }})</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating"
                            role="tab" aria-controls="product-rating"
                            aria-selected="false">Rating({{ $reviews->count() }})</a>
                    </div>
                </nav>

                <div class="tab-content p-3" id="nav-tabContent">
                    {{-- DESCRIPTION --}}
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab"> {{ $product->content }} </div>
                    {{-- COMMENT --}}
                    <div class="tab-pane fade" id="product-comments" role="tabpanel"
                        aria-labelledby="product-comments-tab">
                        @foreach ($comments as $comment)
                            <div class="comment">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="comment-avatar"><img
                                                style="border:1px solid white;height:60px;width:60px;border-radius:50%"
                                                src="{{ $comment->users->image_url_full }}" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="comment-content clearfix">
                                            <div class=" font-alt"><a
                                                    href="{{ route('backend.user.show', ['user_id' => $comment->user_id]) }}">{{ $comment->users->name }}</a>
                                                <span>
                                                    @if (auth()->user()->roles[0]->slug == 'admin')
                                                        <button style="float: right;background:white;border: 1px crimson;"
                                                            type="button" data-toggle="modal"
                                                            data-target="#modal-danger-{{ $comment->id }}"
                                                            data-toggle="tooltip" data-placement="top" title="Trash">
                                                            <i style="color:red" class="fas fa-trash"></i>
                                                        </button>
                                                        <div class="modal fade" id="modal-danger-{{ $comment->id }}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-danger">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title"><i
                                                                                class="fas fa-exclamation-triangle"></i>
                                                                            Warning!
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body ">
                                                                        <p>Are you Delete ?</p>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-outline-light"
                                                                            data-dismiss="modal">Close</button>
                                                                        <form
                                                                            action="{{ route('backend.comment.destroy', ['comment_id' => $comment->id, 'product_id' => $product->id]) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('get')
                                                                            <button class="btn btn-outline-light"
                                                                                type="submit">
                                                                                Delete
                                                                            </button> &emsp;

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                    @endif
                                                </span>
                                            </div>
                                            <br>
                                            <div class="comment-body">
                                                <p>{{ $comment->content }}</p>
                                            </div>
                                            <div class="comment-meta font-alt">
                                                {{ $comment->created_at->format('M d , H:i') }}-<span>
                                                    <i style="color:blue;" class="fas fa-reply">
                                                        <span data-bs-toggle="collapse"
                                                            href="#collapseExample-{{ $comment->user_id }}" role="button"
                                                            aria-expanded="false" aria-controls="collapseExample"
                                                            style="text-decoration-line: underline;text-decoration-style:double">reply</span></i>
                                                    @if (!empty($replyComments))
                                                        @foreach ($replyComments as $replyCmt)
                                                            @if ($replyCmt->parent_id == $comment->user_id)
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-lg-1">
                                                                        <div class="comment-avatar"><img
                                                                                style="border:1px solid white;height:60px;width:60px;border-radius:50%"
                                                                                src="{{ $replyCmt->users->image_url_full }}"
                                                                                alt="avatar">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-11">
                                                                        <div class="comment-content clearfix">
                                                                            <div class="comment-author font-alt">
                                                                                <a
                                                                                    href="{{ route('backend.user.show', ['user_id' => $replyCmt->user_id]) }}">{{ $replyCmt->users->name }}</a>&ensp;<span>
                                                                                    {{ $replyCmt->created_at->format('M d , H:i') }}
                                                                                </span>
                                                                                @if (auth()->user()->roles[0]->slug == 'admin')
                                                                                    <button
                                                                                        style="float: right;background:white;border: 1px crimson;"
                                                                                        type="button" data-toggle="modal"
                                                                                        data-target="#modal-danger-{{ $replyCmt->id }}"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title="Trash">
                                                                                        <i style="color:red"
                                                                                            class="fas fa-trash"></i>
                                                                                    </button>
                                                                                    <div class="modal fade"
                                                                                        id="modal-danger-{{ $replyCmt->id }}">
                                                                                        <div class="modal-dialog">
                                                                                            <div
                                                                                                class="modal-content bg-danger">
                                                                                                <div class="modal-header">
                                                                                                    <h4
                                                                                                        class="modal-title">
                                                                                                        <i
                                                                                                            class="fas fa-exclamation-triangle"></i>
                                                                                                        Warning!
                                                                                                    </h4>
                                                                                                    <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                        <span
                                                                                                            aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body ">
                                                                                                    <p>Are you Delete ?</p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-footer justify-content-between">
                                                                                                    <button type="button"
                                                                                                        class="btn btn-outline-light"
                                                                                                        data-dismiss="modal">Close</button>
                                                                                                    <form
                                                                                                        action="{{ route('backend.comment.destroyReply', ['comment_id' => $replyCmt->id, 'product_id' => $replyCmt->product_id]) }}"
                                                                                                        method="post">
                                                                                                        @csrf
                                                                                                        @method('get')
                                                                                                        <button
                                                                                                            class="btn btn-outline-light"
                                                                                                            type="submit">
                                                                                                            Delete
                                                                                                        </button> &emsp;

                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                @endif
                                                                            </div>
                                                                            <div class="comment-body">
                                                                                </p><span><a href="#">
                                                                                        @
                                                                                        {{ $comment->users->name }}</a></span>
                                                                                {{ $replyCmt->content }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    <div class="collapse"
                                                        id="collapseExample-{{ $comment->user_id }}">
                                                        <form
                                                            action="{{ route('backend.product.replyComment', [
                                                                'user_id' => $comment->user_id,
                                                            ]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('get')
                                                            <div class="card card-body">
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $comment->product_id }}">
                                                                <textarea name="replyComments" id="" rows="5"></textarea>
                                                                <button type="submit" class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                    {{-- REVIEW --}}
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                        <div class="tab-pane active" id="reviews">
                            @foreach ($reviews as $review)
                                <div class="comment clearfix">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="comment-avatar"><img
                                                    style="border:1px solid white;height:60px;width:60px;border-radius:50%"
                                                    src="{{ $review->users->image_url_full }}" alt="avatar"></div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div class="comment-content clearfix">
                                                <div class="comment-author font-alt"><a
                                                        href="{{ route('backend.user.show', ['user_id' => $review->user_id]) }}">{{ $review->users->name }}</a>
                                                </div>
                                                <div class="comment-body">
                                                    <p>{{ $review->content }}</p>
                                                </div>
                                                <div class="comment-meta font-alt">
                                                    {{ $review->created_at->format('M d , H:i') }} -<span>
                                                        @php
                                                            $i = 0;
                                                            while ($review->star > 0) {
                                                                echo '<i class="fa fa-star star"></i>';
                                                                $i++;
                                                                $review->star--;
                                                            }
                                                            if ($i < 5) {
                                                                for ($j = 1; $j <= 5 - $i; $j++) {
                                                                    echo '<i class="fa fa-star star-off"></i>';
                                                                }
                                                            }

                                                        @endphp
                                                    </span>-<span>
                                                        <i style="color:red" class="fas fa-heart">
                                                            {{ $review->favories }}</i>
                                                    </span>-
                                                    <span>
                                                        <i style="color:blue;" class="fas fa-reply">
                                                            <span data-bs-toggle="collapse"
                                                                href="#collapseExample-{{ $review->user_id }}"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"
                                                                style="text-decoration-line: underline;text-decoration-style:double">reply</span></i>


                                                    </span>
                                                    @if (!empty($replys))
                                                        @foreach ($replys as $reply)
                                                            @if ($reply->parent_id == $review->user_id)
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-lg-1">
                                                                        <div class="comment-avatar"><img
                                                                                style="border:1px solid white;height:60px;width:60px;border-radius:50%"
                                                                                src="{{ $reply->users->image_url_full }}"
                                                                                alt="avatar"></div>
                                                                    </div>
                                                                    <div class="col-lg-11">
                                                                        <div class="comment-content clearfix">
                                                                            <div class="comment-author font-alt"><a
                                                                                    href="{{ route('backend.user.show', ['user_id' => $reply->user_id]) }}">{{ $reply->users->name }}</a>&ensp;<span>
                                                                                    {{ $reply->created_at->format('M d , H:i') }}
                                                                                </span>
                                                                            </div>
                                                                            <div class="comment-body">
                                                                                </p><span><a href="#">
                                                                                        @
                                                                                        {{ $review->users->name }}</a></span>
                                                                                {{ $reply->content }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    <div class="collapse"
                                                        id="collapseExample-{{ $review->user_id }}">
                                                        <form
                                                            action="{{ route('backend.product.reply', [
                                                                'user_id' => $review->user_id,
                                                            ]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('get')
                                                            <div class="card card-body">
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $review->product_id }}">
                                                                <textarea name="replyReviews" id="" rows="5"></textarea>
                                                                <button type="submit" class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })

        //Carousel
        $('#blogCarousel').carousel({
            interval: 5000
        });
    </script>
@endsection
