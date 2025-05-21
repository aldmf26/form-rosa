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
    <form wire:submit.prevent="save">
        <div class="row g-3" id="form">
            <div class="col-md-3">
                <label for="" class="form-label">Posisi</label>
                <input readonly type="text" value="Kasir"class="form-control" placeholder="Masukkan Nama">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <x-label teks="Nama" required />
                <input type="text" wire:model="name" class="form-control" placeholder="Masukkan Nama">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <x-label teks="Email" required />
                <input type="email" wire:model="email" class="form-control" placeholder="Masukkan Email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="hidden" wire:model='idSelected'>
            </div>
            <div class="col-md-3">
                <x-label teks="Password" required />
                <input type="password" wire:model="password" class="form-control" placeholder="Masukkan Password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </div>
    </form>
    <x-alert />

    {{-- <x-table-action placeholder="cari kasir" filter="true" /> --}}
    <table class="table table-bordered table-hover table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aktif 
<x-tooltip title="Klik untuk mengaktifkan/nonaktifkan" />                    

                </th>
                <th width="200">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kasir as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->name }}</td>
                    <td>{{ $k->email }}</td>
                    <td>{{ $k->role }}</td>
                    <td>
                        <x-toggle wire:click="toggleAktif({{ $k->id }})" :id="$k->id" :aktif="$k->is_active" />

                    </td>
                    <td>
                        <button @click="shakeForm" wire:click="selectKasir({{ $k->id }})" type="button"
                            class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></button>

                        <button @click="nama = '{{ $k->name }}'; id = '{{ $k->id }}'; openModal('hapus')"
                            type="button" class="btn btn-sm btn-danger btnHapus"><i
                                class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $kasir->links() }}

    <form wire:submit='delete'>
        <x-modal idModal="hapus" title="Hapus Data">
            <p>Apakah Anda yakin ingin menghapus data <strong x-text="nama"></strong>?</p>
        </x-modal>
    </form>

</div>
