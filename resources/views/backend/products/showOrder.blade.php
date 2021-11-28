@extends('backend.layouts.master')
@section('title')
    Detail Order
@endsection

@section('main')
    <div class="card card-solid">
        <div class="card-body">
            <a href="{{ route('backend.product.order') }}"><i class="fas fa-arrow-left"></i></a>
            <br>
            <h4>Order ID: {{ $orders->id }}@if ($orders->status == 1)
                    <span style="float:right"><a
                            href="{{ route('backend.order.update', ['order_id' => $orders->id, 'status_id' => 5]) }}"
                            class="btn btn-primary">Order
                            confirm</a>
                        <a href="{{ route('backend.order.update', ['order_id' => $orders->id, 'status_id' => 3]) }}"
                            class="btn btn-danger">Cancel order</a></span>
                @elseif ($orders->status == 5)
                    <span style="float:right"><a
                            href="{{ route('backend.order.update', ['order_id' => $orders->id, 'status_id' => 2]) }}"
                            class="btn btn-primary">Shipped</a>
                    </span>
                @endif
            </h4>
            <br>
            <div class="row">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Product Count</th>
                            <th>Discount</th>
                            <th>Sale Price</th>
                            <th>Money Total(VNĐ)</th>
                            <th>Time Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_prods as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td><img src="                      @foreach ($images as
                                        $image)
                                    @if ($order->product_id == $image[0]->product_id)
                                        {{ Storage::disk('products')->url($image[0]->path) }}
                                    @endif
                                    @endforeach" width="100px" alt="">
                                </td>
                                <td><a style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;"
                                        href="{{ route('backend.product.show', ['product_id' => $order->product_id]) }}"><strong>
                                            @foreach ($products as $product)
                                                @if ($order->product_id == $product->id)
                                                    {{ $product->name }}
                                                @endif
                                            @endforeach
                                        </strong></a>
                                </td>
                                <td>{{ number_format($order->prod_count) }}</td>
                                <td>{{ number_format($order->discount_value) }}</td>
                                <td>{{ number_format($order->sale_price) }}</td>
                                <td>{{ number_format($order->money_total) }}</td>
                                <td>{{ $orders->date_format }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style='text-align:center'>Money Total (VNĐ)</th>
                            <th>{{ number_format($order_prods->sum('money_total')) }}</th>
                        </tr>
                        <tr>
                            <th style='text-align:center'>Payment Method</th>
                            <th>{!! $orders->payment_text !!}</th>
                        </tr>
                        <tr>
                            <th style='text-align:center'>Status</th>
                            <th>{!! $orders->status_text !!}</th>

                        </tr>
                    </thead>

                </table>
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
    </script>
@endsection
