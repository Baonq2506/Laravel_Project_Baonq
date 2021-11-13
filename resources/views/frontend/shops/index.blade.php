@extends('frontend.layouts.master')
@section('title')
    Shop
@endsection

@section('header')

    <section class="module bg-dark-5 shop-page-header" data-background="/images/LOL/Header/noxus-bastion.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 style="color:black" class="module-title font-alt">Shop Products</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like
                        these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <section class="module-small">
        <div class="container">
            <form class="row" action="{{ route('frontend.shop.getCategory') }}" method="post">
                @csrf
                @method('get')
                <div class="col-sm-4 mb-sm-20">
                    <select class="form-control">
                        <option selected="selected">Default Sorting</option>
                        <option>Popular</option>
                        <option>Latest</option>
                        <option>Average Price</option>
                        <option>High Price</option>
                        <option>Low Price</option>
                    </select>
                </div>
                <div class="col-sm-2 mb-sm-20">
                    <select class="form-control">
                        <option selected="selected">All</option>
                        <option>Woman</option>
                        <option>Man</option>
                    </select>
                </div>
                <div class="col-sm-3 mb-sm-20">
                    <select class="form-control" name="categorySearch">
                        <option selected="selected" value='0'>Select Category</option>
                        @foreach ($prodCate as $cate)
                            <option @if (!empty(request()->get('categorySearch')) && request()->get('categorySearch') == $cate->id)
                                selected="selected"
                                @endif value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-success" type="submit">Apply</button>
                    <a class="btn btn-primary" href="{{ route('frontend.shop.index') }}">All</a>
                </div>
            </form>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module-small">
        <div class="container">
            <div class="row multi-columns-row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img style="border-radius:5px;width:auto;height:150px"
                                    src="{{ Storage::disk('products')->url(json_decode($product->info)[0]->path) }}"
                                    alt="Accessories Pack" />
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span
                                            class="icon-basket">Add To
                                            Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt p-style"><a
                                    href="{{ route('frontend.shop.detail', [
                                        'product_id' => $product->id,
                                    ]) }}"><strong>{{ $product->name }}</strong></a>
                            </h4>
                            {{ number_format($product->sale_price / 22660) }} USD
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-sm-12" style="display: flex;justify-content:center">
                    {{ $products->links('frontend.comporment.paginate') }}
                </div>
            </div>
        </div>
    </section>
@endsection
