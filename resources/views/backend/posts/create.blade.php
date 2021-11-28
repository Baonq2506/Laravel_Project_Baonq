@extends('backend.layouts.master')
@section('title')
    Create Blog
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Create Blog</li>
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
                    <form action="{{ route('backend.post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control  @error('title') is-invalid @enderror"
                                    id="exampleInputName1" placeholder="" name="title" value=" {{ old('title') }}">
                            </div>
                            @error('title')
                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputName1">Content</label>
                                @include('backend.comporment.summernote',[
                                'name'=>'content',
                                'description' => old('content'),
                                'class'=> "@error('content') is-invalid @enderror"
                                ])
                            </div>
                            @error('content')
                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id"
                                            class="form-control  @error('category_id') is-invalid @enderror">
                                            <option value="0">Select a Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control  @error('status') is-invalid @enderror">
                                            <option value="1">Active</option>
                                            <option value="2">Private</option>
                                            <option value="3">Approve</option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-7">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="width: 100%;">
                                            <label>Tag</label> <br>
                                            <input name="tags[]" id="test2"
                                                class="form-control @error('tags') is-invalid @enderror"
                                                data-role="tagsinput" value="    @foreach ($tags as $tag)
                                            {{ $tag->name . ',' }}
                                            @endforeach">
                                        </div>
                                    </div>
                                    @error('tags')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="form-group">
                                <label for="">Images</label>
                                <div class="file-upload">
                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input  @error('image_url') is-invalid @enderror"
                                            name="image_url" type='file' onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">Remove
                                                <span class="image-title">Uploaded Image</span></button>
                                        </div>
                                    </div>
                                </div>
                                @error('image_url')
                                    <div style="margin-top: -10px; margin-bottom: 5px;">
                                        <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                    </div>
                                @enderror
                            </div>

                            <div class="card-footer">
                                <a type="submit" href="{{ route('backend.post.index') }}"
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
