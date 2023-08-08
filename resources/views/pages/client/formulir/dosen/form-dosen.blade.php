@extends('layouts.base-client')

@section('title')
    <title>Formulir Pengajuan Mahasiswa | ULT Poliwangi</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

                            {{-- <div class="col-md-6 mb-1">
                                <label class="form-label" for="layanan_two">Permohonan</label>
                                <div class="input-group">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Select Item
                                        </button>
                                        <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton"
                                            style="width: 300px;">
                                            <input class="form-control mb-2" type="text" id="searchInput"
                                                placeholder="Search" name="layanan_two">
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-value="Item 1">Item 1</a>
                                            <a class="dropdown-item" href="#" data-value="Item 2">Item 2</a>
                                            <a class="dropdown-item" href="#" data-value="Item 3">Item 3</a>
                                            <a class="dropdown-item" href="#" data-value="Item 4">Item 4</a>
                                            <a class="dropdown-item" href="#" data-value="Item 5">Item 5</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="selectedOption" readonly>
                                </div>
                            </div> --}}

                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-theme" type="button">Submit Pengajuan</button>
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
