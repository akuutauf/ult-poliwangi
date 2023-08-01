@extends('layouts.base-admin')

@section('title')
    <title>Unit Layanan Terpadu | Poliwangi</title>
@endsection

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Dashboard</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Total Patients</h4>
                    <div class="row">
                        <div class="col-md-4 align-self-center">
                            <div class="text-center">
                                <div class="icon-info mb-3">
                                    <i class="fas fa-procedures bg-soft-info"></i>
                                </div>
                                <h2 class="mt-0 font-weight-bold">1200</h2>
                                <p class="mb-0 text-muted"><span class="text-success"><i
                                            class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week</p>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-8 align-self-center">
                            <div class="apexchart-wrapper">
                                <div id="patient_dash_report" class="chart-gutters"></div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h4 class="header-title mt-0 mb-3">Pharmacy Stocks</h4>
                            <div class="apexchart-wrapper">
                                <div id="dash_medicine" class="apex-charts"></div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-7 align-self-center">
                            <div class="text-center">
                                <img src="../assets/images/widgets/weather.png" alt="" height="70">
                                <h2>32°</h2>
                                <h4 class="title-text">San Francisco, California</h4>
                                <p class="text-muted">SUNDAY 25<sup>th</sup> Aug 2019</p>
                                <button type="button"
                                    class="btn btn-sm btn-outline-primary btn-round weather-btn-icon">View
                                    Details <i class="mdi mdi-arrow-right"></i></button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
