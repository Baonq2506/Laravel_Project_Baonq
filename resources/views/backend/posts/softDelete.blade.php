@extends('backend.layouts.master')
@section('title')
    History Delete
@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Delete Post Table</h3>

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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date Delete</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{!! $post->status_text !!}</td>
                                    <td> {{ $post->deleted_at->toFormattedDateString() }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('backend.post.restore', [
    'post_id' => $post->id,
]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Restore">
                                            <i class="fa fa-registered" aria-hidden="true"></i>
                                        </a>

                                        <a class="btn btn-primary"
                                            href="{{ route('backend.post.show', [
    'post_id' => $post->id,
]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Show">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-dark"
                                            href="{{ route('backend.post.edit', [
    'post_id' => $post->id,
]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        {{-- <a class="btn btn-danger"
                                            href="{{ route('backend.post.forceDelete', [
    'post_id' => $post->id,
]) }}"
                                            data-toggle="tooltip" data-placement="top" title="Trash">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a> --}}
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
