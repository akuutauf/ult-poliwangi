@extends('layouts.base-client')

@section('title')
    <title>Formulir Survei Kepuasan Pengguna | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row py-3" data-aos="fade-down" data-aos-delay="300">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <h2 class="fw-bold"><i class="fa-regular fa-face-smile-beam"></i>&ensp; SURVEI KEPUASAN PENGGUNA</h2>
                        <small>Terimakasih, Silahkan Salin Kode Berikut untuk Melihat Progress Dokumen.</small>
                    </center>
                </div>
            </div>

            <div class="row d-flex justify-content-center" data-aos="fade-down" data-aos-delay="300">
                <div class="col-12 d-flex mb-4">
                    <button class="btn btn-theme mx-auto" onclick="copyToClipboard()">#{{ $data_pengajuan->kode_tiket }} <i
                            class="far fa-copy"></i></button>
                </div>
                <div class="col-12">
                    <center>
                        <span id="copyAlert"></span>
                    </center>
                </div>
            </div>

            <form action="{{ route('survei.kepuasan.pengguna.create', $data_pengajuan->id) }}" method="POST"
                class="p-3">
                @csrf

                <div class="mb-3">
                    <div class="row mb-4">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-1" data-aos="zoom-in" data-aos-delay="600">
                            <div class="d-flex">
                                <div class="card-service p-2 mx-auto my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2 11C2 5.477 6.477 1 12 1s10 4.477 10 10v5.154C22 17.8 20.58 19 19 19h-3v-8h4a8 8 0 1 0-16 0h4v8H6.063A2 2 0 0 0 8 20.5h1.564c.316-.453.841-.75 1.436-.75h2a1.75 1.75 0 1 1 0 3.5h-2c-.595 0-1.12-.297-1.436-.75H8a4 4 0 0 1-3.986-3.66C2.874 18.463 2 17.446 2 16.155V11Zm4 6v-4H4v3.154c0 .393.37.846 1 .846h1Zm14-4h-2v4h1c.63 0 1-.453 1-.846V13Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-10 col-sm-10 col-md-10 col-lg-11 d-flex" data-aos="zoom-in" data-aos-delay="600">
                            <div class="my-auto">
                                <h3 class="fw-bold">Pelayanan Admin ULT</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-8 mb-1 d-flex" data-aos="fade-up" data-aos-delay="900">
                            <h5 for="rating" class="fw-medium my-auto text-justify">
                                Tingkat Keramahan dan Kesopanan dalam melayani administrasi
                            </h5>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-1" data-aos="fade-up" data-aos-delay="900">
                            <div class="mb-2 d-flex">
                                <div class="rating d-flex justify-content-start py-4 mx-auto">
                                    <div class="px-2">
                                        <!--begin::Star 1-->
                                        <label class="rating-label" for="kt_rating_input_1_1">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_1" value="1" type="radio"
                                            id="kt_rating_input_1_1" />
                                        <!--end::Star 1-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 2-->
                                        <label class="rating-label" for="kt_rating_input_2_1">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_1" value="2" type="radio"
                                            id="kt_rating_input_2_1" name="rating_1" />
                                        <!--end::Star 2-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 3-->
                                        <label class="rating-label" for="kt_rating_input_3_1">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_1" value="3" type="radio"
                                            id="kt_rating_input_3_1" name="rating_1" />
                                        <!--end::Star 3-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 4-->
                                        <label class="rating-label" for="kt_rating_input_4_1">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_1" value="4" type="radio"
                                            id="kt_rating_input_4_1" name="rating_1" />
                                        <!--end::Star 4-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 5-->
                                        <label class="rating-label" for="kt_rating_input_5_1">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_1" value="5" type="radio"
                                            id="kt_rating_input_5_1" name="rating_1" />
                                        <!--end::Star 5-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-8 mb-1 d-flex" data-aos="fade-up"
                            data-aos-delay="900">
                            <h5 for="rating" class="fw-medium my-auto text-justify">
                                Tingkat pengetahuan, keterampilan, dan pengalaman dalam melayani administrasi
                            </h5>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-1" data-aos="fade-up" data-aos-delay="900">
                            <div class="mb-2 d-flex">
                                <div class="rating d-flex justify-content-start py-4 mx-auto">
                                    <div class="px-2">
                                        <!--begin::Star 1-->
                                        <label class="rating-label" for="kt_rating_input_1_2">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_2" value="1" type="radio"
                                            id="kt_rating_input_1_2" />
                                        <!--end::Star 1-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 2-->
                                        <label class="rating-label" for="kt_rating_input_2_2">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_2" value="2" type="radio"
                                            id="kt_rating_input_2_2" name="rating_2" />
                                        <!--end::Star 2-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 3-->
                                        <label class="rating-label" for="kt_rating_input_3_2">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_2" value="3" type="radio"
                                            id="kt_rating_input_3_2" name="rating_2" />
                                        <!--end::Star 3-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 4-->
                                        <label class="rating-label" for="kt_rating_input_4_2">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_2" value="4" type="radio"
                                            id="kt_rating_input_4_2" name="rating_2" />
                                        <!--end::Star 4-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 5-->
                                        <label class="rating-label" for="kt_rating_input_5_2">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_2" value="5" type="radio"
                                            id="kt_rating_input_5_2" name="rating_2" />
                                        <!--end::Star 5-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-8 mb-1 d-flex" data-aos="fade-up"
                            data-aos-delay="900">
                            <h5 for="rating" class="fw-medium my-auto text-justify">
                                Pelaksanaan pengaduan dan tindak lanjut telah dikelola dengan baik
                            </h5>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-1" data-aos="fade-up" data-aos-delay="900">
                            <div class="mb-2 d-flex">
                                <div class="rating d-flex justify-content-start py-4 mx-auto">
                                    <div class="px-2">
                                        <!--begin::Star 1-->
                                        <label class="rating-label" for="kt_rating_input_1_3">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_3" value="1" type="radio"
                                            id="kt_rating_input_1_3" />
                                        <!--end::Star 1-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 2-->
                                        <label class="rating-label" for="kt_rating_input_2_3">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_3" value="2" type="radio"
                                            id="kt_rating_input_2_3" name="rating_3" />
                                        <!--end::Star 2-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 3-->
                                        <label class="rating-label" for="kt_rating_input_3_3">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_3" value="3" type="radio"
                                            id="kt_rating_input_3_3" name="rating_3" />
                                        <!--end::Star 3-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 4-->
                                        <label class="rating-label" for="kt_rating_input_4_3">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_3" value="4" type="radio"
                                            id="kt_rating_input_4_3" name="rating_3" />
                                        <!--end::Star 4-->
                                    </div>

                                    <div class="px-2">
                                        <!--begin::Star 5-->
                                        <label class="rating-label" for="kt_rating_input_5_3">
                                            <i class="fa-solid fa-star star-rating"></i>
                                        </label>
                                        <input class="rating-input" name="rating_3" value="5" type="radio"
                                            id="kt_rating_input_5_3" name="rating_3" />
                                        <!--end::Star 5-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="1200">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold mb-3">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Masukkan Email Anda" value="{{ $data_pengajuan->email }}">
                        @error('email')
                            <div id="email" class="form-text pb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold mb-3">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            id="nama" placeholder="Nama Lengkap Anda" value="{{ $data_pengajuan->nama_pemohon }}">
                        @error('nama')
                            <div id="nama" class="form-text pb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="saran" class="form-label fw-bold mb-3">Saran</label>
                        <textarea class="form-control @error('saran') is-invalid @enderror" name="saran" id="saran"
                            placeholder="Berikan saran terbaik untuk kami" rows="5"></textarea>
                        @error('saran')
                            <div id="saran" class="form-text pb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-start py-4">
                        <button type="submit" class="btn btn-theme">Submit Survei</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection

