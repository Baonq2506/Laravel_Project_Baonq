@extends('frontend.layouts.master')

@section('style')
    <style>
        section {
            font-size: 1.5rem;
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            /* border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0; */
            background-color: rgb(63, 61, 61, 0.9);
            color: white
        }

        .card .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }

        .container-fluid {
            padding-right: 10%;
            padding-left: 10%;
            margin-right: auto;
            margin-left: auto;
        }

        .card-header h4,
        h6 {
            font-size: 2rem;
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .img-profile img {
            border: 1px solid black !important;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 auto;
            margin-top: 5px;
        }

        .main {
            background-image: url('/images/LOL/Header/pexels-photo-3222686.jpeg');
        }

    </style>
@endsection
@section('main')
    <section class="container">
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Success!</strong> Your profile has been updated!
        </div>
        <div class="main-content-container container-fluid ">
            <!-- Page Header -->
            <div>
                <div style="text-align:center;">
                    <h1 style="color:white;font-size:4rem;">Profile</h1>
                </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-small mb-4 pt-3">
                        <div class="card-header border-bottom text-center">
                            <div class="img-profile">
                                <img class="rounded-circle" src="{{ $user->image_url_full }}" alt="User Avatar"
                                    width="110">
                            </div>
                            <h4 class="mb-0">{{ $user->name }}</h4>
                            <div class="row">
                                <div>
                                    <a class="btn btn-info"
                                        href="{{ route('frontend.cart.order', ['user_id' => auth()->user()->id]) }}">My
                                        Order</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Account Details</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <form
                                            action="{{ route('frontend.account.update', ['account_id' => auth()->user()->id]) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('get')
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="feFirstName"> Name</label>
                                                    <input type="text" class="form-control" required id="feFirstName"
                                                        name="name" placeholder="First Name" value="{{ $user->name }}">
                                                    @error('name')
                                                        <div style="margin-top: -5px; margin-bottom: 5px;">
                                                            <small style="margin-top:-5px;color:red">&emsp;*
                                                                {{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="feLastName">Gender</label>
                                                    <select class='form-control' name="gender" id="">
                                                        <option @if ($user->userInfo->gender == 1)
                                                            selected
                                                            @endif value="1">Male</option>
                                                        <option @if ($user->userInfo->gender == 2)
                                                            selected
                                                            @endif value="2">Female</option>
                                                        <option @if ($user->userInfo->gender == 3)
                                                            selected
                                                            @endif value="3">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="feEmailAddress">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="feEmailAddress" placeholder="Email" required
                                                        value="{{ $user->email }}">
                                                    @error('email')
                                                        <div style="margin-top: -5px; margin-bottom: 5px;">
                                                            <small style="margin-top:-5px;color:red">&emsp;*
                                                                {{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="feInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="feInputAddress"
                                                        name="address" required placeholder=""
                                                        value="{{ $user->userInfo->address ?? '' }}">
                                                    @error('address')
                                                        <div style="margin-top: -5px; margin-bottom: 5px;">
                                                            <small style="margin-top:-5px;color:red">&emsp;*
                                                                {{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="fePassword">Date</label>
                                                    <input type="text" class="form-control" id="fePassword" name="date"
                                                        required value="{{ $user->date_format ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="feInputCity">City</label>
                                                    <input type="text" required class="form-control" id="feInputCity"
                                                        name="city" value="{{ $user->userInfo->city ?? '' }}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="feInputState">Phone</label>

                                                    <input required type="text" class="form-control" id="feInput"
                                                        name="phone" value="{{ $user->userInfo->phone ?? '' }}">

                                                    </select>
                                                    @error('phone')
                                                        <div style="margin-top: -5px; margin-bottom: 5px;">
                                                            <small style="margin-top:-5px;color:red">&emsp;*
                                                                {{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                &ensp;&ensp;<label for="feDescription">Avatar</label>
                                                <div class="custom-file form-group">
                                                    <input type="file" class="custom-file-input form-control" name="avatar">
                                                </div>
                                                @error('avatar')
                                                    <div style="margin-top: -5px; margin-bottom: 5px;">
                                                        <small style="margin-top:-5px;color:red">&emsp;*
                                                            {{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div>
                                                <button style="margin-left:37%" type="submit" class="btn btn-accent">Update
                                                    Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Default Light Table -->
        </div>
    </section>
    <br>
@endsection
