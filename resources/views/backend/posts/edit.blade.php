@extends('backend.layouts.master')
@section('title')
    Edit Post
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
                                <input type="text" name="title" id="inputName" class="form-control"
                                    value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Content</label>
                                @include('backend.comporment.summernote',[
                                'name'=>'content',
                                'description'=>$post->content,
                                ])

                            </div>
                            <div class="form-group">
                                <label>Tag</label>
                                <select class="select2" name="tags[]" multiple="multiple"
                                    data-placeholder="Select a Tag" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        @foreach ($post->tag as $pt)
                                            @php
                                                $selected = '';
                                                if ($pt->id == $tag->id) {
                                                    $selected = 'selected';
                                                    break;
                                                }
                                            @endphp
                                        @endforeach
                                        <option {{ $selected }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputProjectLeader">User Create</label>
                                        <input type="text" id="inputProjectLeader" class="form-control"
                                            value="{{ $post->userCreated->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputClientCompany">User Update</label>
                                        <input type="text" id="inputClientCompany" class="form-control"
                                            value="{{ $post->userUpdated->name }}">
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
                                <input class="form-control" type="text" name="slug" value="{{ $post->slug }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Images</label> <br>
                                <img width="100%" height="255px" src="{{ $post->image_url }}" alt="">
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
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
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
                    <a class="btn btn-danger"
                        href="{{ route('backend.post.destroy', [
    'post_id' => $post->id,
]) }}">Delete</a>
                    <a href="{{ route('backend.post.edit', ['post_id' => $post->id]) }}"
                        class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection
