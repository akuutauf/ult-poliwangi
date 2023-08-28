@extends('layouts.base-admin')

@section('title')
    <title> Daftar Review Pengajuan | ULT Poliwangi</title>
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
                            <h4 class="page-title">Daftar Ulasan</h4>
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
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jenis Permohonan</th>
                                                <th>Rating</th>
                                                <th>Ulasan</th>
                                                <th>Layanan Pengajuan</th>
                                                <th>Kode Layanan</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>

                                        <tbody>

                                            @foreach ($surveis as $data)
                                                <tr class="text-center">
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->pengajuan->jenis_permohonan }}</td>
                                                    <td>
                                                        <i class="fa-solid fa-star text-warning"></i> &ensp;
                                                        {{ $data->rating }}
                                                    </td>
                                                    <td>
                                                        @if (($data->saran == null) | ($data->saran == ''))
                                                            Tidak Ditambahkan
                                                        @else
                                                            {{ $data->saran }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $data->pengajuan->layanan->nama_layanan }}</td>
                                                    <td>{{ $data->pengajuan->kode_tiket }}</td>
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
@endsection
