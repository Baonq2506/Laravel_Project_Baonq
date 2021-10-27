@extends('backend.layouts.master')
@section('title')
    User
@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users Table</h3>
                    <div class="card-tools">
                        <form action="" method="post">
                            @csrf
                            <div class="input-group input-group-sm" style="width: 400px;">
                                <input type="text" name="name_search" class="form-control float-right" placeholder="Name">
                                <input type="text" name="gender_search" class="form-control float-right"
                                    placeholder="Gender">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
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
                                <td>
                                    <img style="margin-top: -10px;width:50px;height:50px;border:1px solid white;border-radius:50%"
                                        src="/images/logo.ico" alt="">
                                </td>

                                </td>
                                <td> John Doe</td>
                                <td>11-7-2014</td>
                                <td></td>
                                <td></td>

                                <td> doner.</td>
                                <td>

                                    <a class="btn btn-info" href="#" data-toggle="tooltip" data-placement="top"
                                        title="Show">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a> &emsp;
                                    <a class="btn btn-success" href="#" data-toggle="tooltip" data-placement="top"
                                        title="Edit">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <form style="float: left" action="#" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="Trash">
                                            <i class="fas fa-trash"></i>
                                        </button> &emsp;
                                    </form>
                                    <form style="float: left" method="POST" action="#">
                                        @csrf
                                        <button data-toggle="tooltip" data-placement="top" title="Login"
                                            class="btn btn-outline-danger">
                                            <i class="fas fa-user"></i>
                                        </button> &emsp;
                                    </form>
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
