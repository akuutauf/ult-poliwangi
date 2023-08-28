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
                            <h4 class="page-title">Update Pertanyaan Survei</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Form Update Pertanyaan Survei</h4>

                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label" for="">Survei</label>
                                            <div class="form-group mb-3">
                                                <select class="form-control" required>
                                                    <option>Pilih Survei</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>Pertanyaan

                                                            @error('')
                                                                <div id="" class="text-danger py-1">
                                                                    *pilih minimal satu pertanyaan
                                                                </div>
                                                            @else
                                                                <small>(Mohon Pilih Minimal Satu Pertanyaan)</small>
                                                            @enderror
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="d-flex">
                                                            <div class="form-check my-auto">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" name="" id="">
                                                                <label class="form-check-label" for="">
                                                                    pppppp
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-sm btn-danger">Batal</button>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
    </div>
@endsection
