@extends('backend.layouts.master')
@section('title')
    Create Role
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Role</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Create Role</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                    <form action="{{ route('backend.role.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"
                                                        aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" name='name'
                                                class="form-control @error('name') is-invalid @enderror"
                                                id="exampleInputName1" placeholder="">
                                        </div>
                                    </div>
                                    @error('name')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>



                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Permission*</label>
                                        <select name="permissions[]" class="duallistbox" multiple="multiple">
                                            @foreach ($permissions as $key => $per)
                                                <option value="{{ $key }}">{{ $per }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('permissions')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                    <!-- /.form-group -->
                                </div>

                            </div>

                            <div class="card-footer">
                                <a type="submit" href="{{ route('backend.role.index') }}"
                                    class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary float-right">Create</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
