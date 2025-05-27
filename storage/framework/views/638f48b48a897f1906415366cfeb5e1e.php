<div>
    <form wire:submit.prevent="store">
        <div class="row" x-data="{
            nama: '',
        }">
            <div class="col-md-6">
                <div class="mb-3">
                    <label>No HP <span class="text-danger">*</span></label>
                    <input type="text" placeholder="Contoh : 08123456789" wire:model="form.no_hp" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                    <input x-model="nama" wire:model="form.nama_lengkap" type="text" placeholder="Contoh : Budi" id="nama" name="nama_lengkap" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.nama_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3">
                    <label>Instagram/Facebook <span style="font-size: 12px" class="text-muted">(Gunakan @ untuk instagram)</span></label>
                    <input type="text" wire:model="form.instagram_facebook" placeholder="@contoh / contoh" class="form-control">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.instagram_facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>Alamat Lengkap<span class="text-danger">*</span></label>
                    <textarea wire:model="form.alamat" placeholder="Contoh : Jl. Raya No. 1" class="form-control" rows="1" required></textarea>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3">
                    <label>Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.tempat_lahir" placeholder="Contoh : Jakarta" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.tempat_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" wire:model="form.tanggal_lahir" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>Nama Panggilan <span style="font-size: 12px" class="text-muted">(Diambil dari nama lengkap)</span></label>
                    <input placeholder="Contoh : Budi" wire:model="form.nama_panggilan" type="text" id="nama" name="nama_panggilan" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.nama_panggilan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>Sekolah Di <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.sekolah_di" placeholder="Contoh : SDN 1 Jakarta" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.sekolah_di'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.agama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>Nama Orangtua <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.nama_orangtua" placeholder="Contoh : Andi" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.nama_orangtua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mb-3">
                    <label>No HP Orangtua <span class="text-danger">*</span></label>
                    <input type="text" wire:model="form.no_hp_orangtua" placeholder="Contoh : 08123456789" class="form-control" required>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.no_hp_orangtua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="float-end btn btn-primary btn-block">Simpan</button>
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/livewire/welcome-form.blade.php ENDPATH**/ ?>