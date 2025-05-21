<div x-data="{
    openModal(modal) {
        $('#' + modal).modal('show');
    },
    init() {
        Livewire.on('closeModal', () => {
            $('#tambahKategori').modal('hide');
        });
    }
}">
    <form wire:submit.prevent="submit">
        <x-btn-tambah-modal label="produk">
            <div class="row g-3">
                <div class="col-md-6">
                    <x-label teks="Foto" required />
                    <div class="position-relative">
                        <input type="file" name="logo" class="form-control form-control-icon rounded-3"
                            accept="image/*" required wire:model="photo">
                        @error('photo')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <x-label teks="Penting" required />
                    <p class="text-secondary mt-1">
                            *Ukuran gambar 200x200px, format jpg/jpeg/png, max 1MB
                        </p>
                </div>
                {{-- <div class="col-md-6">
                    <img src="" id="preview-logo" class="img-thumbnail mt-2 d-none" width="100"
                        height="100" alt="Pratinjau Logo">
                </div> --}}
                <div class="col-md-6">
                    <x-label teks="Kategori" required />
                    <select wire:model="form.kategori_id" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                    <button @click="openModal('tambahKategori')" class="mt-2 btn btn-sm btn-primary" type="button"><i class="fa fa-plus"></i> Kategori</button>
                </div>

                <div class="col-md-6">
                    <x-label teks="Kode / Barcode" required />
                    <input type="text" wire:model="form.barcode" class="form-control"
                        placeholder="Contoh: 1234567890123">
                </div>

                <div class="col-md-6">
                    <x-label teks="Nama Produk" required />
                    <input type="text" wire:model="form.nama" class="form-control" placeholder="Contoh: Nasi Goreng">
                </div>

                <div class="col-md-6">
                    <x-label teks="Harga" required />
                    <input type="number" wire:model="form.harga" class="form-control" placeholder="Contoh: 15000">
                </div>

                <div class="col-md-6" x-data="{
                    stok: false
                }">
                    <x-label for="monitor_stok" teks="Monitor Stok" />
                    <input @click="stok = !stok" type="checkbox" id="monitor_stok" class="form-check-input"
                        wire:model="form.monitor_stok">
                    <input type="number" wire:model.lazy="form.stok" class="form-control"
                        placeholder="Masukkan Stok Awal Contoh : 10" :disabled="!stok">
                </div>


                <div class="col-md-6">
                    <x-label teks="Tipe Harga Default" />
                    <input type="text" value="Dine in" class="form-control" readonly>
                </div>

                <div class="col-md-12">
                    <x-label teks="Catatan" />
                    <textarea wire:model="form.deskripsi" class="form-control" rows="3" placeholder="Masukkan Catatan"></textarea>
                </div>

                <div class="col-md-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <x-label for="resep" teks="Gunakan Resep"
                                title="Centang ini jika barang ini terkait dengan resep" data-bs-toggle="tooltip"
                                data-bs-placement="top" />
                            <x-tooltip title="Centang ini jika barang ini terkait dengan resep" />
                        </div>
                        <input id="resep" type="checkbox" wire:model="form.gunakan_resep" class="form-check-input">
                    </div>
                    <div class="d-flex justify-content-between">
                        <x-label for="favorit" teks="Favorit" />
                        <input id="favorit" type="checkbox" wire:model="form.is_favorite" class="form-check-input">
                    </div>

                    <div class="d-flex justify-content-between">
                        <x-label for="aktif" teks="Aktif" />
                        <input id="aktif" type="checkbox" checked wire:model="form.is_active"
                            class="form-check-input">
                    </div>
                </div>
            </div>
        </x-btn-tambah-modal>
    </form>

    <form wire:submit.prevent="simpanKategori">
    <x-modal idModal="tambahKategori" title="Tambah Kategori">
            <div class="row g-3">
                <div class="col-md-6">
                    <x-label teks="Nama Kategori" required />
                    <input type="text" wire:model="namaKategori" class="form-control" placeholder="Contoh : Makanan">
                    @error('namaKategori')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <x-label teks="Urutan" required />
                    <input type="text" wire:model="urutanKategori" class="form-control" placeholder="Contoh : 1">
                    @error('urutanKategori')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </x-modal>
    </form>
</div>
