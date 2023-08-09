<div>
    <form class="mt-5" action="#" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-1">
                <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon"
                        placeholder="Nama Lengkap">
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                    <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas"
                        placeholder="No KTP / NIM">
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label for="email" class="form-label">Email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Alamat Email Pemohon">
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon"
                        placeholder="Nomor Telepon / Nomor WA">
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label class="form-label" for="id_prodi">Program Studi</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                    <select class="form-control" id="id_prodi" name="id_prodi">
                        <option value="">Pilih Prodi</option>
                        @foreach ($prodis as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_prodi }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Livewire select input --}}
            {{-- <div class="col-md-6 mb-1">
                <label class="form-label" for="id_layanan">Layanan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-hands-holding"></i></span>
                    <select wire:model="byLayanans" class="form-control" id="id_layanan" name="id_layanan">
                        <option value="">Pilih Layanan</option>
                        @foreach ($layanans as $data)
                            <option value="{{ $data->id }}">{{ $data->divisi->nama_divisi }} -
                                {{ $data->nama_layanan }}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}

            <div class="col-md-6 mb-1">
                <label class="form-label" for="id_layanan">Layanan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-hands-holding"></i></span>
                    <select class="form-control" id="id_layanan" name="id_layanan" wire:model="byLayanans"
                        onchange="filterByLayanans(this.value)">
                        <option value="">Pilih Layanan</option>
                        @foreach ($layanans as $data)
                            <option value="{{ $data->id }}">{{ $data->divisi->nama_divisi }} -
                                {{ $data->nama_layanan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <label for="tanggal_permohonan" class="form-label">Tanggal</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                    <input type="date" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan">
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn btn-theme" type="button">Submit</button>
        </div>

        <div class="card mt-5">
            <div class="card-body p-4">
                <div class="card-title">
                    Persyaratan Layanan :
                </div>
                @if ($byLayanans)
                    @if ($persyaratan_berkas->count())
                        <ol>
                            @foreach ($persyaratan_berkas as $persyaratan)
                                <li>{{ $persyaratan->berkas->nama_berkas }}</li>
                            @endforeach
                        </ol>
                    @endif
                @else
                    <p>Pilih layanan untuk melihat persyaratan.</p>
                @endif
            </div>
        </div>


    </form>
</div>
