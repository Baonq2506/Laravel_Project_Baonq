@extends('backend.layouts.master')
@section('title')
    Products
@endsection
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Library List</h4>
                        <div class="add-product">
                            <a href="#">Add Library</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name of Asset</th>
                                        <th>Status</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Setting</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="img/product/book-1.jpg" alt=""></td>
                                        <td>Web Development Book</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>Html, Css</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                        <td>$1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="img/product/book-2.jpg" alt=""></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>PHP</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                        <td>$1700</td>
                                        <td>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="img/product/book-3.jpg" alt=""></td>
                                        <td>Box of pendrive</td>
                                        <td>
                                            <button class="ds-setting">Disabled</button>
                                        </td>
                                        <td>Java</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                        <td>$1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="img/product/book-4.jpg" alt=""></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>PHP</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                        <td>$1200</td>
                                        <td>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="img/product/book-1.jpg" alt=""></td>
                                        <td>Web Development Book</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>Wordpress</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                        <td>$1800</td>
                                        <td>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="img/product/book-2.jpg" alt=""></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>Java</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                        <td>$1000</td>
                                        <td>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Edit"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                data-original-title="Trash"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
