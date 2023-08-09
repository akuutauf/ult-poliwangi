@extends('layouts.base-admin')

@section('title')
    <title>Unit Layanan Terpadu | ULT Poliwangi</title>
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card hospital-info">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Prodi</h4>
                                    <div class="media">
                                        <div class="data-icon align-self-center">
                                            <i class="fas fa-graduation-cap rounded-circle text-danger"></i>
                                        </div>
                                        <div class="media-body ml-3 align-self-center text-right">
                                            <h3 class="mt-0">11</h3>
                                            <p class="text-muted mb-0 text-nowrap">Yesterday 32 App.</p>
                                        </div><!--end media body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->
                        <div class="col-lg-4">
                            <div class="card hospital-info">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Divisi</h4>
                                    <div class="media">
                                        <div class="data-icon align-self-center">
                                            <i class="fas fa-layer-group rounded-circle text-warning"></i>
                                        </div>
                                        <div class="media-body ml-3 align-self-center text-right">
                                            <h3 class="mt-0">21</h3>
                                            <p class="text-muted mb-0 text-nowrap">Yesterday 22 Add.</p>
                                        </div><!--end media body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->
                        <div class="col-lg-4">
                            <div class="card hospital-info">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Admin</h4>
                                    <div class="media">
                                        <div class="data-icon align-self-center">
                                            <i class="fas fa-user-group rounded-circle text-success"></i>
                                        </div>
                                        <div class="media-body ml-3 align-self-center text-right">
                                            <h3 class="mt-0">10</h3>
                                            <p class="text-muted mb-0 text-nowrap">Yesterday 12 Ope.</p>
                                        </div><!--end media body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->

                        <div class="col-lg-4">
                            <div class="card hospital-info">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Layanan</h4>
                                    <div class="media">
                                        <div class="data-icon align-self-center">
                                            <i class="fas fa-cogs rounded-circle text-info"></i>
                                        </div>
                                        <div class="media-body ml-3 align-self-center text-right">
                                            <h3 class="mt-0">15</h3>
                                            <p class="text-muted mb-0 text-nowrap">Today Available</p>
                                        </div><!--end media body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->
                        <div class="col-lg-4">
                            <div class="card hospital-info">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Berkas</h4>
                                    <div class="media">
                                        <div class="data-icon align-self-center">
                                            <i class="fas fa-folder rounded-circle text-blue"></i>
                                        </div>
                                        <div class="media-body ml-3 align-self-center text-right">
                                            <h3 class="mt-0">40</h3>
                                            <p class="text-muted mb-0 text-nowrap">Today Available</p>
                                        </div><!--end media body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->
                        <div class="col-lg-4">
                            <div class="card hospital-info">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Pengajuan</h4>
                                    <div class="media">
                                        <div class="data-icon align-self-center">
                                            <i class="fas fa-clipboard rounded-circle text-pink"></i>
                                        </div>
                                        <div class="media-body ml-3 align-self-center text-right">
                                            <h3 class="mt-0">$41,520</h3>
                                            <p class="text-muted mb-0 text-nowrap">Yesterday's $38,990</p>
                                        </div><!--end media body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->
                    </div><!--end row-->

                </div><!--end row-->
            </div>
        </div>
    </div>
    <!-- Page-Title -->
@endsection
