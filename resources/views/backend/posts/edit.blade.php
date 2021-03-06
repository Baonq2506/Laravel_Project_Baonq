@extends('backend.layouts.master')
@section('title')
    Edit Post
@endsection
@section('css')
    <style>


    </style>
@endsection
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Posts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Posts</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('main')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form action="{{ route('backend.post.update', [
    'post_id' => $post->id,
]) }}" method="post"
            enctype="multipart/form">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Details</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Title</label>
                                <input type="text" name="title" id="inputName"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}">
                            </div>
                            @error('title')
                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="inputDescription">Content</label>
                                @include('backend.comporment.summernote',[
                                'name'=>'content',
                                'description'=>$post->content,
                                'class'=> "@error('content') is-invalid @enderror"
                                ])

                            </div>
                            @error('content')
                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror
                            <div class="col-lg-12">
                                <div class="form-group" style="width: 100%;">
                                    <label>Tag</label> <br>
                                    <input name="tags[]" id="test2" class="form-control @error('tags') is-invalid @enderror"
                                        data-role="tagsinput" value="         @foreach ($post->tag as $tag)
                                    {{ $tag->name . ',' }}
                                    @endforeach">
                                </div>
                            </div>
                            @error('tags')
                                <div style="margin-top: -10px; margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputProjectLeader">User Create</label>
                                        <input type="text" disabled id="inputProjectLeader" class="form-control"
                                            value="{{ $post->userCreated->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputClientCompany">User Update</label>
                                        <input type="text" disabled id="inputClientCompany" class="form-control"
                                            value="{{ $post->userUpdated->name }}">
                                        <input type="hidden" name="id_updated" value={{ auth()->user()->id }}>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Profile</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Slug</label> <br>
                                <input class="form-control " type="text" name="slug" value="{{ $post->slug }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Images</label> <br>
                                <img width="100%" height="255px" src="{{ $post->image_url_full }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">Status</label>
                                <select name="status" class="form-control">
                                    @foreach ($post->statusArr() as $key => $ps)
                                        @php
                                            $selected = '';
                                            if ($key == $post->status) {
                                                $selected = 'selected';
                                            }
                                        @endphp
                                        <option {{ $selected }} value="{{ $key }}">{{ $ps }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('image_url') is-invalid @enderror"
                                                name="image_url">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('image_url')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <a href="    @if (!empty($post->deleted_at))
                        {{ route('backend.post.historyDelete') }}
                    @else
                        {{ route('backend.post.index') }}
                        @endif" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection
