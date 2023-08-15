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
                            {{-- <span>{{ Auth()->user()->divisi->nama_divisi }}</span> --}}
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->

                <div class="row justify-content-around">
                    <div class="col-lg-8">
                        <div class="card hospital-info card-hover card-rounded">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard-ilustration.jpg') }}" class="img-fluid" alt="">
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col-->

                    @if (Auth()->user()->divisi->nama_divisi == 'Unit Layanan Terpadu')
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#">
                                    <div class="card hospital-info card-hover card-rounded">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0 mb-3">Daftar Permohonan</h4>
                                            <div class="media">
                                                <div class="data-icon align-self-center">
                                                    <i class="fa-solid fa-file-circle-plus text-danger"></i>
                                                </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $pengajuan_count }}</h3>
                                                    <span class="text-muted mb-0 text-nowrap">Unit Layanan
                                                        Terpadu</span>
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('admin.pengajuan.index') }}">
                                    <div class="card hospital-info card-hover card-rounded">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0 mb-3">Manajemen Data Pengajuan</h4>
                                            <div class="media">
                                                <div class="data-icon align-self-center">
                                                    <i class="fa-solid fa-file-pen text-pink"></i>
                                                </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $pengajuan_count }}</h3>
                                                    <span class="text-muted mb-0 text-nowrap">Unit Layanan
                                                        Terpadu</span>
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </a>
                            </div><!-- end col-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#">
                                    <div class="card hospital-info card-hover card-rounded">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0 mb-3">Daftar Pengajuan Selesai</h4>
                                            <div class="media">
                                                <div class="data-icon align-self-center">
                                                    <i class="fa-solid fa-file-circle-check text-success"></i>
                                                </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $pengajuan_count }}</h3>
                                                    <span class="text-muted mb-0 text-nowrap">Unit Layanan
                                                        Terpadu</span>
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </a>
                            </div><!-- end col-->
                        </div>
                    </div><!-- end col-->
                    @endif

                    {{-- for divisi sekretaris --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Sekretaris')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Sekretaris</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Sekretaris</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                        <a href="#">
                                            <div class="card hospital-info card-hover card-rounded">
                                                <div class="card-body">
                                                    <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                    <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                        </div>
                                                        <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Sekretaris</span>
                                                        </div><!--end media body-->
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    @endif

                    {{-- for divisi Keuangan --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Keuangan')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Keuangan</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Keuangan</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                        <a href="#">
                                            <div class="card hospital-info card-hover card-rounded">
                                                <div class="card-body">
                                                    <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                    <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                        </div>
                                                        <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Keuangan</span>
                                                        </div><!--end media body-->
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </a>
                                </div>
                            </div>
                        </div><!-- end col-->

                    @endif

                    {{-- for divisi Akademik dan Kemahasiswaan --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Akademik dan Kemahasiswaan')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Akademik dan Kemahasiswaan</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Akademik dan Kemahasiswaan</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                        <a href="#">
                                            <div class="card hospital-info card-hover card-rounded">
                                                <div class="card-body">
                                                    <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                    <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                        </div>
                                                        <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Akademik dan Kemahasiswaan</span>
                                                        </div><!--end media body-->
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    @endif

                    {{-- for divisi Umum dan Kepegawaian --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Umum dan Kepegawaian')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Umum dan Kepegawaian</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Umum dan Kepegawaian</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                        <a href="#">
                                            <div class="card hospital-info card-hover card-rounded">
                                                <div class="card-body">
                                                    <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                    <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                        </div>
                                                        <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Umum dan Kepegawaian</span>
                                                        </div><!--end media body-->
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    @endif

                    {{-- for divisi Pengadaan --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Pengadaan')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Pengadaan</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Pengadaan</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                <div class="media">
                                                    <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                    </div>
                                                    <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Pengadaan</span>
                                                    </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    @endif

                    {{-- for divisi Barang Milik Negara --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Barang Milik Negara')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Barang Milik Negara</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Barang Milik Negara</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                <div class="media">
                                                    <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                    </div>
                                                    <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Barang Milik Negara</span>
                                                    </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    @endif

                    {{-- for divisi Konsultasi --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Konsultasi')
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Manajemen Pengajuan Konsultasi</h4>
                                                <div class="media">
                                                        <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-pen text-pink"></i>
                                                        </div>
                                                <div class="media-body ml-3 align-self-center text-right">
                                                    <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                    <span
                                                     class="text-muted mb-0 text-nowrap">Konsultasi</span>
                                                </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#">
                                        <div class="card hospital-info card-hover card-rounded">
                                            <div class="card-body">
                                                <h4 class="header-title mt-0 mb-3">Daftar Pengajuan</h4>
                                                <div class="media">
                                                    <div class="data-icon align-self-center">
                                                            <i class="fa-solid fa-file-circle-check text-success"></i>
                                                    </div>
                                                    <div class="media-body ml-3 align-self-center text-right">
                                                            <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                            <span class="text-muted mb-0 text-nowrap ">Konsultasi</span>
                                                    </div><!--end media body-->
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    @endif

                </div>

                <div class="row">
                    {{-- for divisi ult --}}
                    @if (Auth()->user()->divisi->nama_divisi == 'Unit Layanan Terpadu')
                        <div class="col-lg-12 mb-2">
                            <h4>Kelola Unit Layanan</h4>
                        </div>

                        <div class="col-lg-4">
                            <a href="{{ route('admin.divisi.index') }}">
                                <div class="card hospital-info card-hover card-rounded">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Manajemen Divisi</h4>
                                        <div class="media">
                                            <div class="data-icon align-self-center">
                                                <i class="fa-solid fa-users-rectangle text-warning"></i>
                                            </div>
                                            <div class="media-body ml-3 align-self-center text-right">
                                                <h3 class="mt-0">{{ $divisi_count }}</h3>
                                                <span class="text-muted mb-0 text-nowrap">Unit Layanan Terpadu</span>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </a>
                        </div><!-- end col-->

                        <div class="col-lg-4">
                            <a href="#">
                                <div class="card hospital-info card-hover card-rounded">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Manajemen User</h4>
                                        <div class="media">
                                            <div class="data-icon align-self-center">
                                                <i class="fa-solid fa-user-plus text-primary"></i>
                                            </div>
                                            <div class="media-body ml-3 align-self-center text-right">
                                                <h3 class="mt-0">{{ $admin_count }}</h3>
                                                <span class="text-muted mb-0 text-nowrap">Unit Layanan Terpadu</span>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </a>
                        </div><!-- end col-->

                        <div class="col-lg-4">
                            <a href="{{ route('admin.admin.index') }}">
                                <div class="card hospital-info card-hover card-rounded">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Manajemen Admin</h4>
                                        <div class="media">
                                            <div class="data-icon align-self-center">
                                                <i class="fas fa-user-group rounded-circle text-success"></i>
                                            </div>
                                            <div class="media-body ml-3 align-self-center text-right">
                                                <h3 class="mt-0">{{ $admin_count }}</h3>
                                                <span class="text-muted mb-0 text-nowrap">Unit Layanan Terpadu</span>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </a>
                        </div><!-- end col-->

                        <div class="col-lg-4">
                            <a href="{{ route('admin.prodi.index') }}">
                                <div class="card hospital-info card-hover card-rounded">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Manajemen Prodi</h4>
                                        <div class="media">
                                            <div class="data-icon align-self-center">
                                                <i class="fas fa-graduation-cap rounded-circle text-danger"></i>
                                            </div>
                                            <div class="media-body ml-3 align-self-center text-right">
                                                <h3 class="mt-0">{{ $prodi_count }}</h3>
                                                <span class="text-muted mb-0 text-nowrap">Unit Layanan
                                                    Terpadu</span>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </a>
                        </div><!-- end col-->

                        <div class="col-lg-4">
                            <a href="{{ route('admin.layanan.index') }}">
                                <div class="card hospital-info card-hover card-rounded">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Manajemen Layanan</h4>
                                        <div class="media">
                                            <div class="data-icon align-self-center">
                                                <i class="fa-solid fa-hands-holding text-info"></i>
                                            </div>
                                            <div class="media-body ml-3 align-self-center text-right">
                                                <h3 class="mt-0">{{ $layanan_count }}</h3>
                                                <span class="text-muted mb-0 text-nowrap">Unit Layanan Terpadu</span>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </a>
                        </div><!-- end col-->

                        <div class="col-lg-4">
                            <a href="{{ route('admin.berkas.index') }}">
                                <div class="card hospital-info card-hover card-rounded">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Manajemen Berkas</h4>
                                        <div class="media">
                                            <div class="data-icon align-self-center">
                                                <i class="fas fa-folder rounded-circle text-blue"></i>
                                            </div>
                                            <div class="media-body ml-3 align-self-center text-right">
                                                <h3 class="mt-0">{{ $berkas_count }}</h3>
                                                <span class="text-muted mb-0 text-nowrap">Unit Layanan Terpadu</span>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </a>
                        </div><!-- end col-->
                    @endif


                </div><!--end row-->
            </div>
        </div>
    </div>
    <!-- Page-Title -->
@endsection
