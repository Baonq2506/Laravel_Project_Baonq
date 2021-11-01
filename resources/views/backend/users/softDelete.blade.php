@extends('backend.layouts.master')
@section('title')
    History Delete
@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Delete User Table</h3>

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
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img style="margin-top: -10px;width:50px;height:50px;border:1px solid white;border-radius:50%"
                                            src="{{ $user->image_url_full }}" alt=""></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->gender_text }}</td>
                                    <td>{{ $user->date_format }}</td>
                                    <td>{{ $user->userInfo->city }}</td>

                                    <td> {{ $user->phoneNumber() }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('backend.user.restore', [
    'user_id' => $user->id,
]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Restore">
                                            <i class="fa fa-registered" aria-hidden="true"></i>
                                        </a>

                                        <form style="float: left"
                                            action="{{ route('backend.user.forceDelete', [
    'user_id' => $user->id,
]) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                                title="Trash">
                                                <i class="fas fa-trash"></i>
                                            </button> &emsp;
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
