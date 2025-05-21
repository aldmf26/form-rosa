<div x-data="{
    nama: '',
    id: '',
    openModal(modal) {
        $wire.idSelected = this.id
        $('#' + modal).modal('show');
    },
    init() {
        Livewire.on('closeModal', () => {
            $('#hapus').modal('hide');
        });

    },
}">
    <form wire:submit.prevent="save" id="form">
        <div class="row g-3">
            <div class="col-md-3">
                <input type="hidden" wire:model='idSelected'>

                <x-label teks="Nama Kategori" required />
                <input type="text" wire:model='nama' class="form-control" placeholder="Contoh : Makanan">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <x-label teks="Urutan" required />
                <input type="text" wire:model="urutan" class="form-control" placeholder="Contoh : 1">
                @error('urutan')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-2 ">Simpan</button>
        </div>
    </form>
    <x-alert />

    <x-table-action placeholder="cari kategori" filter="true" />
    <table class="table table-bordered table-hover table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Urutan</th>
                <th>Jumlah Produk</th>
                <th>
                    Aktif
                    <x-tooltip title="Klik untuk mengaktifkan/nonaktifkan" />
                </th>
                <th width="200">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->urutan }}</td>
                    <td>{{ $k->produk->count() }} item</td>
                    <td>
                        <x-toggle wire:click="toggleAktif({{ $k->id }})" :id="$k->id" :aktif="$k->is_active" />
                    </td>
                    <td>
                        <button wire:click="selectKategori({{ $k->id }})" type="button"
                            class=" btn btn-sm btn-primary" @click="shakeForm"><i class="fa fa-pen"></i></button>

                        <button @click="nama = '{{ $k->nama }}'; id = '{{ $k->id }}'; openModal('hapus')"
                            type="button" class=" btn btn-sm btn-danger btnHapus"><i
                                class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $kategori->links() }}

    <form wire:submit='delete'>
        <x-modal idModal="hapus" title="Hapus Data">
            <p>Apakah Anda yakin ingin menghapus data <strong x-text="nama"></strong>?</p>
        </x-modal>
    </form>
</div>
