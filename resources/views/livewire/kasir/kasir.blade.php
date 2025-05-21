<div x-data="{ selectedKategori: 'All Menu' }">
    <style>
        .kategori-scroll {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            margin-bottom: 0;
            scrollbar-width: thin;
            /* Firefox */
        }

        .kategori-scroll::-webkit-scrollbar {
            height: 1px;
            /* Chrome/Safari */
        }

        .kategori-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Chrome/Safari */
        }

        .kategori-scroll::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
            /* Chrome/Safari */
        }

        .kategori-scroll::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Chrome/Safari */
        }

        .kategori-item {
            flex-shrink: 0;
            width: 160px;
        }
    </style>

    <div class="row">
        <div class="col-8">
            <div class="kategori-scroll mb-2">
                @foreach ($categorys as $k)
                    <div class="kategori-item">
                        <div @click="selectedKategori = '{{ $k['nama'] }}'"
                            :class="selectedKategori === '{{ $k['nama'] }}' ? 'border border-3 border-primary bg-info' : ''"
                            class="pointer card text-center">
                            <div class="card-body p-2">
                                <h6 class="font-extrabold mb-0">{{ $k['nama'] }}</h6>
                                <h6 class="text-muted font-semibold">{{ $k['ttl'] }} Items</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- pencarian input --}}
            <input wire:model.live.debounce.500ms="search" type="text" class="mt-3 form-control"
                placeholder="cari nama produk" autofocus>

            @php
                $produk = [
                    ['id' => 1, 'nama_produk' => 'produk 1', 'kategori' => 'kategori 1', 'harga' => 10000],
                    ['id' => 2, 'nama_produk' => 'produk 2', 'kategori' => 'kategori 2', 'harga' => 20000],
                    ['id' => 3, 'nama_produk' => 'produk 3', 'kategori' => 'kategori 3', 'harga' => 30000],
                    ['id' => 4, 'nama_produk' => 'produk 4', 'kategori' => 'kategori 4', 'harga' => 40000],
                    ['id' => 5, 'nama_produk' => 'produk 5', 'kategori' => 'kategori 5', 'harga' => 50000],
                ];
            @endphp

            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3 mt-3">
                @foreach ($produk as $p)
                    <div class="col pointer">
                        <div class="card border-0 shadow-sm rounded-4 text-center">
                            <img src="https://picsum.photos/id/63/200/200" class="card-img-top rounded-4 mx-auto p-1"
                                alt="..." style="width: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h6 class="card-title fw-semibold">{{ $p['nama_produk'] }}</h6>

                                <p class="card-text fw-bold text-primary mb-1">Rp
                                    {{ number_format($p['harga'], 0, ',', '.') }}</p>
                                <span class="badge bg-info text-dark rounded-pill" style="font-size: 0.65rem;">
                                    {{ $p['kategori'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Order Details -->

        </div>

        {{-- order detail --}}
        <div class="col-lg-4" x-data="{ inputNamaPelanggan: false }">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('transaksi.save_pembayaran') }}" method="post">
                        @csrf
                        <div class="d-flex">
                            {{-- <i class="bi bi-exclamation-circle-fill text-info fs-5"></i> --}}
                            <div class="flex-grow-1 text-center">
                                @if ($inputToggle)
                                    <input wire:model.live="namaPelanggan" type="text"
                                        class="form-control form-control-sm">
                                @else
                                    <h6 class="mb-0">{{ $namaPelanggan }}</h6>
                                @endif
                                <small class="text-muted">No Order: <b>#001</b></small>
                            </div>
                            <i wire:click="toggleInputNamaPelanggan"
                                class="fa-solid fs-5 pointer btn-nama-pelanggan {{ $inputToggle ? 'fa-times-circle ms-2' : 'fa-pencil-alt' }}"></i>
                        </div>
                        <hr>

                        <div wire:loading wire:target="addToCart">
                            <div class="spinner-border text-primary mt-1" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                        <div class="d-none text-center mt-3">
                            <h6 class="text-muted">Tidak ada item</h6>
                        </div>
                        <hr style="border: 1px dashed #adb5bd; border-radius: 1px;">
                        <div class="d-flex justify-content-between">
                            <h6>Sub Total</h6>
                            <h6>Rp 120000</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Tax (10%)</span>
                            <span>Rp 12000</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Diskon</span>
                            <span>Rp 0</span>
                        </div>
                        <hr style="border: 1px dashed #adb5bd; border-radius: 1px;">
                        <div class="d-flex justify-content-between">
                            <h6><b>Grand Total</b></h6>
                            <h6><b>Rp 150000</b></h6>
                        </div>
                        <input type="hidden" name="totalPrice" value="150000">
                        <button type="submit" class="mt-3 btn btn-primary btn-block"><i class="fa fa-save"></i>
                            Pembayaran</button>
                    </form>
                </div>
            </div>
            {{ $namaPelanggan ?? 'ada' }}

        </div>

        <script>
            document.addEventListener('livewire:initialized', () => {
                $(document).ready(function() {
                    $('.btn-nama-pelanggan').on('click', function() {
                        $('#namaPelanggan').modal('show');
                    })
                });
            })
        </script>
    </div>
