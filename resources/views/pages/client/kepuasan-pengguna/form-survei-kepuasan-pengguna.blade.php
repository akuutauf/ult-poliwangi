@extends('layouts.base-client')

@section('title')
    <title>Formulir Survei Kepuasan Pengguna | ULT Poliwangi</title>
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <h2 class="fw-bold"><i class="fa-regular fa-face-smile-beam"></i>&ensp; SURVEI KEPUASAN PENGGUNA</h2>
                        <small>Terimakasih, Silahkan Salin Kode Berikut untuk Melihat Progress Dokumen.</small>
                    </center>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
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

            <div class="row py-5 d-flex justify-content-around">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 mb-5 order-2 order-md-1">
                    <form accept="#" method="POST" class="p-3">
                        @csrf

                        <div class="mb-2">
                            <label for="rating" class="fw-medium text-center">Bagaimana Pelayanan Kami</label>
                            <div class="rating d-flex justify-content-start py-4">

                                <div class="px-2">
                                    <!--begin::Star 1-->
                                    <label class="rating-label" for="kt_rating_input_1">
                                        <i class="fa-solid fa-star star-rating"></i>
                                    </label>
                                    <input class="rating-input" name="rating" value="1" type="radio"
                                        id="kt_rating_input_1" />
                                    <!--end::Star 1-->
                                </div>

                                <div class="px-2">
                                    <!--begin::Star 2-->
                                    <label class="rating-label" for="kt_rating_input_2">
                                        <i class="fa-solid fa-star star-rating"></i>
                                    </label>
                                    <input class="rating-input" name="rating" value="2" type="radio"
                                        id="kt_rating_input_2" name="rating" />
                                    <!--end::Star 2-->
                                </div>

                                <div class="px-2">
                                    <!--begin::Star 3-->
                                    <label class="rating-label" for="kt_rating_input_3">
                                        <i class="fa-solid fa-star star-rating"></i>
                                    </label>
                                    <input class="rating-input" name="rating" value="3" type="radio"
                                        id="kt_rating_input_3" name="rating" />
                                    <!--end::Star 3-->
                                </div>

                                <div class="px-2">
                                    <!--begin::Star 4-->
                                    <label class="rating-label" for="kt_rating_input_4">
                                        <i class="fa-solid fa-star star-rating"></i>
                                    </label>
                                    <input class="rating-input" name="rating" value="4" type="radio"
                                        id="kt_rating_input_4" name="rating" />
                                    <!--end::Star 4-->
                                </div>

                                <div class="px-2">
                                    <!--begin::Star 5-->
                                    <label class="rating-label" for="kt_rating_input_5">
                                        <i class="fa-solid fa-star star-rating"></i>
                                    </label>
                                    <input class="rating-input" name="rating" value="5" type="radio"
                                        id="kt_rating_input_5" name="rating" />
                                    <!--end::Star 5-->
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold mb-3">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email Anda" value="{{ $data_pengajuan->email }}">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold mb-3">Nama</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nama Lengkap Anda" value="{{ $data_pengajuan->nama_pemohon }}">
                        </div>

                        <div class="mb-3">
                            <label for="suggest" class="form-label fw-bold mb-3">Saran</label>
                            <textarea class="form-control" name="suggest" id="suggest" placeholder="Masukkan Saran Anda" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-theme mt-3" type="button">Submit Survei</button>
                    </form>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-5 mb-5 order-1 order-md-2 d-flex">
                    <img src="{{ asset('images/survey-ilustration.svg') }}" class="img-fluid mx-auto my-auto p-4"
                        alt="">
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
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
