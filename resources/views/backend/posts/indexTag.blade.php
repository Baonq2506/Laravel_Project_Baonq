@extends('backend.layouts.master')
@section('title')
    Tag
@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tag Table</h3>

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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Time Create</th>
                                <th>Time Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{!! $tag->tag_text !!}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>{{ $tag->created_at->toFormattedDateString() }}</td>
                                    <td> {{ $tag->updated_at->toFormattedDateString() }}</td>
                                    <td>
                                        <form action="{{ route('backend.tag.destroy', [
    'tag_id' => $tag->id,
]) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                                title="Trash">
                                                <i class="fas fa-trash"></i>
                                            </button> &emsp;
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="margin-left: 45%">{{ $tags->links('backend.comporment.paginate') }}</div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
