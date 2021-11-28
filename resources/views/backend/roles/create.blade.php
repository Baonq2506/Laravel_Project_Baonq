@extends('backend.layouts.master')
@section('title')
    Create Role
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Role</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Create Role</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                    <form action="{{ route('backend.role.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"
                                                        aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" name='name'
                                                class="form-control @error('name') is-invalid @enderror"
                                                id="exampleInputName1" placeholder="">
                                        </div>
                                    </div>
                                    @error('name')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                </div>



                                <div class="col-12">
                                    <ul id="tree1">
                                        @foreach ($perArr as $per)
                                            <li>
                                                <i class="fas fa-plus"></i>
                                                {{ $per->name }}
                                                @if ($per->children)
                                                    @include('backend.personnel.manageChild',['childs' =>
                                                    $per->children])
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                    @error('permissions')
                                        <div style="margin-top: -10px; margin-bottom: 5px;">
                                            <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                        </div>
                                    @enderror
                                    <!-- /.form-group -->
                                </div>

                            </div>

                            <div class="card-footer">
                                <a type="submit" href="{{ route('backend.role.index') }}"
                                    class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary float-right">Create</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('css')
    <style>
        .tree,
        .tree ul {
            margin: 0;
            padding: 0;
            list-style: none;
            cursor: pointer;
        }

        .tree ul {
            margin-left: 1em;
            position: relative
        }

        .tree ul ul {
            margin-left: .5em
        }

        .tree ul:before {
            content: "";
            display: block;
            width: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-left: 1px solid
        }

        .tree li {
            margin: 0;
            padding: 0 1em;
            line-height: 2em;
            color: #369;
            font-weight: 700;
            position: relative
        }

        .tree ul li:before {
            content: "";
            display: block;
            width: 10px;
            height: 0;
            border-top: 1px solid;
            margin-top: -1px;
            position: absolute;
            top: 1em;
            left: 0
        }

        .tree ul li:last-child:before {
            background: #fff;
            height: auto;
            top: 1em;
            bottom: 0
        }

        .indicator {
            margin-right: 5px;
        }

        .tree li a {
            text-decoration: none;
            color: #369;
        }

        .tree li button,
        .tree li button:active,
        .tree li button:focus {
            text-decoration: none;
            color: #369;
            border: none;
            background: transparent;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            outline: 0;
        }

    </style>
@endsection
@section('scripts')
    <script>
        $.fn.extend({
            treed: function(o) {

                var openedClass = 'fas fa-minus';
                var closedClass = 'fas fa-plus';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                };

                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function() {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function(e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function() {
                    $(this).on('click', function() {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
        /*Select All */
        // $(document).ready(function() {
        //     $('#selectAll').click(function() {
        //         $('input[type="checkbox"]').prop('checked', this.checked);
        //     })
        // });
    </script>

@endsection
