<div>
    <form wire:submit.prevent="store">
        <div class="row" x-data="{
            nama: '',
        }">
            <div class="col-md-6">
                <div class="mb-3">
                    <label>No HP <span class="text-danger">*</span></label>
                    <input type="text" placeholder="Contoh : 08123456789" wire:model="form.no_hp" class="form-control" required>
                    @error('form.no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                    <input x-model="nama" wire:model="form.nama_lengkap" type="text" placeholder="Contoh : Budi" id="nama" name="nama_lengkap" class="form-control" required>
                    @error('form.nama_lengkap') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label>Instagram/Facebook <span style="font-size: 12px" class="text-muted">(Gunakan @ untuk instagram)</span></label>
                    <input type="text" wire:model="form.instagram_facebook" placeholder="@contoh / contoh" class="form-control">
                    @error('form.instagram_facebook') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Alamat Lengkap<span class="text-danger">*</span></label>
                    <textarea wire:model="form.alamat" placeholder="Contoh : Jl. Raya No. 1" class="form-control" rows="1" required></textarea>
                    @error('form.alamat') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label>Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.tempat_lahir" placeholder="Contoh : Jakarta" class="form-control" required>
                    @error('form.tempat_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" wire:model="form.tanggal_lahir" class="form-control" required>
                    @error('form.tanggal_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Jenis Kelamin <span class="text-danger">*</span></label>
                    <select wire:model="form.jenis_kelamin" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('form.jenis_kelamin') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Nama Panggilan <span style="font-size: 12px" class="text-muted">(Diambil dari nama lengkap)</span></label>
                    <input placeholder="Contoh : Budi" wire:model="form.nama_panggilan" type="text" id="nama" name="nama_panggilan" class="form-control" required>
                    @error('form.nama_panggilan') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Sekolah Di <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.sekolah_di" placeholder="Contoh : SDN 1 Jakarta" class="form-control" required>
                    @error('form.sekolah_di') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Agama <span class="text-danger">*</span></label>
                    <select wire:model="form.agama" class="form-control" required>
                        <option value="">Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    @error('form.agama') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Nama Orangtua <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.nama_orangtua" placeholder="Contoh : Andi" class="form-control" required>
                    @error('form.nama_orangtua') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>No HP Orangtua <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.no_hp_orangtua" placeholder="Contoh : 08123456789" class="form-control" required>
                    @error('form.no_hp_orangtua') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="float-end btn btn-primary btn-block">Simpan</button>
            </div>
        </div>
    </form>
</div>
