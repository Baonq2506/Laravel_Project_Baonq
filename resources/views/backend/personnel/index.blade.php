@extends('backend.layouts.master')
@section('title')
    Personnel
@endsection
@section('main')
    <div class="contacts-area mg-b-15">
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
                        'name'=>'Create Personnel',
                        'color'=>'success',
                        'icon'=>'plus',
                        'link'=>'backend.personnel.create',
                        ])

                    </div>
                </div><br> <br> <br>
                @foreach ($personnel as $person)
                    <div style="margin-bottom: 15px;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div style="300px" class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                                <div class="social-media-in">
                                    <a href="{{ $person->userLink->fb_url }}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ $person->userLink->switter_url }}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{ $person->userLink->gg_url }}"><i class="fa fa-google"
                                            aria-hidden="true"></i></a>
                                </div>
                                <img style="width: 120px;
                                                                                                                                                                                                                                    height: 120px;"
                                    alt="logo" class="img-circle m-b"
                                    src="/images/LOL/ThanMa/photo-1-1631117622322526056959.jpg">
                                <h3><a href="">{{ $person->name }} | {{ $person->roles[0]->name }}
                                    </a></h3>
                                <p class="all-pro-ad">{{ $person->userInfo->country }},
                                    {{ $person->userInfo->city }} {!! $person->status_text !!}
                                </p>
                                <p
                                    style=" height:50px; display: -webkit-box;
                                                                                                                                                                                                        -webkit-line-clamp: 2;
                                                                                                                                                                                                        -webkit-box-orient: vertical;
                                                                                                                                                                                                        overflow: hidden;
                                                                                                                                                                                                        text-overflow: ellipsis;
                                                                                                                                                                                                        word-break: break-word;">
                                    {{ $person->userInfo->description }}
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><a
                                                href="{{ route('backend.personnel.edit', ['personnel_id' => $person->id]) }}">
                                                <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                    data-original-title="Edit" href=""><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <form method="post"
                                        action="{{ route('backend.personnel.destroy', [
    'personnel_id' => $person->id,
]) }}">
                                        @csrf
                                        @method('delete')
                                        <div class="professor-stds">
                                            <div class="contact-stat"><a>
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                        data-original-title="Trash"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><a
                                                href="{{ route('backend.personnel.show', [
    'personnel_id' => $person->id,
]) }}">
                                                <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                    data-original-title="Detail"><i class="fa fa-search"
                                                        aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><a
                                                href="{{ route('backend.personnel.signWithUser', [
    'personnel_id' => $person->id,
]) }}">
                                                <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                    data-original-title="Sign in"><i class="fa fa-sign-in"
                                                        aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><a href="">
                                                <button data-toggle="tooltip" title="" class="pd-setting-ed"
                                                    data-original-title="Restore"><i class="fa fa-reddit-alien"
                                                        aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