@section('script')
    {{-- AOS initiate --}}
    <script>
        AOS.init();
    </script>

    {{-- Star Rating Script --}}
    <script>
        const ratingInputs = document.querySelectorAll('.rating-input');

        ratingInputs.forEach(ratingInput => {
            ratingInput.addEventListener('change', () => {
                const currentRating = ratingInput.value;
                const starLabels = ratingInput.parentNode.parentNode.querySelectorAll('.rating-label i');

                starLabels.forEach((starLabel, index) => {
                    if (index < currentRating) {
                        starLabel.classList.add('checked');
                    } else {
                        starLabel.classList.remove('checked');
                    }
                });
            });
        });
    </script>

    {{-- Copy Clipboard --}}
    <script>
        function copyToClipboard() {
            /* Teks yang ingin Anda salin */
            var textToCopy = @json($data_pengajuan->kode_tiket);

            /* Buat elemen textarea sementara untuk menyalin teks */
            var tempTextArea = document.createElement("textarea");
            tempTextArea.value = textToCopy;

            /* Append elemen textarea sementara ke dokumen */
            document.body.appendChild(tempTextArea);

            /* Select teks di dalam elemen textarea sementara */
            tempTextArea.select();
            tempTextArea.setSelectionRange(0, 99999); /* Untuk perangkat mobile */

            /* Salin teks di dalam elemen textarea sementara ke clipboard */
            document.execCommand("copy");

            /* Hapus elemen textarea sementara dari dokumen */
            document.body.removeChild(tempTextArea);

            /* Pesan notifikasi bahwa teks telah berhasil disalin (Anda dapat menyesuaikan bagian ini) */
            const copyAlert = document.getElementById("copyAlert");
            copyAlert.textContent = "✔️ Kode Tiket Berhasil Disalin!";
            setTimeout(function() {
                copyAlert.textContent = "";
            }, 2000); // Menghilangkan pesan setelah 2 detik
        }
    </script>
@endsection
