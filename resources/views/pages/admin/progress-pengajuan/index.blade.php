@extends('layouts.base-admin')
@section('title')
    <title> Unit Layanan Terpadu ULT POLIWANGI| </title>
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
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.page') }}">ULT
                                            Poliwangi</a></li>
                                    <li class="breadcrumb-item"><a href="/pengajuan">Pengajuan</a></li>
                                    <li class="breadcrumb-item active">Progress Pengajuan</li>
                                </ol>
                                <!--end breadcrumb-->
                            </div>
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
                                <button type="button" class="btn btn-primary px-4 mt-0 mb-3" data-toggle="modal"
                                    data-animation="bounce" data-target=".modalCreate"><i
                                        class="mdi mdi-plus-circle-outline mr-2"></i>Add New
                                    Progress Pengajuan</button>
                                <div class="table-responsive">
                                    @php
                                        $no = 1;
                                    @endphp
                                    <table id="datatable" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Pengajuan</th>
                                                <th>Pesan</th>
                                                <th>File</th>
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
                                                        <a href="#" class="mr-2" data-toggle="modal"
                                                            data-animation="bounce" data-target=".modalUpdate"><i
                                                                class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i
                                                                class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                            @endforeach
                                        </tbody>
                                        @php
                                            $no++;
                                        @endphp
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
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Progress Pengajuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Pengajuan</label>
                                    <select class="form-control">
                                        <option>Pilih User</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Pesan</label>
                                    <input type="text" class="form-control" id="Item" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <div class="custom-file mb-3">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <input type="file" class="custom-file-input" id="customFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input class="form-control" type="date" value="" id="example-date-local-input">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Status</label>
                                    <select class="form-control">
                                        <option>Pilih Statusr</option>
                                        <option>Terkirim</option>
                                        <option>DiProsess</option>
                                        <option>Selesai</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                        <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal Update content for the above example -->
    <div class="modal fade modalUpdate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Progress Pengajuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Pengajuan</label>
                                    <select class="form-control">
                                        <option>Pilih User</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Pesan</label>
                                    <input type="text" class="form-control" id="Item" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <div class="custom-file mb-3">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <input type="file" class="custom-file-input" id="customFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input class="form-control" type="date" value=""
                                        id="example-date-local-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Status</label>
                                    <select class="form-control">
                                        <option>Pilih Statusr</option>
                                        <option>Terkirim</option>
                                        <option>DiProsess</option>
                                        <option>Selesai</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                        <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
