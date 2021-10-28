@extends('backend.layouts.master')
@section('title')
    Personnel
@endsection
@section('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Employee Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Date</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personnel as $person)
                        <tr>
                            <td>{{ $person->id }}</td>
                            <td><img src="{{ $person->image_url_full }}"
                                    style="width:70px;height:70px;border:1px solid white;border-radius:50%" alt=""></td>

                            <td>{{ $person->name }}</td>
                            <td>{{ $person->gender_text }}</td>
                            <td>{{ $person->date_format }}</td>
                            <td>{{ $person->role_text }}</td>
                            <td>
                                <a class="btn btn-info"
                                    href="{{ route('backend.personnel.show', [
    'personnel_id' => $person->id,
]) }}"
                                    data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a> &emsp;
                                <a class="btn btn-success"
                                    href="{{ route('backend.personnel.edit', [
    'personnel_id' => $person->id,
]) }}"
                                    data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <form style="float: left"
                                    action="{{ route('backend.personnel.destroy', [
    'personnel_id' => $person->id,
]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Trash">
                                        <i class="fas fa-trash"></i>
                                    </button> &emsp;
                                </form>
                                <form style="float: left" method="POST"
                                    action="{{ route('backend.personnel.signWithUser', [
    'personnel_id' => $person->id,
]) }}">
                                    @csrf
                                    <button data-toggle="tooltip" data-placement="top" title="Login"
                                        class="btn btn-outline-danger">
                                        <i class="fas fa-user"></i>
                                    </button> &emsp;
                                </form>
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
