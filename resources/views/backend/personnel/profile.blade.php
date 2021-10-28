@extends('backend.layouts.master')
@section('title')
    Profile
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('main')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img style="width:150px !important;" class="profile-user-img img-fluid img-circle"
                            src="{{ $personnel->image_url_full }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $personnel->name }}</h3>

                    <p class="text-muted text-center">{{ $personnel->role_text }}</p>

                    <div class="row" style="text-align: center">
                        <div class="col-lg-4"> <a href="#"></a>
                            <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                        </div>
                        <div class="col-lg-4"> <a href="#"></a>
                            <a style="color:rgb(52, 204, 250)" href="#"><i class="fab fa-twitter fa-lg"></i></a>
                        </div>
                        <div class="col-lg-4"> <a href="#"></a>
                            <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                    <p class="text-muted">{{ $personnel->userInfo->country }}, {{ $personnel->userInfo->city }}</p>
                    <hr>
                    <strong><i class="fas fa-phone mr-1"></i></i> Phone</strong>
                    <p class="text-muted">
                        {{ $personnel->userInfo->phone }}
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted"
                        style="display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;word-break: break-word;">
                        {{ $personnel->userInfo->description }}</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity"
                                data-toggle="tab">Activity</a></li>

                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active" id="activity">
                            <!-- Post -->
                            @foreach ($perposts as $perpost)
                                <div class="post col-lg-12">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{ $personnel->image_url_full }}"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">{{ $personnel->name }}</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">{!! $perpost->status_text !!} -
                                            {{ $perpost->created_at->toFormattedDateString() }}</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <strong><a
                                            href="{{ route('backend.post.show', [
    'post_id' => $perpost->id,
]) }}">{{ $perpost->title }}</a></strong>
                                    <p class="card-text"
                                        style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;word-break: break-word;">
                                        {!! $perpost->content !!}
                                    </p>
                                    <a href="{{ route('backend.post.show', [
    'post_id' => $perpost->id,
]) }}">Read
                                        more...</a>
                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
                                            <a type="button" id="cmt-{{ $perpost->id }}" onclick="myFunction(this)"
                                                class=" btn">
                                                <i class="far fa-comments "></i> Comments <span class="fb-comments-count"
                                                    data-href="https://project-baonq.herokuapp.com/blog/{{ $perpost->category->name }}/{{ $perpost->slug }}/{{ $perpost->id }}"></span>
                                            </a>
                                        </span>
                                    </p>

                                    <div style="display: none;height:150px;overflow: auto;z-index:1" class="fb-comments"
                                        id="Ccmt-{{ $perpost->id }}"
                                        data-href="https://project-baonq.herokuapp.com/blog/{{ $perpost->category->name }}/{{ $perpost->slug }}/{{ $perpost->id }}"
                                        data-width="100%" data-numposts="2">
                                    </div>
                                </div>
                            @endforeach
                            <!-- /.post -->
                        </div>
                        <hr>
                        <div style="margin-left: 40%;margin-top:25px">
                            {{ $perposts->links() }}
                        </div>

                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function myFunction(e) {
            var x = document.getElementById("C" + e.id);
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
    </script>
@endsection
