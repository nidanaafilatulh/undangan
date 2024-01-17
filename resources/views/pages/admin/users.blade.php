@extends('layouts.app', ['class' => 'g-sidenav-show bg-white'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Billing'])
    <div class="container-fluid py-8">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card" style="width: 100%;">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="fas fa-landmark opacity-10"></i>
                                        </div>
                                    </div>
                                    <a href="/customerShow">
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0">Customer</h6>
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">5</h5>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <a href="/affiliateShow">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="fab fa-paypal opacity-10"></i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0">Affiliate</h6>
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">5</h5>
                                        </div>
                                    </div>
                                </a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection