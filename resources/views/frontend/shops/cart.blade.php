@extends('frontend.layouts.master')
@section('title')
    Cart
@endsection

@section('main')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="module-title font-alt">Checkout</h1>
                </div>
            </div>
            <a href="{{ route('frontend.shop.index') }}"><i style="color:blue" class="fas fa-exchange-alt fa-lg"> Return to
                    shop</i></a><br>
            <hr class="divider-w pt-20">
            <div class="row">
                <div class="col-sm-12">

                    <table class="table table-striped table-border checkout-table">
                        <tbody>
                            <tr>
                                <th class="hidden-xs">Item</th>
                                <th>Description</th>
                                <th class="hidden-xs">Price(USD)</th>
                                <th>Quantity</th>
                                <th>Total(USD)</th>
                                <th>Remove</th>
                            </tr>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="hidden-xs"><a href="#">
                                            @if ($product->options->has('image'))
                                                <img src="{{ Storage::disk('products')->url($product->options->image) }}"
                                                    alt="Accessories Pack">
                                            @endif
                                        </a></td>
                                    <td>
                                        <h5 class="product-title font-alt">{{ $product->name }}</h5>
                                    </td>
                                    <td class="hidden-xs">
                                        <h5 class="product-title font-alt">{{ number_format($product->price) }}</h5>
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="" value="{{ $product->qty }}"
                                            max="50" min="1">
                                    </td>
                                    <td>
                                        <h5 class="product-title font-alt">
                                            {{ number_format($product->price * $product->qty) }}</h5>
                                    </td>
                                    <td class="pr-remove"><a
                                            href="{{ route('frontend.cart.remove', ['row_id' => $product->rowId]) }}"
                                            title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div style="float:right" class="col-sm-3 col-sm-offset-3">
                    <div class="form-group">
                        <a href="{{ route('frontend.cart.destroy') }}" class="btn btn-block btn-round btn-d pull-right"
                            type="submit">Remove Order</a>
                    </div>
                </div>
            </div>
            <hr class="divider-w">
            <div class="row mt-70">
                <div class="col-sm-5 col-sm-offset-7">
                    <div class="shop-Cart-totalbox">
                        <h4 class="font-alt">Cart Totals</h4>
                        <table class="table table-striped table-border checkout-table">
                            <tbody>
                                <tr>
                                    <th>Cart Subtotal :</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}&ensp;(USD)</td>
                                </tr>
                                <tr>
                                    <th>Shipping Total :</th>
                                    <td>£2.00</td>
                                </tr>
                                <tr class="shop-Cart-totalprice">
                                    <th>Total :</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}&ensp;(USD)</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('frontend.cart.checkout', ['user_id' => auth()->user()->id]) }}"
                            class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
