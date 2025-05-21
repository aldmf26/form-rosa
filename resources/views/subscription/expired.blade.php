<x-app-layout :title="$title">
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div class="section">
        <div class="card">
            <div class="card-header">
                <h4>Langganan Anda Telah Kadaluarsa</h4>
            </div>
            <div class="card-body">
                <p>Silakan perpanjang langganan Anda untuk melanjutkan menggunakan aplikasi ini.</p>
                <p>Waktu Langganan:</p>
               
                <p><span class="badge bg-primary">Dimulai:</span> {{ tanggalId(auth()->user()->business->subscription_start) }}</p>
                <p><span class="badge bg-danger">Selesai:</span> {{ tanggalId(auth()->user()->business->subscription_end) }}</p>
                <p>Jika Anda memiliki pertanyaan atau masalah, silakan hubungi developer.</p>
            </div>
        </div>
    </div>


</x-app-layout>

