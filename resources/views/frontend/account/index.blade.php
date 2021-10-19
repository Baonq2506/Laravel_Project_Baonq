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
                                <img class="rounded-circle"
                                    src="/images/LOL/SieuPham/hinhnenlienminhhuyenthoai4k75e7ec3be848bd_5e2a45e30cae51ff12f0abf668801669.jpg"
                                    alt="User Avatar" width="110">
                            </div>
                            <h4 class="mb-0">Sierra Brooks</h4>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">

                                    <a style="margin-right: 15px" href="#"><i style="color:rgb(37, 104, 190)"
                                            class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                                    <a style="margin-right: 15px" href="#"><i style="color:rgb(28,160,242)"
                                            class=" fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                                    <a style="margin-right: 15px" href="#"><i style="color:red"
                                            class=" fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                                    <a style="margin-right: 15px" href="#"><i style="color:rgb(37, 104, 190)"
                                            class=" fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                                    <a style="margin-right: 15px" href="#"><i style="color:orange" class=" fa fa-rss fa-2x "
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <br>
                        </div>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item p-4">
                                <strong class="text-muted d-block mb-2">Description</strong><br>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi
                                    soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda
                                    eligendi
                                    cumque?</span>
                            </li>
                        </ul>
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
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="feFirstName"> Name</label>
                                                    <input type="text" class="form-control" id="feFirstName"
                                                        placeholder="First Name" value="Sierra">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="feLastName">Gender</label>
                                                    <input type="text" class="form-control" id="feLastName"
                                                        placeholder="Last Name" value="Male">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="feEmailAddress">Email</label>
                                                    <input type="email" class="form-control" id="feEmailAddress"
                                                        placeholder="Email" value="sierra@example.com">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="feInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="feInputAddress"
                                                        placeholder="1234 Main St">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="fePassword">Old Password</label>
                                                    <input type="password" class="form-control" id="fePassword"
                                                        placeholder="Password">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="fePassword">New Password</label>
                                                    <input type="password" class="form-control" id="fePassword"
                                                        placeholder="Password">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="fePassword">Confrim Password</label>
                                                    <input type="password" class="form-control" id="fePassword"
                                                        placeholder="Password">
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="feInputCity">City</label>
                                                    <input type="text" class="form-control" id="feInputCity">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="feInputState">Phone</label>

                                                    <input type="text" class="form-control" id="feInput">

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="feDescription">Description</label>
                                                    <textarea class="form-control" name="feDescription"
                                                        rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                                                </div>
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
