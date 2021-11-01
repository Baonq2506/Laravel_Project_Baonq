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
                            src="{{ $user->image_url_full }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <br>

                    <div class="row" style="text-align: center">
                        <div class="col-lg-12"> <a href="#"></a>
                            <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                        </div>


                    </div>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
        <div class="col-lg-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About User</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <strong><i class="fas fa-calendar-day"></i> Date</strong>
                            <p class="text-muted">{{ $user->date_format }}</p>
                        </div>
                        <div class="col-lg-6"> <strong><i class="fas fa-transgender-alt"></i>
                                <p class="text-muted">{{ $user->gender_text }}</p>
                            </strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">{{ $user->userInfo->address }}, {{ $user->userInfo->city }}</p>
                        </div>
                        <div class="col-lg-6"> <strong><i class="fas fa-phone mr-1"></i></i> Phone</strong>
                            <p class="text-muted">
                                {{ $user->phoneNumber() }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong><i class="fas fa-user-times"></i> Time Create</strong>

                            <p class="text-muted">{{ $user->userInfo->created_at->toFormattedDateString() }}</p>
                        </div>
                        <div class="col-lg-6"> <strong><i class="fas fa-user-times"></i></i> Last Update</strong>
                            <p class="text-muted">
                                {{ $user->userInfo->updated_at->toFormattedDateString() }}
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
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
