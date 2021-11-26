@extends('frontend.layouts.master')
@section('css')
    <link rel="stylesheet" href="/frontend/css/style_checkout.css">
@endsection

@section('header')
    <section class="module bg-dark-60 blog-page-header" data-background="/images/LOL/Header/z1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Checkout Cart</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like
                        these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('main')
    <br><br><br>
    <!-- breadcrumbs area end -->
    <div class="checkout-area">
        <div class="container">
            <h2> <a href="{{ route('frontend.shop.index') }}"><i style="color:blue" class="fas fa-arrow-left"></i></a></h2>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label> Name <span class="required">*</span></label>
                                        <input placeholder="" type="text" value="{{ auth()->user()->name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input placeholder="" type="text"
                                            value="{{ auth()->user()->userInfo->address ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email<span class="required">*</span></label>
                                        <input placeholder="" type="email" value="{{ auth()->user()->email ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" value="{{ auth()->user()->phoneNumber() ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <div id="cbox-info" class="checkout-form-list create-account">
                                        <p>Create an account by entering the information below. If you are a returning
                                            customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">

                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Your order <span style="float: right"><i class="fa fa-shopping-cart"></i>
                                <b>{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</b></span></h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Product</th>
                                        <th>Quantity</th>
                                        <th>Price (USD)</th>
                                        <th class="cart-product-total">Total (USD)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="cart-item" style="text-align:center">
                                            <td> <strong>{{ $product->name }}
                                                </strong></td>
                                            <td>
                                                <h3>{{ $product->qty }}</h3>
                                            </td>
                                            <td>
                                                <h3>{{ number_format($product->price) }}</h3>
                                            </td>
                                            <td>
                                                <h3>{{ number_format($product->price * $product->qty) }}</h3>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal" style="text-align:center">
                                        <th>Tax</th>
                                        <th></th>
                                        <th></th>
                                        <td><span> 10 %&ensp;</span></td>
                                    </tr>
                                    <tr style="text-align:center">
                                        <th>Order Total*(<small>Tax included</small>)</th>
                                        <td>&ensp;</td>
                                        <td></td>
                                        <td><span>{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}&ensp;USD</span>
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                            </label>
                        </div>
                        <div class="order-button-payment">
                            <br>
                            <a style="width:100%" class="btn btn-primary"
                                href="{{ route('frontend.cart.placeOrder', ['user_id' => auth()->user()->id]) }}">PLACE
                                ORDER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
