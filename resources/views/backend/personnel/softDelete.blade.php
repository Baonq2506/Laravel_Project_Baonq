@extends('backend.layouts.master')
@section('title')
    History Delete
@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Delete Employee Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Date</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td></td>
                                <td></td>
                                <td><span class="tag tag-success">Approved</span></td>
                                <td> doner.</td>
                                <td>
                                    <a class="btn btn-success" href="#" data-toggle="tooltip" data-placement="top"
                                        title="Restore">
                                        <i class="fa fa-registered" aria-hidden="true"></i>
                                    </a>

                                    <a class="btn btn-primary" href="#" data-toggle="tooltip" data-placement="top"
                                        title="Show">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
