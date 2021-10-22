@extends('backend.layouts.master')
@section('title')
    Role
@endsection
@section('main')
    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 breadcome-heading">
                        <form role="search" class="sr-input-func">
                            <input type="text" style="colr:black" placeholder="Search..." class="search-int form-control">
                            <a href="#"><i style="color:red" class="fa fa-search"></i></a>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                        @include('backend.comporment.btn',[
                        'name'=>'Create Role',
                        'color'=>'success',
                        'icon'=>'plus',
                        'link'=>'backend.role.create',
                        ])

                    </div>
                </div><br> <br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Roles Table</h1>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Permission</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mamun</td>
                                            <td>Roshid</td>
                                            <td>@Facebook</td>
                                            <td></td>
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
