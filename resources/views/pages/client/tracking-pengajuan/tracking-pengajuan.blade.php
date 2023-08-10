@extends('layouts.base-client')

@section('title')
    <title>Tracking Pengajuan | ULT Poliwangi</title>
@endsection

@section('css')
    @php
        function dateConversion($date)
        {
            $month = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            $slug = explode('-', $date);
            return $slug[2] . ' ' . $month[(int) $slug[1]] . ' ' . $slug[0];
        }
    @endphp
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row pt-5 pb-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="fw-bold"><i class="fa-solid fa-file-shield"></i>&ensp; DETAIL PELACAKAN DOKUMEN PENGAJUAN
                    </h2>
                    <h3 class="fw-bold">Token : <span class="text-theme">#{{ $pengajuan->kode_tiket }}</span></h3>
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
                                            <p class="card-text">{{ $pengajuan->nama_pemohon }}</p>

                                            <h5 class="card-title">NIM atau Nomor KTP</h5>
                                            <p class="card-text">{{ $pengajuan->nomor_identitas }}</p>

                                            <h5 class="card-title">Program Studi</h5>
                                            <p class="card-text">{{ $pengajuan->prodi->nama_prodi }}</p>

                                            <h5 class="card-title">Email</h5>
                                            <p class="card-text">{{ $pengajuan->email }}</p>

                                            <h5 class="card-title">No Telepon</h5>
                                            <p class="card-text">{{ $pengajuan->nomor_telepon }}</p>

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
                                            <p class="card-text">{{ $pengajuan->jenis_permohonan }}</p>

                                            <h5 class="card-title">Layanan</h5>
                                            <p class="card-text">{{ $pengajuan->layanan->nama_layanan }}</p>

                                            <h5 class="card-title">Tanggal Permohonan</h5>
                                            <p class="card-text">{{ dateConversion($pengajuan->tanggal_permohonan) }}</p>
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

                                    @if ($document_submitted->isNotEmpty())
                                        <i class="fa-solid fa-file-lines icon-purple"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0 fw-bold">Formulir Pengajuan Berhasil Terkirim</h6>
                                                </div>
                                                @foreach ($document_submitted as $data)
                                                    <h6 class="text-muted mt-3">
                                                        {{ $data->pesan }}
                                                    </h6>
                                                    <div>
                                                        <span
                                                            class="badge badge-soft-secondary">{{ dateConversion($data->tanggal) }}</span>

                                                        @if (!$data->file_dokumen == null || !$data->file_dokumen == '')
                                                            Kosong
                                                            <a href="#"
                                                                class="badge badge-soft-secondary tag-menu">Lihat
                                                                Dokumen</a>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    @if ($document_on_progress->isNotEmpty())
                                        <i class="fa-solid fa-file-arrow-up icon-warning"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0 fw-bold">Dokumen Diproses</h6>
                                                </div>
                                                @foreach ($document_on_progress as $data)
                                                    <h6 class="text-muted mt-3">
                                                        {{ $data->pesan }}
                                                    </h6>
                                                    <div>
                                                        <span
                                                            class="badge badge-soft-secondary">{{ dateConversion($data->tanggal) }}</span>

                                                        @if (!$data->file_dokumen == null || !$data->file_dokumen == '')
                                                            Kosong
                                                            <a href="#"
                                                                class="badge badge-soft-secondary tag-menu">Lihat
                                                                Dokumen</a>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    @if ($document_done->isNotEmpty())
                                        <i class="fa-solid fa-file-circle-check icon-success"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0 fw-bold">Dokumen Selesai</h6>
                                                </div>
                                                @foreach ($document_done as $data)
                                                    <h6 class="text-muted mt-3">
                                                        {{ $data->pesan }}
                                                    </h6>
                                                    <div>
                                                        <span
                                                            class="badge badge-soft-secondary">{{ dateConversion($data->tanggal) }}</span>

                                                        @if (!$data->file_dokumen == null || !$data->file_dokumen == '')
                                                            Kosong
                                                            <a href="#"
                                                                class="badge badge-soft-secondary tag-menu">Lihat
                                                                Dokumen</a>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    @if ($document_done->isNotEmpty())
                                        <i class="fa-solid fa-square-check icon-primary"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0">Dokumen Siap Diambil</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <i class="fa-solid fa-square-xmark icon-info"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0">Dokumen Belum Siap Diambil</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div><!--end activity-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
