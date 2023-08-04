@extends('layouts.base-client')

@section('title')
    <title>Formulir Pengajuan Mahasiswa | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="fw-bold"><i class="fa-solid fa-file-circle-plus"></i>&ensp; FORMULIR PENGAJUAN DOSEN</h2>

                    <form class="mt-5" action="#" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="nama_pemohon" class="form-label">Nama Lengkap</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon"
                                        placeholder="Nama pemohon">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="nik_dosen" class="form-label">NIM</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                                    <input type="number" class="form-control" id="nik_dosen" name="nik_dosen"
                                        placeholder="Nomor Induk Kepegawaian">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Alamat email">
                                </div>
                            </div>


                            <div class="col-md-6 mb-1">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon"
                                        placeholder="Nomor telepon atau whatsapp">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="program_studi">Program Studi</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                                    <select class="form-control" id="program_studi" name="program_studi">
                                        <option value="">Pilih Program Studi</option>
                                        <option value="Bisnis Informatika">Bisnis Informatika</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Pertanian">Pertanian</option>
                                        <option value="Pariwisata">Pariwisata</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="unit">Unit Yang Dituju</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                                    <select class="form-control" id="unit" name="unit">
                                        <option value="">Pilih Unit</option>
                                        <option value="Bisnis Informatika">Bisnis Informatika</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Pertanian">Pertanian</option>
                                        <option value="Pariwisata">Pariwisata</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <label class="form-label" for="keperluan">Keperluan</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-regular fa-file"></i></span>
                                    <input type="text" class="form-control" id="keperluan" name="keperluan"
                                        placeholder="Keperluan">
                                </div>
                            </div>
                            
                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-theme" type="button">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
