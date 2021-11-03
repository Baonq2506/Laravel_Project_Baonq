@extends('backend.layouts.master')
@section('title')
    User
@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    {{-- <h3 class="card-title">Users Table</h3> --}}
                    @include('backend.comporment.btn',[
                    'color'=>'primary',
                    'link'=>'backend.user.create',
                    'icon'=>'plus',
                    'name'=>'Create User'
                    ])
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
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <img style="margin-top: -10px;width:50px;height:50px;border:1px solid white;border-radius:50%"
                                            src="{{ $user->image_url_full }}" alt="">
                                    </td>
                                    <td> {{ $user->name }}</td>
                                    <td>{{ $user->gender_text }}</td>
                                    <td>{{ $user->date_format }}</td>
                                    <td>{{ $user->userInfo->city }}</td>
                                    <td>{{ $user->userInfo->phone }}</td>
                                    <td>
                                        <a class="btn btn-info"
                                            href="{{ route('backend.user.show', ['user_id' => $user->id]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Show">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a> &emsp;
                                        <a class="btn btn-success"
                                            href="{{ route('backend.user.edit', ['user_id' => $user->id]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <form style="float: left"
                                            action="{{ route('backend.user.destroy', ['user_id' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                                title="Trash">
                                                <i class="fas fa-trash"></i>
                                            </button> &emsp;
                                        </form>
                                        <form style="float: left" method="POST"
                                            action="{{ route('backend.user.signWithID', ['user_id' => $user->id]) }}">
                                            @csrf
                                            <button data-toggle="tooltip" data-placement="top" title="Login"
                                                class="btn btn-outline-danger">
                                                <i class="fas fa-user"></i>
                                            </button> &emsp;
                                        </form>

                                        <button data-toggle="tooltip" data-placement="top" title="Ban"
                                            style="margin-left:15px" type="button" class="btn btn-danger"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-ban"></i>
                                        </button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="color: red;"><i class="fas fa-exclamation-triangle"></i>
                                                            Warning!
                                                        </h5>
                                                        <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times fa-lg"></i></button>
                                                    </div>
                                                    <form action="{{ route('backend.user.banned') }}" method="post">
                                                        @csrf
                                                        @method('get')
                                                        <input type="text" value="{{ $user->id }}">
                                                        <div class="form-group">
                                                            <label for=""> &ensp;Time Expired</label>
                                                            <input type="date" class="form-control" name="time_expires"
                                                                id="time_expires">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">&ensp; Comment</label>
                                                            <textarea class="form-control" type="text" rows="5"
                                                                name="comments"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-danger" type="submit">
                                                                Ban
                                                            </button> &emsp;
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div style="margin-left: 45%">{{ $users->links('backend.comporment.paginate') }}</div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
