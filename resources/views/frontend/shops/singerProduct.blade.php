@extends('frontend.layouts.master')
@section('title')
    Detail Product
@endsection
@section('style')
    <style>
        .tab-pane img {
            width: 100%;
            height: 370px;
        }

        .ex-product .active img {
            width: 100%;
            height: 50px;
        }

        .row .fix-a a:first-child :hover {
            color: red;
        }

        .row .fix-a a {
            border: 1px solid black;
            border-radius: 50%;
            color: black;
            display: inline-block;
            font-size: 13px;
            height: 50px;
            line-height: 60px;
            text-align: center;
            width: 50px;
        }

    </style>
@endsection
@section('main')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-sm-40">
                    <div class="tab-content">
                        @foreach ($images as $key => $image)
                            <div id="menu-{{ $image->id }}"
                                class="tab-pane fade in @if ($key == 0)
                                active
                            @endif">
                                <img src="{{ $image->image_url_full }}" alt="" />
                            </div>
                        @endforeach

                    </div>
                    <div class="owl-carousel text-center" data-items="


                                                                @if (count($images) < 5)
                        {{ count($images) }}
                    @else
                        5
                        @endif" data-pagination="false"
                        data-navigation="false">
                        @foreach ($images as $key => $image)
                            <div class="owl-item">
                                <div class="col-sm-12">
                                    <div class="ex-product">
                                        <a class="active" data-toggle="pill" href="#menu-{{ $image->id }}"> <img
                                                style="


                                                @if (count($images) < 5)
                                            height: 67px !important;width:100px
                                            @endif " src="{{ $image->image_url_full }}"
                                            alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="product-title font-alt">{{ $product->name }}</h1>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i
                                    class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i
                                    class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a
                                class="open-tab section-scroll"
                                href="#reviews">&ensp;{{ number_format($product->review_count) }}</a>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-12">
                            <div class="price font-alt"><span
                                    class="amount">{{ number_format($product->sale_price) }} USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-12">
                            <div class="description">
                                <p>{{ $product->content }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-2 mb-sm-20">
                            <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1"
                                required="required" />
                        </div>
                        <div class="col-sm-6"><a style="border-radius: 20px"
                                class="btn btn-lg btn-block btn-round btn-b"
                                href="{{ route('frontend.cart.add', ['product_id' => $product->id]) }}">Add To
                                Cart</a>
                        </div>
                        <div class="col-sm-4">
                            <div class="row fix-a">
                                <div class="col-sm-6">
                                    <a href=""><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('frontend.shop.index') }}">
                                        <i class=" fa fa-reply fa-2x" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-12">
                            <div class="product_meta">Categories:
                                <a href="#">{{ $product->prodCategories->name }}</a>

                            </div>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-12">
                            <h5>Share on</h5>
                            <a style="margin-right: 15px" href="#"><i style="color:rgb(37, 104, 190)"
                                    class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            <a style="margin-right: 15px" href="#"><i style="color:rgb(28,160,242)"
                                    class=" fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                            <a style="margin-right: 15px" href="#"><i style="color:red" class=" fa fa-google-plus fa-2x"
                                    aria-hidden="true"></i></a>
                            <a style="margin-right: 15px" href="#"><i style="color:rgb(37, 104, 190)"
                                    class=" fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                            <a style="margin-right: 15px" href="#"><i style="color:orange" class=" fa fa-rss fa-2x "
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-70">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs font-alt" role="tablist">
                        <li class="active"><a href="#description" data-toggle="tab"><span
                                    class="icon-tools-2"></span>Description</a></li>
                        <li><a href="#data-sheet" data-toggle="tab"><span
                                    class="icon-tools-2"></span>Comments({{ number_format($comments->count()) }})</a>
                        </li>
                        <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews
                                ({{ number_format($reviews->count()) }})</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <p>{{ $product->option }}</p>
                        </div>
                        {{-- COMMENT --}}
                        <div class="tab-pane" id="data-sheet">
                            <table class="table table-striped ds-table table-responsive">
                                <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <th>Info</th>
                                    </tr>
                                    <tr>
                                        <td>Compositions</td>
                                        <td>Jeans</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>44, 46, 48</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>Somebrand</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- REVIEWS --}}
                        <div class="tab-pane" id="reviews" style="height:600px;width:100%;overflow:scroll">
                            @foreach ($reviews as $review)
                                <div class="comment clearfix">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="comment-avatar"><img
                                                    style="border:1px solid white;height:60px;width:60px;border-radius:50%"
                                                    src="{{ $review->users->image_url_full }}" alt="avatar"></div>
                                        </div>
                                        <div class="col-lg-11" style="margin-left: -70px;">
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
                                                    @if (!empty($replyReviews))
                                                        @foreach ($replyReviews as $reply)
                                                            @if ($reply->parent_id == $review->user_id)
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-lg-1">
                                                                        <div class="comment-avatar"><img
                                                                                style="border:1px solid white;height:60px;width:60px;border-radius:50%"
                                                                                src="{{ $reply->users->image_url_full }}"
                                                                                alt="avatar"></div>
                                                                    </div>
                                                                    <div class="col-lg-11" style="margin-left: -70px;">
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
                            @endforeach

                            <div class="comment-form mt-30">
                                <h4 class="comment-form-title font-alt">Add review</h4>
                                <form method="post" action="{{ route('backend.review.store') }}">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="sr-only" for="name">Name</label>
                                                <input class="form-control" id="name" type="text" name="name"
                                                    value="{{ auth()->user()->name }}" placeholder="Name" disabled />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Name</label>
                                                <input class="form-control" id="email" type="text" name="email"
                                                    value="{{ auth()->user()->email }}" placeholder="E-mail" disabled />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select name="star" class="form-control">
                                                    <option selected="true">Rating</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="" name="content" rows="4"
                                                    placeholder="Review"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-round btn-d" type="submit">Submit Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Related Products</h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                @foreach ($relatedProducts as $rp)
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img style="width:100%;height:160px"
                                    src="{{ Storage::disk('products')->url(json_decode($rp->info)[0]->path) }}"
                                    alt="Accessories Pack" />
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span
                                            class="icon-basket">Add
                                            To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt p-style"><a
                                    href="{{ route('frontend.shop.detail', ['product_id' => $rp->id]) }}">{{ $rp->name }}</a>
                            </h4>
                            {{ number_format($rp->sale_price) }} USD
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="display:flex;justify-content:center;"><a class="btn btn-info"
                    href="{{ route('frontend.shop.getCategoryId', ['category_id' => $product->category_id]) }}">All See
                    Related
                    Products</a></div>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Exclusive products</h2>
                    <div class="module-subtitle font-serif">The languages only differ in their grammar, their pronunciation
                        and their most common words.</div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
                    @foreach ($exclusiveProducts as $ep)
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img
                                            src="{{ Storage::disk('products')->url(json_decode($ep->info)[0]->path) }}"
                                            alt="Leather belt" /></a>
                                    <h4 class="shop-item-title font-alt p-style"><a
                                            href="{{ route('frontend.shop.detail', ['product_id' => $ep->id]) }}">{{ $ep->name }}</a>
                                    </h4>
                                    {{ number_format($ep->sale_price) }} USD
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
