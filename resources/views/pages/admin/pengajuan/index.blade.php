@extends('layouts.base-admin')

@section('title')
    <title> Unit Layanan Terpadu ULT POLIWANGI| </title>
@endsection

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <!--end /div-->
                            <h4 class="page-title">Pengajuan</h4>
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
                                <div class="table-responsive">
                                    @php
                                        $no = 1;
                                    @endphp
                                    <table id="datatable" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pemohon</th>
                                                <th>Jenis Permohon</th>
                                                <th>Tanggal</th>
                                                <th>Nama Layanan</th>
                                                <th>Status</th>
                                                <th>Kodetiket</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>Nanda</td>
                                                <td>Mahasiswa</td>
                                                <td>08/07/2023</td>
                                                <td>Keuangan</td>
                                                <td>Terkirim</td>
                                                <td>Hf2529ks</td>
                                                <td class="text-right">
                                                    <a href="#" class="mr-2" data-toggle="modal"
                                                        data-animation="bounce" data-target=".modalUpdate"><i
                                                            class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i
                                                            class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr>
                                            <!--end tr-->
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
                                    <label for="name">Nama Pemohon</label>
                                    <input type="text" class="form-control" id="nama_pemohon" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Jenis Pemohon</label>
                                    <input type="text" class="form-control" id="jenis_permohonan" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input class="form-control" type="date" value="" id="tangal_permohonan">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user">Layanan</label>
                                    <select class="form-control">
                                        <option>Pilih Layanan</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Item">Status</label>
                                    <select class="form-control">
                                        <option>Pilih Status</option>
                                        <option>Terkirim</option>
                                        <option>Prosess</option>
                                        <option>Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Kode Tiket</label>
                                    <input type="text" class="form-control" id="kode_tiket  " required="">
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
