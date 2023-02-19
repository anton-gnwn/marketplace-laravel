@extends('layouts.admin')

@section('title')
    Toko Han Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">This is TOKOHan Administrator Panel!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Customer
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ number_format($customer) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Revenue
                                </div>
                                <div class="dashboard-card-subtitle">
                                    Rp. {{ number_format($revenue) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Transactions
                                </div>
                                <div class="dashboard-card-subtitle">
                                    {{ number_format($transaction) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row mt-3">
                    <div class="col-12 mt-3">
                        <h5 class="mb-3">Recent Transactions</h5>
                        <a href="/dashboard-transactions.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        Shirrup Marzan
                                    </div>
                                    <div class="col-md-3">
                                        Anton Gunawan
                                    </div>
                                    <div class="col-md-3">
                                        12 Januari, 2021
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-2.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        LeBrone X
                                    </div>
                                    <div class="col-md-3">
                                        Anton Gunawan
                                    </div>
                                    <div class="col-md-3">
                                        11 Januari, 2021
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-3.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        Soffa Lembutte
                                    </div>
                                    <div class="col-md-3">
                                        Anton Gunawan
                                    </div>
                                    <div class="col-md-3">
                                        11 Januari, 2021
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
