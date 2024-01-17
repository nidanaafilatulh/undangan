@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container mt-5">
                <div class="card">
                    <div class="card">
                        <div class="card-body md-4">
                            <div class="row">
                                <div class="col-md-2 d-flex justify-content-center align-items-center">
                                    <img src="{{asset('img/bg1.jpg')}}" alt="Nida’ Naafilatul Hanifah" class="rounded-circle" style="width: 150px; height: 150px;">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <h3 class="card-title">Nida’ Naafilatul Hanifah</h3>
                                    <p class="card-text">nidaanafilatul@gmail.com</p>
                                </div>
                           </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="ms-6 card-title">Affiliate</h3>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>       
        <div class="row mt-4">
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
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
