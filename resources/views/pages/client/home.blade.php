@extends('layouts.base-client')

@section('title')
    <title>Unit Layanan Terpadu | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5 order-2 order-md-1">
                    <h2 class="fw-bold">ULT POLIWANGI</h2>
                    <p class="fw-medium text-justify mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A
                        voluptates
                        quos
                        corporis,
                        minus blanditiis
                        eum omnis pariatur? Inventore nihil temporibus dolore distinctio quas odit neque ratione deserunt,
                        ea
                        aspernatur quisquam accusamus illo sint quae necessitatibus voluptate repellat omnis autem, aliquam,
                        eaque maiores. Nobis quas eum quisquam enim ea omnis nostrum.</p>

                    <div class="mt-5">
                        <a href="{{ route('home.page') }}#formulir" class="btn btn-theme-two px-5 py-3">
                            Ajukan Sekarang
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-2">
                    <center>
                        <img src="{{ asset('images/landing-page.svg') }}" width="450" class="img-fluid" alt="">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section id="formulir" class="container-fluid section-bg-two py-5">
        <div class="container py-5">
            <div class="row d-flex pt-5">
                <h3 class="fw-bold mt-3 text-center">Kategori Pemohon</h3>
            </div>

            <div class="row py-5 d-flex justify-content-around">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 mb-4 card card-hover card-rounded">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body">
                                <div>
                                    <div class="card-body d-flex">
                                        <img src="{{ asset('images/pemohon-dosen.png') }}" class="img-fluid mx-auto"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <center>
                                        <small><a href="{{ route('pengajuan.dosen.page') }}"
                                                class="tag-menu text-black fw-medium">Dosen</a></small>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-3 mb-4 card card-hover card-rounded">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body">
                                <div>
                                    <div class="card-body d-flex">
                                        <img src="{{ asset('images/pemohon-mahasiswa.png') }}" class="img-fluid mx-auto"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <center>
                                        <small><a href="{{ route('pengajuan.mahasiswa.page') }}"
                                                class="tag-menu text-black fw-medium">Mahasiswa</a></small>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-3 mb-4 card card-hover card-rounded">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body">
                                <div>
                                    <div class="card-body d-flex">
                                        <img src="{{ asset('images/pemohon-umum.png') }}" class="img-fluid mx-auto"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <center>
                                        <small><a href="{{ route('pengajuan.umum.page') }}"
                                                class="tag-menu text-black fw-medium">Umum</a></small>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="lacak_dokumen" class="container-fluid section-bg-one py-5">
        <div class="row d-flex pt-5">
            <h3 class="fw-bold mt-3 text-center">Lacak Dokumen</h3>
        </div>

        <div class="container py-5">
            <div class="row py-5 d-flex justify-content-around">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 mb-5">
                    <div class="d-flex">
                        <img src="{{ asset('images/tracking-ilustrator.svg') }}" class="img-fluid mx-auto my-auto"
                            width="300" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 mb-5">
                    <div class="card card-rounded card-hover shadow">
                        <div class="card-body">

                            <form accept="#" method="POST" class="p-3">
                                @csrf
                                <label class="form-label fw-bold mb-3">Lacak Dokumen Sekarang !</label>

                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan Email Akun">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="ticket_code" id="ticket_code"
                                        placeholder="Masukkan ID Pelaporan">
                                </div>

                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-theme" type="button">Lacak Status</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang_kami" class="container-fluid section-bg-two py-5">
        <div class="container py-5">
            <div class="row py-5 d-flex justify-content-around">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-5 d-flex">
                    <img src="{{ asset('images/logo-title-poliwangi.png') }}" class="img-fluid mx-auto my-auto"
                        width="300" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div>
                        <h2 class="fw-bold">Tentang Kami</h2>

                        <p class="text-justify mt-4">
                            Politeknik Negeri Banyuwangi adalah perguruan tinggi negeri yang terletak di Kabupaten
                            Banyuwangi, Jawa Timur, Indonesia. Berdiri sejak tahun 2014, politeknik ini menawarkan program
                            studi vokasi dan terapan yang berkualitas, sesuai kebutuhan industri dan pasar kerja. Dengan
                            fasilitas modern, termasuk laboratorium dan perpustakaan, politeknik ini berkomitmen untuk
                            menghasilkan tenaga terampil dan profesional yang berdaya saing tinggi. Melalui kemitraan aktif
                            dengan industri, mereka memberikan kesempatan magang dan penempatan kerja bagi mahasiswa.
                            Politeknik Negeri Banyuwangi memiliki visi menjadi politeknik unggulan yang berorientasi pada
                            keunggulan riset, pengabdian pada masyarakat, dan kewirausahaan.
                        </p>

                        <div class="mt-4">
                            <a href="#" class="btn btn-theme px-3 py-2">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
