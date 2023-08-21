@extends('layouts.base-admin')

@section('title')
    <title>Manajemen Layanan | ULT Poliwangi</title>
@endsection

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Layanan</h4>
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
                                <button type="button" class="btn btn-primary px-4 mt-0 mb-3" data-toggle="modal"
                                    data-animation="bounce" data-target=".modalCreate"><i
                                        class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Layanan Baru</button>
                                <div class="table-responsive">
                                    @php
                                        $no = 1;
                                    @endphp
                                    <table id="datatable" class="table">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Divisi</th>
                                                <th>Nama Layanan</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>

                                        <tbody>
                                            @foreach ($layanan as $item)
                                                <tr class="text-center">
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $item->divisi->nama_divisi }}</td>
                                                    <td>{{ $item->nama_layanan }}</td>
                                                    <td class="text-right">
                                                        <a href="{{ route('admin.layanan.update', $item->id) }}"
                                                            class="mr-2" data-toggle="modal" data-animation="bounce"
                                                            data-target=".modalUpdate{{ $item->id }}"><i
                                                                class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="{{ route('admin.layanan.destroy', $item->id) }}"><i
                                                                class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                        </tbody>
                                        @php
                                            $no++;
                                        @endphp

                                        <!--  Modal Update content for the above example -->
                                        <div class="modal fade modalUpdate{{ $item->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Layanan
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.layanan.update', $item->id) }}"
                                                            method="POST">
                                                            @method('put')
                                                            @csrf

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="update_id_divisi">Nama Divisi</label>
                                                                        <select
                                                                            class="form-control @error('update_id_divisi') is-invalid @enderror"
                                                                            id="update_id_divisi" name="update_id_divisi">
                                                                            <option value="">Pilih Divisi
                                                                            </option>
                                                                            @foreach ($divisi as $data)
                                                                                <option value="{{ $data->id }}"
                                                                                    {{ $item->id_divisi == $data->id ? 'selected' : '' }}>
                                                                                    {{ $data->nama_divisi }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('update_id_divisi')
                                                                            <div id="update_id_divisi" class="form-text pb-1">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="update_nama_layanan">Nama
                                                                            Layanan</label>
                                                                        <input type="text"
                                                                            class="form-control @error('update_nama_layanan') is-invalid @enderror"
                                                                            id="update_nama_layanan"
                                                                            name="update_nama_layanan"
                                                                            value="{{ $item->nama_layanan }}"
                                                                            placeholder="Masukkan Nama Layanan">
                                                                        @error('update_nama_layanan')
                                                                            <div id="update_nama_layanan"
                                                                                class="form-text pb-1">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="update_estimasi_layanan">Estimasi
                                                                            Layanan</label>
                                                                        <input type="number"
                                                                            class="form-control @error('update_estimasi_layanan') is-invalid @enderror"
                                                                            id="update_estimasi_layanan"
                                                                            name="update_estimasi_layanan"
                                                                            placeholder="Jumlah Maksimal Hari Kerja Pelayanan"
                                                                            value="{{ $item->estimasi_layanan }}">
                                                                        @error('update_estimasi_layanan')
                                                                            <div id="update_estimasi_layanan"
                                                                                class="form-text pb-1">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-sm btn-primary">Simpan</button>
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-dismiss="modal">Batal</button>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <!--  Modal content for the above example -->
    <div class="modal fade modalCreate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Layanan Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.layanan.create') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="create_id_divisi">Nama Divisi</label>
                                    <select class="form-control @error('create_id_divisi') is-invalid @enderror"
                                        id="create_id_divisi" name="create_id_divisi">
                                        <option value="">Pilih Divisi</option>
                                        @foreach ($divisi as $dataDivisi)
                                            <option value="{{ $dataDivisi->id }}">{{ $dataDivisi->nama_divisi }}</option>
                                        @endforeach
                                    </select>
                                    @error('create_id_divisi')
                                        <div id="create_id_divisi" class="form-text pb-1">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="create_nama_layanan">Nama Layanan</label>
                                    <input type="text"
                                        class="form-control @error('create_nama_layanan') is-invalid @enderror"
                                        id="create_nama_layanan" name="create_nama_layanan"
                                        placeholder="Masukkan Nama Layanan">
                                    @error('create_nama_layanan')
                                        <div id="create_nama_layanan" class="form-text pb-1">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="create_estimasi_layanan">Estimasi Layanan</label>
                                    <input type="number"
                                        class="form-control @error('create_estimasi_layanan') is-invalid @enderror"
                                        id="create_estimasi_layanan" name="create_estimasi_layanan"
                                        placeholder="Jumlah Maksimal Hari Kerja Pelayanan">
                                    @error('create_estimasi_layanan')
                                        <div id="create_estimasi_layanan" class="form-text pb-1">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-sm btn-primary" id="sa-success">Tambah</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
