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

                    @php
                        $no = 1;
                    @endphp
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Tiket</th>
                                <th>Name</th>
                                <th>NIP/NIK</th>
                                <th>Prodi</th>
                                <th>Tanggal pengajuan</th>
                                <th>Unit Yang Dituju</th>
                                <th>Dokumen</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>MDA2165165</td>
                                <td>Moh. Dimyati Ayatullah, S.Kom</td>
                                <td>2002155146168421</td>
                                <td>TRPL</td>
                                <td>27/01/2024</td>
                                <td>Sekretaris</td>
                                <td>Surat Pengantar Prodi</td>
                                <td>Proses</td>
                            </tr>
                        </tbody>
                        @php
                            $no++;
                        @endphp
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
