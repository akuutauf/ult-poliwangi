@extends('layouts.base-client')

@section('title')
    <title>Formulir Pengajuan Mahasiswa | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="fw-bold"><i class="fa-solid fa-file-circle-plus"></i>&ensp; FORMULIR PENGAJUAN MAHASISWA</h2>

                    <form class="mt-5" action="#" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                                    <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas"
                                        placeholder="No KTP / NIM">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Alamat Email Pemohon">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon"
                                        placeholder="Nomor Telepon / Nomor WA">
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="id_prodi">Program Studi</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                                    <select class="form-control" id="id_prodi" name="id_prodi">
                                        <option value="">Pilih Prodi</option>
                                        @foreach ($prodis as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_prodi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="id_layanan">Layanan</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-hands-holding"></i></span>
                                    <select class="form-control" id="id_layanan" name="id_layanan">
                                        <option value="">Pilih Layanan</option>
                                        @foreach ($layanans as $data)
                                            <option value="{{ $data->id }}">{{ $data->divisi->nama_divisi }} -
                                                {{ $data->nama_layanan }}</option>
                                        @endforeach
                                    </select>
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
                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-theme" type="button">Submit Formulir Pengajuan</button>
                        </div>

                        <div class="card mt-5">
                            <div class="card-body p-4">
                                <div class="card-title">
                                    Persyaratan Layanan :
                                </div>
                                <ol>
                                    @foreach ($berkas_layanans as $item)
                                        <li>{{ $item->nama_berkas }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        // Script to capture selected option from dropdown
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const selectedOptionInput = document.getElementById('selectedOption');
            const searchInput = document.getElementById('searchInput');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedValue = item.getAttribute('data-value');
                    selectedOptionInput.value = selectedValue;
                });
            });

            searchInput.addEventListener('input', function() {
                const searchValue = searchInput.value.toLowerCase();
                dropdownItems.forEach(item => {
                    const itemText = item.textContent.trim().toLowerCase();
                    if (itemText.includes(searchValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
