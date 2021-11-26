@extends('backend.layouts.master')
@section('title')
    Edit Product
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <a href="{{ route('backend.product.index') }}"><i style="color:blue" class="fas fa-arrow-left"> </i></a>
        <div class="row">
            <div class="col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                    <form id="fileupload" action="{{ route('backend.product.update', ['product_id' => $product->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-product-hunt"></i></span>
                                                    </div>
                                                    <input type="text" name='name'
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="exampleInputName1" placeholder=""
                                                        value=" {{ $product->name }}">
                                                </div>
                                            </div>
                                            @error('name')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label for="exampleInputName1">Product Category*</label>
                                                <select class="form-control" name="category_id" id="">
                                                    <option value="">- -Select Category- -</option>
                                                    @foreach ($prodCategories as $cate)

                                                        <option @if ($product->category_id == $cate->id)
                                                            selected
                                                            @endif value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category_id')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Origin Price*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-money-bill-wave"></i></span>
                                                    </div>
                                                    <input type="text" name="origin"
                                                        class="form-control @error('origin') is-invalid @enderror"
                                                        value=" {{ $product->origin_price }}" id="currency-field"
                                                        data-type="currency">
                                                </div>
                                                @error('origin')
                                                    <div style=" margin-bottom: 5px;">
                                                        <small style="margin-top:-5px;color:red">&emsp;*
                                                            {{ $message }}</small>
                                                    </div>
                                                @enderror
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Sale Price*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-money-bill-wave"></i></span>
                                                    </div>
                                                    <input type="text" name="sale"
                                                        class="form-control @error('sale') is-invalid @enderror"
                                                        value=" {{ $product->sale_price }}" id="currency-field"
                                                        data-type="currency">
                                                </div>
                                                @error('sale')
                                                    <div style="margin-bottom: 5px;">
                                                        <small style="margin-top:-5px;color:red">&emsp;*
                                                            {{ $message }}</small>
                                                    </div>
                                                @enderror
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Brand*</label>
                                                <select class="form-control" name="brand_id" id="">
                                                    <option value="">- -Select Brand- -</option>
                                                    @foreach ($brands as $brand)
                                                        <option @if ($product->brand_id == $brand->id)
                                                            selected
                                                            @endif value="{{ $brand->id }}">{{ $brand->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('brand_id')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;*
                                                        {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Status*</label>
                                                <select class="form-control" name="status" id="">
                                                    <option value="">--Select status--</option>
                                                    @foreach ($status as $key => $sta)

                                                        <option @if ($product->status == $key)
                                                            selected
                                                            @endif value="{{ $key }}">{{ $sta }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('status')

                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;*
                                                        {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Content*</label>
                                                @include('backend.comporment.summernote',[
                                                'name'=>'content',
                                                'description' =>$product->content,
                                                'class'=>"@error('content') is-invalid @enderror"
                                                ])
                                            </div>

                                            @error('content')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;*
                                                        {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <!-- /.col -->
                                <div class="col-lg-12">
                                    <label for="">Image</label><br>
                                    @foreach ($product->product_image as $ppi)
                                        <img style="width:300px; height:200px"
                                            src="{{ Storage::disk('products')->url($ppi->path) }}" alt="">
                                    @endforeach
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <br>
                                        <label for="">Upload Image*</label>
                                        <input type="file" name="images[]" id="images" multiple class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div id="image_preview" style="width:100%;">

                                        </div>
                                    </div>
                                </div>
                                @error('images')
                                    <div style="margin-top: -10px; margin-bottom: 5px;">
                                        <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                    </div>
                                @enderror
                            </div>

                        </div>
                </div>
                <div class="card-footer">
                    <a type="submit" href="{{ route('backend.product.index') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Update</button>

                </div>
            </div>
            </form>

        </div>
    </div>
    </div>

    </div>

@endsection
@section('css')
    <style>
        .img-div {
            position: relative;
            width: 46%;
            float: left;
            margin-right: 5px;
            margin-left: 5px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .image1 {
            height: 280px;
            object-fit: cover;
            opacity: 1;
            display: block;
            width: 100%;
            max-width: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .img-div:hover .image {
            opacity: 0.3;
        }

        .img-div:hover .middle {
            opacity: 1;
        }

    </style>
@endsection
@section('scripts')
    <script>
        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += " ";
                }

                // // Limit decimal to only 2 digits
                // right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = input_val;

                // final formatting
                if (blur === "blur") {
                    input_val += " ";
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>
    {{-- // Iamage Upload --}}
    <script>
        $(document).ready(function() {
            var fileArr = [];
            $("#images").change(function() {
                // check if fileArr length is greater than 0
                if (fileArr.length > 0) fileArr = [];

                $('#image_preview').html("");
                var total_file = document.getElementById("images").files;
                if (!total_file.length) return;
                for (var i = 0; i < total_file.length; i++) {
                    if (total_file[i].size > 1048576) {
                        return false;
                    } else {
                        fileArr.push(total_file[i]);
                        $('#image_preview').append("<div class='img-div' id='img-div" + i + "'><img src='" +
                            URL.createObjectURL(event.target.files[i]) +
                            "' class='img-responsive image1 img-thumbnail' title='" + total_file[i]
                            .name + "'><div class='middle'><button id='action-icon' value='img-div" +
                            i + "' class='btn btn-danger' role='" + total_file[i].name +
                            "'><i class='fa fa-trash'></i></button></div></div>");
                    }
                }
            });

            $('body').on('click', '#action-icon', function(evt) {
                var divName = this.value;
                var fileName = $(this).attr('role');
                $(`#${divName}`).remove();

                for (var i = 0; i < fileArr.length; i++) {
                    if (fileArr[i].name === fileName) {
                        fileArr.splice(i, 1);
                    }
                }
                document.getElementById('images').files = FileListItem(fileArr);
                evt.preventDefault();
            });

            function FileListItem(file) {
                file = [].slice.call(Array.isArray(file) ? file : arguments)
                for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
                if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
                for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
                return b.files
            }
        });
    </script>


@endsection
