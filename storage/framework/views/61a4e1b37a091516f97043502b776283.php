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
             $('#modalCustom').modal('hide');
         });
     },
 }">

     <!--[if BLOCK]><![endif]--><?php if($filterType === 'custom' && ($dari || $sampai)): ?>
         <h6>Data Per Tanggal:
             <!--[if BLOCK]><![endif]--><?php if($dari && $sampai): ?>
                 <?php echo e(tanggal($dari)); ?> ~ <?php echo e(tanggal($sampai)); ?>

             <?php elseif($dari): ?>
                 Mulai: <?php echo e(tanggal($dari)); ?>

             <?php else: ?>
                 Sampai: <?php echo e(tanggal($sampai)); ?>

             <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
         </h6>
     <?php else: ?>
         <h6>Data Per Bulan: <?php echo e(\Carbon\Carbon::createFromDate(null, $bulan, 1)->locale('id_ID')->monthName); ?> <?php echo e(empty($tahun)  ? date('Y') : $tahun); ?></h6>
     <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
     <div class="row">
         <div class="col-lg-12">
             <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
             <?php if (isset($component)) { $__componentOriginal3cb096f2e62c7df2672a776d39e07de4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cb096f2e62c7df2672a776d39e07de4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-action','data' => ['placeholder' => 'cari pendaftar','filter' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'cari pendaftar','filter' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cb096f2e62c7df2672a776d39e07de4)): ?>
<?php $attributes = $__attributesOriginal3cb096f2e62c7df2672a776d39e07de4; ?>
<?php unset($__attributesOriginal3cb096f2e62c7df2672a776d39e07de4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cb096f2e62c7df2672a776d39e07de4)): ?>
<?php $component = $__componentOriginal3cb096f2e62c7df2672a776d39e07de4; ?>
<?php unset($__componentOriginal3cb096f2e62c7df2672a776d39e07de4); ?>
<?php endif; ?>

             <table class="table table-hover table-bordered">
                 <thead>
                     <tr>
                         <th class="text-center">No</th>
                         <th>Nama Lengkap</th>
                         <th>No Telepon</th>
                         <th>Tanggal Daftar</th>
                         <th>
                             Aktif
                             <?php if (isset($component)) { $__componentOriginal7875b222dc4d64f17fd6d2e345da8799 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7875b222dc4d64f17fd6d2e345da8799 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tooltip','data' => ['title' => 'Aktifkan/Nonaktifkan pendaftaran']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Aktifkan/Nonaktifkan pendaftaran']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7875b222dc4d64f17fd6d2e345da8799)): ?>
<?php $attributes = $__attributesOriginal7875b222dc4d64f17fd6d2e345da8799; ?>
<?php unset($__attributesOriginal7875b222dc4d64f17fd6d2e345da8799); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7875b222dc4d64f17fd6d2e345da8799)): ?>
<?php $component = $__componentOriginal7875b222dc4d64f17fd6d2e345da8799; ?>
<?php unset($__componentOriginal7875b222dc4d64f17fd6d2e345da8799); ?>
<?php endif; ?>
                         </th>
                         <th width="150">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pendaftars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                             <td align="center"><?php echo e($loop->iteration); ?></td>
                             <td><?php echo e($p->nama_lengkap); ?></td>
                             <td><?php echo e($p->no_hp); ?></td>
                             <td><?php echo e($p->tanggal_daftar); ?></td>
                             <td>
                                 <?php if (isset($component)) { $__componentOriginal592735d30e1926fbb04ff9e089d1fccf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal592735d30e1926fbb04ff9e089d1fccf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.toggle','data' => ['wire:click' => 'toggleAktif('.e($p->id).')','id' => $p->id,'aktif' => $p->is_active]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'toggleAktif('.e($p->id).')','id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($p->id),'aktif' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($p->is_active)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal592735d30e1926fbb04ff9e089d1fccf)): ?>
<?php $attributes = $__attributesOriginal592735d30e1926fbb04ff9e089d1fccf; ?>
<?php unset($__attributesOriginal592735d30e1926fbb04ff9e089d1fccf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal592735d30e1926fbb04ff9e089d1fccf)): ?>
<?php $component = $__componentOriginal592735d30e1926fbb04ff9e089d1fccf; ?>
<?php unset($__componentOriginal592735d30e1926fbb04ff9e089d1fccf); ?>
<?php endif; ?>
                             </td>
                             <td>
                                 <a target="_blank" href="<?php echo e(route('detail', $p->no_hp)); ?>"
                                     class="btn btn-info btn-sm">Lihat</a>

                                 <button
                                     @click="nama_lengkap = '<?php echo e($p->nama_lengkap); ?>'; id = '<?php echo e($p->id); ?>'; openModal('hapus')"
                                     type="button" class="btn btn-sm btn-outline-danger btnHapus">Hapus</button>

                             </td>
                         </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                 </tbody>
             </table>
             <?php echo e($pendaftars->links()); ?>

         </div>
     </div>

     <form wire:submit.prevent="store">
         <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['idModal' => 'tambah','title' => 'Tambah Pendaftar','size' => 'modal-lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['idModal' => 'tambah','title' => 'Tambah Pendaftar','size' => 'modal-lg']); ?>
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
                         <input x-model="nama" wire:model="form.nama_lengkap" type="text" placeholder="Contoh : Budi"
                             id="nama" name="nama_lengkap" class="form-control" required>
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
                         <input placeholder="Contoh : Budi" wire:model="form.nama_panggilan" type="text"
                             id="nama" name="nama_panggilan" class="form-control" required>
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
                     
                 </div>
             </div>
          <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
     </form>

     <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['btnHapus' => 'Y','btnSave' => 'T','idModal' => 'hapus','title' => 'Hapus Data']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['btnHapus' => 'Y','btnSave' => 'T','idModal' => 'hapus','title' => 'Hapus Data']); ?>
         <p>Apakah Anda yakin ingin menghapus data <strong x-text="nama_lengkap"></strong>?</p>
      <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
 </div>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/livewire/tbl-pendaftaran.blade.php ENDPATH**/ ?>