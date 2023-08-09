@extends('layouts.base-client')

@section('title')
    <title>Tracking Pengajuan | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row pt-5 pb-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="fw-bold"><i class="fa-solid fa-file-shield"></i>&ensp; DETAIL PELACAKAN DOKUMEN PENGAJUAN
                    </h2>
                    <h3 class="fw-bold">Token : <span class="text-theme">#JD923JC</span></h3>
                </div>
            </div>

            <div class="row d-flex justify-content-around">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header fw-medium text-center">
                            Detail Informasi Dokumen Pengajuan
                        </div>
                        <div class="card-body">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Detail Profil Pemohon
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            {{-- Detail Profil Pemohon --}}
                                            <h5 class="card-title">Nama Pemohon</h5>
                                            <p class="card-text">John Doe</p>

                                            <h5 class="card-title">NIM</h5>
                                            <p class="card-text">123456789</p>

                                            <h5 class="card-title">Program Studi</h5>
                                            <p class="card-text">Teknik Informatika</p>

                                            <h5 class="card-title">Email</h5>
                                            <p class="card-text">johndoe@example.com</p>

                                            <h5 class="card-title">No Telepon</h5>
                                            <p class="card-text">081234567890</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Detail Permohonan
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            {{-- Detail Permohonan --}}
                                            <h5 class="card-title">Jenis Permohonan</h5>
                                            <p class="card-text">Pembuatan Surat Rekomendasi</p>

                                            <h5 class="card-title">Layanan</h5>
                                            <p class="card-text">Permohonan Surat</p>

                                            <h5 class="card-title">Tanggal Permohonan</h5>
                                            <p class="card-text">12 Februari 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                    <div class="card p-4 d-flex">
                        <div class="card-body">
                            <div class="slimscroll hospital-dash-activity">
                                <div class="activity">

                                    <i class="fa-solid fa-file-lines icon-purple"></i>
                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="m-0 fw-bold">Formulir Pengajuan Berhasil Terkirim</h6>
                                            </div>
                                            <h6 class="text-muted mt-3">
                                                Dokumen Berhasil Diunggah.
                                            </h6>
                                            <div>
                                                <span class="badge badge-soft-secondary">8 Agustus 2023</span>
                                                <a href="#" class="badge badge-soft-secondary tag-menu">Lihat
                                                    Dokumen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <i class="fa-solid fa-file-arrow-up icon-warning"></i>
                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="m-0 fw-bold">Dokumen Diproses</h6>
                                            </div>
                                            <h6 class="text-muted mt-3">
                                                Sedang Menunggu Pihak Akademik </h6>
                                            <div>
                                                <span class="badge badge-soft-secondary">8 Agustus 2023</span>
                                                <a href="#" class="badge badge-soft-secondary tag-menu">Lihat
                                                    Dokumen</a>
                                            </div>
                                            <h6 class="text-muted mt-3">
                                                Masih dalam tahap Perizinan </h6>
                                            <div>
                                                <span class="badge badge-soft-secondary">8 Agustus 2023</span>
                                                <a href="#" class="badge badge-soft-secondary tag-menu">Lihat
                                                    Dokumen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <i class="fa-solid fa-file-circle-check icon-success"></i>
                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="m-0 fw-bold">Dokumen Selesai</h6>
                                            </div>
                                            <h6 class="text-muted mt-3">
                                                Dokumen Pengajuan Sudah ditandatangani oleh Pihak Akademik
                                            </h6>
                                            <div>
                                                <span class="badge badge-soft-secondary">8 Agustus 2023</span>
                                                <a href="#" class="badge badge-soft-secondary tag-menu">Lihat
                                                    Dokumen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <i class="fa-solid fa-square-check icon-primary"></i>
                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Dokumen Siap Diambil</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div><!--end activity-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
