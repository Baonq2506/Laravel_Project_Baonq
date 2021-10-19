@extends('backend.layouts.master')
@section('title')
    Category All
@endsection

@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Categories List</h4>
                        <div class="add-product">
                            <a href="{{ route('backend.category.create') }}">Create Category</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>No</th>
                                        <th>Name of Cate.</th>
                                        <th>Slug</th>
                                        <th>Time Created</th>
                                        <th>Time Updated</th>
                                        <th>Setting</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Computer</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>

                                        <td>
                                            <a href="">
                                                <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                    data-original-title="Edit" href=""><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></button>
                                            </a>
                                            <a href="">
                                                <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                    data-original-title="Trash"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </a>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
