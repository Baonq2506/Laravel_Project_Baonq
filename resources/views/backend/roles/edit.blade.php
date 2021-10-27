@extends('backend.layouts.master')
@section('title')
    Edit Role
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Role</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Role</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
<style>
    .label-info {
        background-color: #17a2b8;

    }

    .bootstrap-tagsinput {
        width: 100%;
    }

    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out,
            border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

</style>
@section('main')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- general form elements -->
                <div class="card card-primary">
                    <form
                        action="{{ route('backend.role.update', [
    'role_id' => $role->id,
]) }}"
                        method="post" enctype="multipart/form-data">
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
                                            <input type="text" name='name' class="form-control" id="exampleInputName1"
                                                placeholder="" value="{{ $role->name }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Permission</label>
                                        <select name="permissions[]" class="duallistbox" multiple="multiple">
                                            @foreach ($permissions as $key => $permiss)
                                                @foreach ($role->permissions as $rp)
                                                    @php
                                                        $selected = '';
                                                        if ($rp->id == $key) {
                                                            $selected = 'selected';
                                                            break;
                                                        }
                                                    @endphp
                                                @endforeach
                                                <option {{ $selected }} value="{{ $key }}">{{ $permiss }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
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
