@extends('layouts.admin')
@section('content')

    <!-- Container -->
    <div class="container-main ">
        <div class="row mt-minus">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">home</i>Dashboard</h5>
                    </div>
                </div>


                @if($funds_dff > 0)
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center text-danger">
                                    <strong> Your Installment Due {{ $funds_dff }}/- Please Pay ASAP </strong>
                                    <br>
                                </div>
                            </div>
                        </div>

                    </div>

                @endif

                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="row mobile-res">
                            <div class="col">
                                <div class="" style="width: 100%;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-weight-bold">Name   : <span>{{ $user_data->name ?? ''}}</span></li>
                                        <li class="list-group-item font-weight-bold">Mobile : {{ $user_data->phone ?? ''}}</li>
                                        <li class="list-group-item font-weight-bold">Number Of Share : {{ count($user_data->usershares) ?? ''}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-right">
                                    <img src="/img/users/{{ $user_data->photo ?? '404.jpg'}}" alt="Admin" class="rounded-circle" width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row mb-5">

                    @foreach($user_data->usershares as $usershare)
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-4">
                            <a href="/usershares/{{ $usershare->id }}">
                                <div class="btn btn-primary card">
                                    <div class="card-body text-center">
                                        <h4>{{ $usershare->name }}</h4>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach

                </div>


                <div class="row">

                    <div class="col-lg-4 col-sm-12 col-md-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <strong> Total Fund Received </strong>
                                <br>
                                <strong><span style="color: blue">{{ $member_fund }} /-</span></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <strong> Total Service Charge </strong>
                                <br>
                                <strong><span style="color: blue">{{ $member_service_charge }} /-</span></strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <strong> Total Fine </strong>
                                <br>
                                <strong><span style="color: red">{{ $member_late_fine }} /-</span></strong>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-4 mb-3">
                        <a href="#" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <strong> Total Service charge </strong>
                            <br>
                            <span style="color: red">{{ $total_sc }} /-</span>
                        </a>
                    </div> --}}

                </div>

                @role('admin|devadmin|editor')
                <hr>
                <div class="row">

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="/users/create" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons text-light bg-blue-1 rounded-circle p-3 mb-2">people_alt</i>
                            <span>Add Member</span>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-4 mb-3">
                        <a href="/funds_updates/create" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons-outlined text-light bg-green-1 rounded-circle p-3 mb-2">local_atm</i>
                            <span>Add Fund</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="/products/create" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons-outlined text-light bg-blue-1 rounded-circle p-3 mb-2">storefront</i>
                            <span>Add Project</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="/investment_updates/create" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons-outlined text-light bg-red-1 rounded-circle p-3 mb-2">local_atm</i>
                            <span>Add Investment</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="/return_of_investments/create" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons-outlined text-light bg-green-1 rounded-circle p-3 mb-2">local_atm</i>
                            <span>Add Return Of Investment</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="/cashe_reports" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons-outlined text-light bg-green-1 rounded-circle p-3 mb-2">local_atm</i>
                            <span>Add Earning</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="/expense_updates/create" class="home-link bg-white d-flex flex-column align-items-center justify-content-center text-center px-2 py-4 rounded-lg shadow-sm">
                            <i class="material-icons-outlined text-light bg-red-1 rounded-circle p-3 mb-2">local_atm</i>
                            <span>Add Expense</span>
                        </a>
                    </div>

                </div>
                @endrole
                <hr>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-scroll"  style="overflow: scroll;">
                    <div class="card-header text-center"><h3>List Of Installment</h3></div>
                    <div class="card-body card-block">
                        <table id="report" class="table is-narrow">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Share_ID</th>
                                        <th>Amount</th>
                                        <th>S.Charge</th>
                                        <th>L.Fine</th>
                                        <th>Invoice</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php($count_dj_sl = 1)
                                    @foreach ($user_funds as $fund)
                                        <tr>
                                            <td>{{ $count_dj_sl }} </td>
                                            <td style="width: 20%">{{ $fund->date }} </td>
                                            <td>{{ $fund->usershare->name }} </td>
                                            <td>{{ $fund->amount }} </td>
                                            <td>{{ $fund->service_charge }} </td>
                                            <td>{{ $fund->late_fine }} </td>
                                            <td>
                                                <a class="btn btn-info" target="_blank" href="{{ route('funds.show', $fund->id) }}">
                                                    Invoice</a>
                                            </td>
                                        </tr>
                                        @php($count_dj_sl++)
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->

@endsection
