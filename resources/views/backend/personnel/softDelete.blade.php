@extends('backend.layouts.master')
@section('title')
    Personnel
@endsection
@push('stack_css')
    <link rel="stylesheet" href="/backend/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="/backend/css/data-table/bootstrap-editable.css">
@endpush
@section('main')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Personnel <span class="table-project-n">Delete</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">ID</th>
                                            <th data-field="name" data-editable="true">Name</th>
                                            <th data-field="email" data-editable="true">Address</th>
                                            <th data-field="phone" data-editable="true">Email</th>
                                            <th data-field="date" data-editable="true">Delete_at</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>1</td>
                                            <td>Web Development</td>
                                            <td>admin@uttara.com</td>
                                            <td>+8801962067309</td>

                                            <td>Jul 14, 2017</td>
                                            <td class="panel-footer contact-footer professor-stds-int professor-stds">

                                                <a href="">
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                        data-original-title="Trash"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></button>
                                                </a>
                                                <a href="">
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                        data-original-title="Detail"><i class="fa fa-search"
                                                            aria-hidden="true"></i></button>
                                                </a>
                                                <a href="">
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                        data-original-title="Restore"><i class="fa fa-reddit-alien"
                                                            aria-hidden="true"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('stack_js')
    <!-- data table JS
                                                                                                                                                                                                      ============================================ -->
    <script src="/backend/js/data-table/bootstrap-table.js"></script>
    <script src="/backend/js/data-table/tableExport.js"></script>
    <script src="/backend/js/data-table/data-table-active.js"></script>
    <script src="/backend/js/data-table/bootstrap-table-editable.js"></script>
    <script src="/backend/js/data-table/bootstrap-editable.js"></script>
    <script src="/backend/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="/backend/js/data-table/colResizable-1.5.source.js"></script>
    <script src="/backend/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
                                                                                                                                                                                                                ============================================ -->
    <script src="/backend/js/editable/jquery.mockjax.js"></script>
    <script src="/backend/js/editable/mock-active.js"></script>
    <script src="/backend/js/editable/select2.js"></script>
    <script src="/backend/js/editable/moment.min.js"></script>
    <script src="/backend/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="/backend/js/editable/bootstrap-editable.js"></script>
    <script src="/backend/js/editable/xediable-active.js"></script>
    <!-- Chart JS
                                                                                                                                                                                              ============================================ -->
    <script src="/backend/js/chart/jquery.peity.min.js"></script>
    <script src="/backend/js/peity/peity-active.js"></script>
@endpush
