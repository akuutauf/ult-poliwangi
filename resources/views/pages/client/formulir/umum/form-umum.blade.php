@extends('layouts.base-client')

@section('title')
    <title>Formulir Pengajuan Umum | ULT Poliwangi</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Datedroppper JS --}}
    <script src="{{ asset('js-datedropper/datedropper-javascript.js') }}"></script>

    {{-- Start Style LiveWire --}}
    @livewireStyles
@endsection

@section('content')
    <section class="container-fluid section-bg-one">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="fw-bold"><i class="fa-solid fa-file-circle-plus"></i>&ensp; FORMULIR PENGAJUAN MAHASISWA</h2>

                    {{-- Livewire Pengajuan umum --}}
                    <livewire:formulir-pengajuan-umum></livewire:formulir-pengajuan-umum>

                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')

@livewireScripts

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

    <script>
        // Script to capture selected option from dropdown
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const selectedOptionInput = document.getElementById('selectedOption');
            const searchInput = document.getElementById('searchInput');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedValue = item.getAttribute('data-value');
                    selectedOptionInput.value = selectedValue;
                });
            });

            searchInput.addEventListener('input', function() {
                const searchValue = searchInput.value.toLowerCase();
                dropdownItems.forEach(item => {
                    const itemText = item.textContent.trim().toLowerCase();
                    if (itemText.includes(searchValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
