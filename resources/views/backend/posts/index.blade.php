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

        .dropdown {
            position: absolute;
            margin-left: -30px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

    </style>

@endsection

@section('main')
    <div class="row">
        <div class="col-lg-6">
            <h3>Blog List</h3>
        </div>
        <div class="col-sm-6">
            <div style="float: right;" class="card-tools">
                <form action="{{ route('backend.post.index') }}" method="get">

                    <div class="input-group input-group-sm" style="width: 430px;">
                        <input type="text" name="title_search" value="{{ request()->get('title_search') }}"
                            class="form-control float-right" placeholder="Title" data-toggle="tooltip"
                            data-placement="bottom">
                        <select data-toggle="tooltip" data-placement="top" title="Category" class="form-control "
                            name="category_search" id="">
                            <option value="0" selected>All</option>
                            @foreach ($categories as $category)
                                <option @if ($category->id = request()->get('category_search'))
                                    selected
                                    @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <select data-toggle="tooltip" data-placement="bottom" title="Status" class="form-control "
                            name="status_search" id="">
                            <option value="">All</option>
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
        </div>
    </div>
    <hr>
    <br>
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
                            <img class="card-img-top" src="{{ $post->image_url_full }}" width="100%" height="250px">
                        @endif
                        <div class="card-img-overlay d-flex flex-column ">
                            <div>
                                <h5 class="card-title text-white text-bold ">
                                    <span
                                        style="  display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;word-break: break-word;">{{ $post->title }}</span>
                                </h5>
                            </div>
                            <br>
                            <div>
                                <p class="card-text "
                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;text-overflow: ellipsis; word-break: break-word;">
                                    {{ $post->content }}
                                </p>
                            </div>
                            <br>
                            <a style="color: deepskyblue;font-weight: bold;"
                                href="{{ route('backend.post.show', [
    'post_id' => $post->id,
]) }}">Read
                                More...</a>
                            <a data-toggle="tooltip" data-placement="bottom" title="{{ $post->userUpdated->name }}"
                                href="#" class="text-white">Last update :
                                {{ $post->updated_at->toFormattedDateString() }}</a>

                            <div class="row" style="text-align:center">
                                <div class="col-lg-6">
                                    <button data-toggle="tooltip" data-placement="top" title="Trash"
                                        style="float: left;opacity:0.6" type="button" class="btn btn-light"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i style="color:red" class="fas fa-trash"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="color: red;">Reason</h5>
                                                    <button style="border: 1px solid white;" type="button"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="fas fa-times fa-lg"></i></button>
                                                </div>
                                                <form
                                                    action="{{ route('backend.post.destroy', [
    'post_id' => $post->id,
]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input style="width:100%" type="text" class="modal-body"
                                                        name="reason">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-danger" type="submit">
                                                            Delete
                                                        </button> &emsp;
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                    </form>


                                </div>

                                <div class="col-lg-6">

                                    <div class="dropdown">
                                        <button data-toggle="tooltip" data-placement="bottom" title="Browse article"
                                            class="btn btn-dark"><i class="fab fa-pushed"></i>&ensp;<i
                                                class="fas fa-caret-down"></i></button>
                                        <div class="dropdown-content ">
                                            @foreach ($post->statusArr() as $key => $value)
                                                <a class="btn-{{ $post->statusColor($key) }}"
                                                    href="{{ route('backend.post.approvedAction', [
    'post_id' => $post->id,
    'id' => $key,
]) }}">{{ $value }}</a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <a class="btn btn-dark" style="opacity:0.7;float:right"
                                        href="{{ route('backend.post.edit', [
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
