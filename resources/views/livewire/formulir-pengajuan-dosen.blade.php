<div>
    <form class="mt-5" action="{{ route('pengajuan.dosen.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-1">
                <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control @error('nama_pemohon') is-invalid @enderror"
                        id="nama_pemohon" name="nama_pemohon" placeholder="Nama Lengkap">
                </div>
                @error('nama_pemohon')
                    <div id="nama_pemohon" class="form-text pb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-1">
                <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                    <input type="text" class="form-control @error('nomor_identitas') is-invalid @enderror"
                        id="nomor_identitas" name="nomor_identitas" placeholder="No KTP / NIM" pattern="[0-9]*">
                </div>
                @error('nomor_identitas')
                    <div id="nomor_identitas" class="form-text pb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-1">
                <label for="email" class="form-label">Email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Alamat Email Pemohon">
                </div>
                @error('email')
                    <div id="email" class="form-text pb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-1">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <input type="number" class="form-control @error('nomor_telepon') is-invalid @enderror"
                        id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon / Nomor WA">
                </div>
                @error('nomor_telepon')
                    <div id="nomor_telepon" class="form-text pb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-1">
                <label class="form-label" for="id_prodi">Program Studi</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                    <select class="form-control @error('id_prodi') is-invalid @enderror" id="id_prodi" name="id_prodi">
                        <option value="">Pilih Prodi</option>
                        @foreach ($prodis as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_prodi }}</option>
                        @endforeach
                    </select>
                </div>
                @error('id_prodi')
                    <div id="id_prodi" class="form-text pb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-1">
                <label class="form-label" for="id_layanan">Layanan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-hands-holding"></i></span>
                    <select class="form-control @error('id_layanan') is-invalid @enderror" id="id_layanan"
                        name="id_layanan" wire:model="byLayanans" onchange="filterByLayanans(this.value)">
                        <option value="">Pilih Layanan</option>
                        @foreach ($layanans as $data)
                            <option value="{{ $data->id }}">{{ $data->divisi->nama_divisi }} -
                                {{ $data->nama_layanan }}</option>
                        @endforeach
                    </select>
                </div>
                @error('id_layanan')
                    <div id="id_layanan" class="form-text pb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-1">
                <label for="tanggal_permohonan" class="form-label">Tanggal</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                    <input type="text" data-dd-opt-custom-class="dd-theme-bootstrap"
                        class="form-control date-input @error('tanggal_permohonan') is-invalid @enderror"
                        id="tanggal_permohonan" name="tanggal_permohonan" placeholder="Tanggal Pengajuan">
                </div>
                @error('tanggal_permohonan')
                    <div id="tanggal_permohonan" class="form-text pb-1">{{ $message }}</div>
                @enderror
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
                        <span>Waktu Tunggu : {{ $persyaratan->layanan->estimasi_layanan }} Hari Kerja</span>
                    @else
                        <span>Belum ada persyaratan pada Layanan Ini.</span>
                    @endif
                @else
                    <p>Pilih layanan untuk melihat persyaratan.</p>
                @endif
            </div>
        </div>


    </form>
</div>
