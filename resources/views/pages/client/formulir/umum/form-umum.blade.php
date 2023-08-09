@extends('layouts.base-client')

@section('title')
    <title>Formulir Pengajuan Umum | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="fw-bold"><i class="fa-solid fa-file-circle-plus"></i>&ensp; FORMULIR PENGAJUAN UMUM</h2>

                    <form class="mt-5" action="#" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="nama_pemohon" class="form-label">Nama</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon"
                                        placeholder="Nama Lengkap Pemohon">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="tanggal_permohonan" class="form-label">Tanggal</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                    <input type="date" class="form-control" id="tanggal_permohonan"
                                        name="tanggal_permohonan">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="id_layanan">Layanan</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                    <select class="form-control" id="id_layanan" name="id_layanan">
                                        <option value="">Pilih Layanan</option>
                                        <option value="Akademik">Akademik</option>
                                        <option value="Keuangan">Keuangan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="jenis_permohonan">Permohonan</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-hands-holding"></i></span>
                                    <select class="form-control" id="jenis_permohonan" name="jenis_permohonan">
                                        <option value="">Pilih Jenis Permohonan</option>
                                        <option value="Permohonan Magang">Permohonan Magang</option>
                                        <option value="Permohonan Keringanan UKT">Permohonan Keringanan UKT</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-theme" type="button">Submit Formulir Pengajuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
