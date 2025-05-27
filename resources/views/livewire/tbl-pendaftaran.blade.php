 <div class="section mt-3" x-data="{
    viewByBulan: false,
    viewByCustom: false,
     nama_lengkap: '',
     id: '',
     openModal(modal) {
         $wire.idSelected = this.id
         $('#' + modal).modal('show');
     },
     init() {
         Livewire.on('closeModal', () => {
             $('#hapus').modal('hide');
             $('#tambah').modal('hide');
             $('#modalPerbulan').modal('hide');
             $('#modalCustom').modal('hide') ;
         });
     },
 }">
     <div class="row">
         <div class="col-lg-12">
             <x-alert />
             <x-table-action placeholder="cari pendaftar" filter="true" />

             <table class="table table-hover table-bordered">
                 <thead>
                     <tr>
                         <th class="text-center">No</th>
                         <th>Nama Lengkap</th>
                         <th>No Telepon</th>
                         <th>Tanggal Daftar</th>
                         <th>
                            Aktif
                            <x-tooltip title="Aktifkan/Nonaktifkan pendaftaran" />
                        </th>
                         <th width="150">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($pendaftars as $p)
                         <tr>
                             <td align="center">{{ $loop->iteration }}</td>
                             <td>{{ $p->nama_lengkap }}</td>
                             <td>{{ $p->no_hp }}</td>
                             <td>{{ $p->tanggal_daftar }}</td>
                             <td>
                                 <x-toggle wire:click="toggleAktif({{ $p->id }})" :id="$p->id"
                                     :aktif="$p->is_active" />
                             </td>
                             <td>
                                 <a target="_blank" href="{{ route('detail', $p->no_hp) }}"
                                     class="btn btn-info btn-sm">Lihat</a>

                                 <button
                                     @click="nama_lengkap = '{{ $p->nama_lengkap }}'; id = '{{ $p->id }}'; openModal('hapus')"
                                     type="button" class="btn btn-sm btn-outline-danger btnHapus">Hapus</button>

                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
             {{ $pendaftars->links() }}
         </div>
     </div>

     <form wire:submit.prevent="store">
         <x-modal idModal="tambah" title="Tambah Pendaftar" size="modal-lg">
             <div class="row" x-data="{
                 nama: '',
             }">
                 <div class="col-md-6">
                     <div class="mb-3">
                         <label>No HP <span class="text-danger">*</span></label>
                         <input type="text" placeholder="Contoh : 08123456789" wire:model="form.no_hp"
                             class="form-control" required>
                     </div>
                     <div class="mb-3">
                         <label>Nama Lengkap <span class="text-danger">*</span></label>
                         <input x-model="nama" wire:model="form.nama_lengkap" type="text" placeholder="Contoh : Budi" id="nama"
                             name="nama_lengkap" class="form-control" required>
                     </div>

                     <div class="mb-3">
                         <label>Instagram/Facebook <span style="font-size: 12px" class="text-muted">(Gunakan @ untuk
                                 instagram)</span></label>
                         <input type="text" wire:model="form.instagram_facebook" placeholder="@contoh / contoh"
                             class="form-control">
                     </div>
                     <div class="mb-3">
                         <label>Alamat Lengkap<span class="text-danger">*</span></label>
                         <textarea wire:model="form.alamat" placeholder="Contoh : Jl. Raya No. 1" class="form-control" rows="1" required></textarea>
                     </div>

                     <div class="mb-3">
                         <label>Tempat Lahir <span class="text-danger">*</span></label>
                         <input type="text" wire:model="form.tempat_lahir" placeholder="Contoh : Jakarta"
                             class="form-control" required>
                     </div>
                     <div class="mb-3">
                         <label>Tanggal Lahir <span class="text-danger">*</span></label>
                         <input type="date" wire:model="form.tanggal_lahir" class="form-control" required>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="mb-3">
                         <label>Jenis Kelamin <span class="text-danger">*</span></label>
                         <select wire:model="form.jenis_kelamin" class="form-control" required>
                             <option value="laki-laki">Laki-laki</option>
                             <option value="perempuan">Perempuan</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label>Nama Panggilan <span style="font-size: 12px" class="text-muted">(Diambil dari nama
                                 lengkap)</span></label>
                         <input placeholder="Contoh : Budi"  wire:model="form.nama_panggilan" type="text"  id="nama"
                             name="nama_panggilan" class="form-control" required>
                     </div>
                     <div class="mb-3">
                         <label>Sekolah Di <span class="text-danger">*</span></label>
                         <input type="text" wire:model="form.sekolah_di" placeholder="Contoh : SDN 1 Jakarta"
                             class="form-control" required>
                     </div>
                     <div class="mb-3">
                         <label>Agama <span class="text-danger">*</span></label>
                         <select wire:model="form.agama" class="form-control" required>
                             <option value="islam">Islam</option>
                             <option value="kristen">Kristen</option>
                             <option value="hindu">Hindu</option>
                             <option value="budha">Budha</option>
                             <option value="lainnya">Lainnya</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label>Nama Orangtua <span class="text-danger">*</span></label>
                         <input type="text" wire:model="form.nama_orangtua" placeholder="Contoh : Andi"
                             class="form-control" required>
                     </div>
                     <div class="mb-3">
                         <label>No HP Orangtua <span class="text-danger">*</span></label>
                         <input type="text" wire:model="form.no_hp_orangtua" placeholder="Contoh : 08123456789"
                             class="form-control" required>
                     </div>
                     {{-- <div class="mb-3">
                            <label>Foto Diri <span class="text-danger">*</span></label>
                            <input type="file" name="foto" class="form-control" onchange="loadFile(event)">
                            <img id="output" src="" style="max-width: 200px; max-height: 200px;" class="mt-2 d-none">
                            <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    output.classList.remove('d-none');
                                };
                            </script>
                        </div> --}}
                 </div>
             </div>
         </x-modal>
     </form>

     <x-modal btnHapus="Y" btnSave="T" idModal="hapus" title="Hapus Data">
         <p>Apakah Anda yakin ingin menghapus data <strong x-text="nama_lengkap"></strong>?</p>
     </x-modal>
 </div>
