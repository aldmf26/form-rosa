<x-guest-layout title="Detail Pendaftar">
    <div class="container py-5">
        @auth
            <a href="{{ url()->previous() }}" class="btn btn-secondary"> Kembali</a>
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-print"></i> Print</a>

        @endauth
        <div class="mb-4">
            <h4 class="text-center text-success">{{ config('app.name') }}</h4>
            <p class="text-center text-muted">Halaman ini berisi informasi lengkap mengenai pendaftar.</p>

            @guest
                <div class="text-center">
                    @php
                        $noOwner = DB::table('nohp_admin')->first()->nohp;
                        $url = request()->url();
                        $nama = $pendaftar->nama_lengkap;
                        $pesan = "Saya%20 $nama %20ingin%20mengonfirmasi%20pendaftaran%20penerimaan%20inggris%20di%20$url";
                    @endphp

                    <a href="https://wa.me/{{ $noOwner }}?text={{ $pesan }}" target="_blank"
                        class="btn btn-success">Konfirmasi</a>
                </div>
            @endguest

        </div>

        <div class="text-center mb-4">
            @if ($pendaftar->getFirstMediaUrl('foto_diri'))
                <img src="{{ $pendaftar->getFirstMediaUrl('foto_diri') }}" alt="Foto" class="rounded-circle shadow"
                    width="120" height="120">
            @else
                <img src="https://ui-avatars.com/api/?name={{ urlencode($pendaftar->nama_lengkap) }}&background=343194&color=fff"
                    class="rounded-circle shadow" width="100" height="100">
            @endif
            <h4 class="mt-3">{{ $pendaftar->nama_lengkap }}</h4>
            <p class="mb-1 text-muted">{{ $pendaftar->alamat }}</p>
            @if ($pendaftar->kode_pos)
                <p class="text-muted mb-1">Kode Pos: {{ $pendaftar->kode_pos }}</p>
            @endif
            <p class="text-primary mb-1"><i class="fa fa-phone"></i> {{ $pendaftar->no_hp }}</p>
        </div>

        <div class="d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm rounded-4 p-4 bg-light">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Tempat, Tanggal Lahir:</strong><br>
                            {{ $pendaftar->tempat_lahir }},
                            {{ \Carbon\Carbon::parse($pendaftar->tanggal_lahir)->translatedFormat('d F Y') }}
                        </div>
                        <div class="col-md-6">
                            <strong>Jenis Kelamin:</strong><br>
                            {{ ucfirst($pendaftar->jenis_kelamin) }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Agama:</strong><br>
                            {{ ucfirst($pendaftar->agama) }}
                        </div>
                        <div class="col-md-6">
                            <strong>Asal Sekolah:</strong><br>
                            {{ $pendaftar->sekolah_di }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Nama Orangtua:</strong><br>
                            {{ $pendaftar->nama_orangtua }}
                        </div>
                        <div class="col-md-6">
                            <strong>No HP Orangtua:</strong><br>
                            {{ $pendaftar->no_hp_orangtua }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Tanggal Daftar:</strong><br>
                            {{ $pendaftar->tanggal_daftar }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
