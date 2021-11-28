@extends('backend.layouts.master')
@section('title')
    Order
@endsection
@section('main')
    <div class="card">
        <div class="card-header">
            List Order
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Money Total</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Time Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td><a style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;"
                                    href="{{ route('backend.product.showOrder', ['order_id' => $order->id]) }}"><strong>{{ json_decode($order->user_info)->name }}</strong></a>
                            </td>
                            <td>
                                {{ $order->money_total }}
                            </td>
                            <td>{!! $order->status_text !!}</td>
                            <td>{!! $order->payment_text !!}</td>
                            <td>{{ $order->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a class="btn btn-info"
                                    href="{{ route('backend.product.showOrder', ['order_id' => $order->id]) }}"
                                    data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a> &emsp;

                                <button type="button" style="float:rigth" class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-danger-{{ $order->id }}" data-toggle="tooltip"
                                    data-placement="top" title="Trash" style="margin-left:15px">
                                    <i style="color:white" class="fas fa-trash"></i>
                                </button>
                                <div class="modal fade" id="modal-danger-{{ $order->id }}">
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
                                                    action="{{ route('backend.product.destroy', ['product_id' => $order->id]) }}"
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
