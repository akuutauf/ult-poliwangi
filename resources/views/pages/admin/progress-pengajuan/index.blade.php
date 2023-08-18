@extends('layouts.base-admin')

@section('title')
    <title> Manajemen Progres Pengajuan | ULT POLIWANGI</title>

    {{-- Datedroppper JS --}}
    <script src="{{ asset('js-datedropper/datedropper-javascript.js') }}"></script>
@endsection

@php
    function dateConversion($date)
    {
        $month = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $slug = explode('-', $date);
        return $slug[2] . ' ' . $month[(int) $slug[1]] . ' ' . $slug[0];
    }
@endphp

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <!--end /div-->
                            <h4 class="page-title">Progress Pengajuan</h4>
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
                                @if (!$last_progress_pengajuan->status == 'Dokumen Selesai')
                                    <button type="button" class="btn btn-primary px-4 mt-0 mb-3" data-toggle="modal"
                                        data-animation="bounce" data-target=".modalCreate"><i
                                            class="mdi mdi-plus-circle-outline mr-2"></i>Tambah
                                        Progress Pengajuan</button>
                                @endif

                                <div class="table-responsive">
                                    @php
                                        $no = 1;
                                    @endphp
                                    <table id="datatable" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pemohon</th>
                                                <th>Pesan</th>
                                                <th>File Berkas</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>

                                        <tbody>
                                            @foreach ($progress_pengajuans as $data)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $data->pengajuan->nama_pemohon }}</td>
                                                    <td>{{ $data->pesan }}</td>
                                                    <td>
                                                        @if ($data->file_dokumen == null || $data->file_dokumen == '')
                                                            Tidak Ada File
                                                        @endif
                                                    </td>
                                                    <td>{{ dateConversion($data->tanggal) }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td class="text-right">

                                                        <a href="{{ route('admin.progress.pengajuan.delete', $data->id) }}"
                                                            class="ml-2"><i
                                                                class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                @php
                                                    $no++;
                                                @endphp
                                            @endforeach
                                        </tbody>
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
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah
                        Progress Pengajuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.progress.pengajuan.create', $pengajuan->id) }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="create_pesan">Pesan</label>
                                    <input type="text" class="form-control @error('create_pesan') is-invalid @enderror"
                                        id="create_pesan" name="create_pesan" placeholder="Masukkan Deskripsi Pesan">
                                    @error('create_pesan')
                                        <div id="create_pesan" class="form-text pb-1">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="create_file_dokumen">File Berkas (Opsional)</label>
                                    <div class="custom-file mb-3">
                                        <label class="custom-file-label" for="create_file_dokumen">Choose file</label>
                                        <input type="file"
                                            class="custom-file-input form-control @error('create_file_dokumen') is_invalid @enderror"
                                            id="create_file_dokumen" name="create_file_dokumen">
                                        @error('create_file_dokumen')
                                            <div id="create_file_dokumen" class="form-text pb-1">
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="create_tanggal" class="form-label">Tanggal</label>
                                <div class="form-group mb-3">
                                    <input type="text" data-dd-opt-custom-class="dd-theme-bootstrap"
                                        class="form-control date-input @error('create_tanggal') is-invalid @enderror"
                                        id="create_tanggal" name="create_tanggal" placeholder="Tanggal Pengajuan">
                                    @error('create_tanggal')
                                        <div id="create_tanggal" class="form-text pb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label" for="create_status">Status</label>
                                <div class="form-group mb-3">
                                    <select class="form-control @error('create_status') is-invalid @enderror"
                                        id="create_status" name="create_status">
                                        <option value="">Pilih Status</option>
                                        <option value="Dokumen Diproses">Dokumen Diproses</option>
                                        <option value="Dokumen Selesai">Dokumen Selesai</option>
                                    </select>
                                    @error('create_status')
                                        <div id="create_status" class="form-text pb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    {{-- Inisiasi datedroppper --}}
    <script>
        dateDropper({
            selector: '.date-input',
            expandedDefault: true,
            expandable: true,
            overlay: true,
            showArrowsOnHover: true,
            autoFill: false
        });
    </script>
@endsection
