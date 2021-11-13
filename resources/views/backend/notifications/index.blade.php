@extends('backend.layouts.master')
@section('title')
    Notification
@endsection
@section('main')
    <div class="card">
        <div class="card-header">
            @include('backend.comporment.btn',[
            'color'=>'success',
            'link'=>'backend.notification.create',
            'icon'=>'plus',
            'name'=>'Create Notification'
            ])
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Create</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Time Create</th>
                        <th>Categoty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->notifications as $key => $notification)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ 1 }}
                            </td>
                            <td>{{ $notification->data['content'] }}</td>
                            <td> <span class="badge badge-info">
                                    @if ($notification->read_at == null)
                                        Unread
                                    @else
                                        Read
                                    @endif
                                </span></td>
                            <td>{{ $notification->created_at->toFormattedDateString() }}</td>
                            <td></td>
                            <td>
                                <a class="btn btn-info" href="" data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <button data-toggle="tooltip" data-placement="top" title="Trash" style="margin-left:15px"
                                    type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i style="color:white" class="fas fa-trash"></i>
                                </button>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="color: red;"><i class="fas fa-exclamation-triangle"></i> Warning!
                                                </h5>
                                                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="fas fa-times fa-lg"></i></button>
                                            </div>
                                            <Strong style="text-align:center">Are you OK?</Strong>
                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')

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
                "searching": false,
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
@endsection
