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

                <div class="row">


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
                <div class="row mt-2">

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

    </div>
    <!-- End Container -->

@endsection
