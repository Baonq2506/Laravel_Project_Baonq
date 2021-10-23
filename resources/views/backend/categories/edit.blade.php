@extends('backend.layouts.master')
@section('title')
    Edit Category
@endsection

@section('main')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Edit Category</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <form method='POST'
                                                action="{{ route('backend.category.update', [
    'category_id' => $category->id,
]) }}">
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <label for="">Name</label>
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder="Name" value="{{ $category->name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Slug</label>
                                                                <input type="text" class="form-control" placeholder="Head"
                                                                    value="{{ $category->slug }}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <label for="">Time Update</label>
                                                                <input type="number" class="form-control" disabled
                                                                    value="{{ $category->updated_at->format('d/m/Y h:i:s') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Time Created</label>
                                                                <input type="text" name="created_at" class="form-control"
                                                                    disabled placeholder=""
                                                                    value="{{ $category->created_at->format('d/m/Y h:i:s') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
