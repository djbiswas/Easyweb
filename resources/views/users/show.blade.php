@extends('layouts.admin')
@section('content')

    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>User</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-5" style="margin-top: 2%">
        <div class="col">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>

                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">

                            <img src="/img/users/{{ $user->photo ?? '404.jpg'}}" alt="Admin" class="rounded-circle" width="150">

                        <div class="mt-3">
                            <h4>{{ $user->name ?? ''}}</h4>
                            <p class="text-secondary mb-1">{{ $user->roles[0]->name ?? ''}}</p>
                            <p class="text-muted font-size-sm">{{  $user->phone ?? '' }}</p>
                            {{-- <button class="btn btn-primary">Follow</button>
                            <button class="btn btn-outline-primary">Message</button> --}}
                        </div>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-md-8 mb-5">
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->name ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->email ?? '' }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->phone ?? '' }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->phone ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Present Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->present_address ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Permanent Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->permanent_address ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nominee Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->nominee_name ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nominee Father</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->nominee_father ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nominee Mother</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->nominee_mother ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nominee Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->nominee_mobile ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nominee Nid</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->nominee_nid ?? '' }}
                                </div>
                            </div>

                            <hr>
                            <div class="row mb-5">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nominee Relation</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{  $user->nominee_relation ?? '' }}
                                </div>
                            </div>


                            <hr>
                            <div class="row d-none mb-5">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank" href="#">Edit</a>
                                    <a class="btn btn-primary float-right" target="__blank" href="#">Print</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row gutters-sm">


                    </div>



                </div>




                </div>

            </div>
            </div>
        </div>
    </div>

    @endsection
