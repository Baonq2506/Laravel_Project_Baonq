@extends('backend.layouts.master')
@section('title')
    Create Employee
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Create Employee</li>
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
                    <form action="{{ route('backend.personnel.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" name='name'
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="exampleInputName1" placeholder="" value=" {{ old('name') }}">
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
                                                <label for="exampleInputName1">Email*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-envelope-square"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="exampleInputName1" placeholder="" value=" {{ old('email') }}">
                                                </div>
                                            </div>
                                            @error('email')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Phone*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" name="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        value=" {{ old('phone') }}"
                                                        data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                                        data-mask>
                                                </div>
                                                @error('phone')
                                                    <div style="margin-top: -10px; margin-bottom: 5px;">
                                                        <small style="margin-top:-5px;color:red">&emsp;*
                                                            {{ $message }}</small>
                                                    </div>
                                                @enderror
                                                <!-- /.input group -->
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Date*</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" name="date" value=" {{ old('date') }}"
                                                        class="form-control datetimepicker-input @error('date') is-invalid @enderror"
                                                        data-target="#reservationdate" />
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('date')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group ">
                                                <label for="exampleInputName1">Gender</label>

                                                <select class='form-control' name="gender" id="">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Address*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-home"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" name="address"
                                                        class="form-control @error('address') is-invalid @enderror"
                                                        id="exampleInputName1" placeholder=""
                                                        value=" {{ old('address') }}">
                                                </div>
                                            </div>
                                            @error('address')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;*
                                                        {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Country</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    name="country" placeholder="" value=" {{ old('country') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="exampleInputName1">City</label>
                                                <input type="text" name="city" class="form-control" id="exampleInputName1"
                                                    placeholder="" value=" {{ old('city') }}">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Description*</label>
                                        @include('backend.comporment.summernote',[
                                        'name'=>'description',
                                        'description' =>'',
                                        'class'=>"@error('description') is-invalid @enderror"
                                        ])
                                    </div>

                                    @error('description')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Password*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-unlock-alt"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="password" name="password" id="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="exampleInputName1" placeholder=""
                                                        value=" {{ old('password') }}">
                                                </div>
                                            </div>
                                            @error('password')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;*
                                                        {{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Comfrim Password*</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-unlock-alt"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="password"
                                                        class="form-control  @error('password_confirmation') is-invalid @enderror"
                                                        id="exampleInputName1" name="password_confirmation" placeholder=""
                                                        name="title">
                                                </div>
                                            </div>
                                            @error('password_confirmation')
                                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                                    <small style="margin-top:-5px;color:red">&emsp;*
                                                        {{ $message }}</small>
                                                </div>
                                            @enderror

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Facebook</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-facebook-f"></i></span>
                                                    </div>
                                                    <input type="text" name="fb_url" class="form-control"
                                                        id="exampleInputName1" placeholder="" name="title">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Linked</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-linkedin"></i></span>
                                                    </div>
                                                    <input type="text" name="linked_url" class="form-control"
                                                        id="exampleInputName1" placeholder="" name="title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Twitter</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                    </div>
                                                    <input type="text" name="switter_url" class="form-control"
                                                        id="exampleInputName1" placeholder="" name="title">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <img style="margin-top:7%;margin-left: 30%;" src="/images/logo.ico" alt="">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Role*</label>
                                        <br>
                                        <select id="test" data-role="tagsinput" name="role" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Decentralization Basic</label>
                                        <br>
                                        <select id="test1" data-role="tagsinput" class="form-control" multiple="multiple"
                                            disabled>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Permission*(<small>You can next. If select Decentralization
                                                Basic</small>)</label>
                                        <select name="permissions[]" class="duallistbox" multiple="multiple">
                                            @foreach ($perArr as $key => $per)
                                                <option value="{{ $key }}">{{ $per }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Avatar*</label>
                                        <div class="file-upload">
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input @error('avatar') is-invalid @enderror"
                                                    name="avatar" type='file' onchange="readURL(this);" accept="image/*" />
                                                <div class="drag-text">
                                                    <h3>Drag and drop a file or select add Image</h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()"
                                                        class="remove-image">Remove
                                                        <span class="image-title">Uploaded Image</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        @error('avatar')
                                            <div style="margin-top: -10px; margin-bottom: 5px;">
                                                <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <a type="submit" href="{{ route('backend.personnel.index') }}"
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
