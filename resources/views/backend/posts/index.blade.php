@extends('backend.layouts.master')
@section('title')
    Posts
@endsection
@section('main')
    <div class="card">
        <div class="card-header">
            @include('backend.comporment.btn',[
            'color'=>'primary',
            'link'=>'backend.post.create',
            'icon'=>'plus',
            'name'=>'Create Post'
            ])
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th style="width:100px">Title</th>
                        <th>Category</th>
                        <th>User Create</th>
                        <th>Status</th>
                        <th>Time Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{ $post->image_url_full }}"
                                    style="width:100px;height:70px;border:1px solid white" alt=""></td>

                            <td><a
                                    href="{{ route('backend.post.show', ['post_id' => $post->id]) }}"><strong>{{ $post->title }}</strong></a>
                            </td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->userCreated->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {!! $post->status_text !!}
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a style="color:green" class="dropdown-item"
                                                href="{{ route('backend.post.approvedAction', ['post_id' => $post->id, 'id' => 1]) }}"><strong>Public</strong></a>
                                        </li>
                                        <li><a style="color:red" class="dropdown-item"
                                                href="{{ route('backend.post.approvedAction', ['post_id' => $post->id, 'id' => 2]) }}"><strong>Private</strong></a>
                                        </li>
                                        <li><a style="color:blue" class="dropdown-item"
                                                href="{{ route('backend.post.approvedAction', ['post_id' => $post->id, 'id' => 3]) }}"><strong>Approved</strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>{{ $post->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a class="btn btn-info"
                                    href="{{ route('backend.post.show', ['post_id' => $post->id]) }}"
                                    data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a> &emsp;
                                <a class="btn btn-success"
                                    href="{{ route('backend.post.edit', ['post_id' => $post->id]) }}"
                                    data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>


                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-danger-{{ $post->id }}" data-toggle="tooltip"
                                    data-placement="top" title="Trash" style="margin-left:15px">
                                    <i style="color:white" class="fas fa-trash"></i>
                                </button>
                                <div class="modal fade" id="modal-danger-{{ $post->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><i class="fas fa-exclamation-triangle"></i>
                                                    Warning!
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body ">
                                                <p>Are you delete ?</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light"
                                                    data-dismiss="modal">Close</button>
                                                <form
                                                    action="{{ route('backend.post.destroy', ['post_id' => $post->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-light" type="submit">
                                                        Delete
                                                    </button> &emsp;

                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
@section('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "searching": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script src="/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/backend/plugins/jszip/jszip.min.js"></script>
    <script src="/backend/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/backend/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .dropdown-menu {
            min-width: auto !important;
        }

    </style>
@endsection
