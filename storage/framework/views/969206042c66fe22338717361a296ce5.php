<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Detail Pendaftar']); ?>
    <div class="container py-5">
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary"> Kembali</a>

        <?php endif; ?>
        <div class="mb-4">
            <h4 class="text-center text-success"><?php echo e(config('app.name')); ?></h4>
            <p class="text-center text-muted">Halaman ini berisi informasi lengkap mengenai pendaftar.</p>

            <?php if(auth()->guard()->guest()): ?>
                <div class="text-center">
                    <?php
                        $url = request()->url();
                        $nama = $pendaftar->nama_lengkap;
                        $pesan = "Saya%20 $nama %20ingin%20mengonfirmasi%20pendaftaran%20penerimaan%20inggris%20di%20$url";
                    ?>

                    <a href="https://wa.me/62895413111053?text=<?php echo e($pesan); ?>" target="_blank"
                        class="btn btn-success">Konfirmasi</a>
                </div>
            <?php endif; ?>

        </div>

        <div class="text-center mb-4">
            <?php if($pendaftar->getFirstMediaUrl('foto_diri')): ?>
                <img src="<?php echo e($pendaftar->getFirstMediaUrl('foto_diri')); ?>" alt="Foto" class="rounded-circle shadow"
                    width="120" height="120">
            <?php else: ?>
                <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode($pendaftar->nama_lengkap)); ?>&background=343194&color=fff"
                    class="rounded-circle shadow" width="100" height="100">
            <?php endif; ?>
            <h4 class="mt-3"><?php echo e($pendaftar->nama_lengkap); ?></h4>
            <p class="mb-1 text-muted"><?php echo e($pendaftar->alamat); ?></p>
            <?php if($pendaftar->kode_pos): ?>
                <p class="text-muted mb-1">Kode Pos: <?php echo e($pendaftar->kode_pos); ?></p>
            <?php endif; ?>
            <p class="text-primary mb-1"><i class="fa fa-phone"></i> <?php echo e($pendaftar->no_hp); ?></p>
        </div>

        <div class="d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm rounded-4 p-4 bg-light">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Tempat, Tanggal Lahir:</strong><br>
                            <?php echo e($pendaftar->tempat_lahir); ?>,
                            <?php echo e(\Carbon\Carbon::parse($pendaftar->tanggal_lahir)->translatedFormat('d F Y')); ?>

                        </div>
                        <div class="col-md-6">
                            <strong>Jenis Kelamin:</strong><br>
                            <?php echo e(ucfirst($pendaftar->jenis_kelamin)); ?>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Agama:</strong><br>
                            <?php echo e(ucfirst($pendaftar->agama)); ?>

                        </div>
                        <div class="col-md-6">
                            <strong>Asal Sekolah:</strong><br>
                            <?php echo e($pendaftar->sekolah_di); ?>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Nama Orangtua:</strong><br>
                            <?php echo e($pendaftar->nama_orangtua); ?>

                        </div>
                        <div class="col-md-6">
                            <strong>No HP Orangtua:</strong><br>
                            <?php echo e($pendaftar->no_hp_orangtua); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Tanggal Daftar:</strong><br>
                            <?php echo e($pendaftar->tanggal_daftar); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/pendaftaran/detail.blade.php ENDPATH**/ ?>