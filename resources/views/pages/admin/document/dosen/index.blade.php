@extends('layouts.base-admin')

@section('title')
    <title>Unit Layanan Terpadu | Poliwangi</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Manajemen Berkas</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Kategori</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
                    </ol>
                    <!--end breadcrumb-->
                </div>
                <!--end /div-->
                <h4 class="page-title">Datatable</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Default Datatable</h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Tiket</th>
                                <th>Nama</th>
                                <th>NIP/NIK</th>
                                <th>Prodi</th>
                                <th>Tanggal pengajuan</th>
                                <th>Unit Yang Dituju</th>
                                <th>Dokumen</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($dosen as $dos)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $dos->kode_tiket }}</td>
                                    <td>{{ $dos->nama }}</td>
                                    <td>{{ $dos->nip_nik }}</td>
                                    <td>{{ $dos->prodi }}</td>
                                    <td>{{ $dos->tanggal_pengajuan }}</td>
                                    <td>{{ $dos->unit }}</td>
                                    <td>{{ $dos->dokumen }}</td>
                                    <td>{{ $dos->status }}</td>
                                    <td class="text-right">
                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr>
                        @php
                            $no++;
                        @endphp
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
