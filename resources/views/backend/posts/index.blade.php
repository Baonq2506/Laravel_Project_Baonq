@extends('backend.layouts.master')
@section('title')
    List Post
@endsection
@push('stack_css')
    <link rel="stylesheet" href="/css/style.css">
@endpush
@section('css')
    <style>
        .ribbon-wrapper {
            margin-right: 9px;
        }

    </style>
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-7">
                <h1 class="m-0">Blog List</h1>
            </div><!-- /.col -->
            <div class="col-sm-5">
                <div class="card-tools">
                    <form action="" method="post">
                        @csrf
                        <div class="input-group input-group-sm" style="width: 430px;">
                            <input type="text" name="title_search" class="form-control float-right" placeholder="Title"
                                data-toggle="tooltip" data-placement="bottom" title="Category">
                            <select data-toggle="tooltip" data-placement="top" title="Category" class="form-control "
                                name="category_search" id="">
                                <option value="0" selected>All</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <select data-toggle="tooltip" data-placement="bottom" title="Status" class="form-control "
                                name="status_search" id="">
                                <option value="0" selected>All</option>
                                <option value="1">Public</option>
                                <option value="2">Private</option>
                                <option value="3">Approved</option>
                            </select>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('main')
    <div class="container-fluid">
        <div class="row">

            @foreach ($posts as $post)
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class=" ribbon-wrapper">
                        <div class="ribbon bg-{{ $post->statusColor($post->status) }}">
                            {{ $post->statusText($post->status) }}
                        </div>
                    </div>
                    <div class="card mb-2 bg-gradient-dark">
                        @if (!empty($post->image_url))
                            {{-- {{ $post->image_url_full }} --}}
                            <img class="card-img-top" src="{{ $post->image_url_full }}" width="100%" height="240px">
                        @endif
                        <div class="card-img-overlay d-flex flex-column ">
                            <div>
                                <h5 class="card-title text-white text-white text-bold">{{ $post->title }}</h5>
                            </div>
                            <br>
                            <div>
                                <p class="card-text"
                                    style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;word-break: break-word;">
                                    {{ $post->content }}
                                </p>
                            </div>
                            <br>
                            <a href="{{ route('backend.post.show', [
    'post_id' => $post->id,
]) }}">Read
                                More...</a>
                            <a data-toggle="tooltip" data-placement="bottom" title="{{ $post->userUpdated->name }}"
                                href="#" class="text-white">Last update :
                                {{ $post->updated_at->toFormattedDateString() }}</a>

                            <div class="row" style="text-align:center">
                                <div class="col-lg-6">
                                    <a href="" data-toggle="tooltip" data-placement="bottom" title="Trash"><i
                                            style="color:red" class="fas fa-trash-alt"></i></a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ route('backend.post.edit', [
    'post_id' => $post->id,
]) }}"
                                        data-toggle="tooltip" data-placement="bottom" title="Edit"><i style="color:cyan"
                                            class="fas fa-edit"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <br>

                </div>

            @endforeach
        </div>
    </div>
    <br>
    <div style="margin-left:47%;">
        {{ $posts->links('backend.comporment.paginate') }}
    </div>
    <br>
@endsection
