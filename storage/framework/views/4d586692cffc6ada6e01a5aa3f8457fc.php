<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="d-flex justify-content-between">
            <h3><?php echo e($title); ?></h3>
            <button type="button" data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary"><i
                    class="fa fa-plus"></i> Tambah</button>
        </div>

     <?php $__env->endSlot(); ?>


    <div class="section">
        <?php
            $pesan = session()->get('error') ? 'error' : 'sukses';
        ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['pesan' => ''.e(session()->get($pesan)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pesan' => ''.e(session()->get($pesan)).'']); ?>
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
        <div class="row">
            <div class="col-lg-6">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?php echo e(route('permission.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <tr>
                                <td></td>
                                <td>
                                    <input required type="text" name="role" class="form-control"
                                        placeholder="tambah role baru">
                                </td>

                                <td>
                                    <button class="btn btn-sm btn-primary">Simpan</button>
                                </td>
                            </tr>
                        </form>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td class="d-flex gap-1">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#edit<?php echo e($role->id); ?>" class="btn btn-sm btn-primary"><i
                                            class="fa fa-edit"></i></button>
                                    <a onclick="return confirm('Yakin hapus?')"
                                        href="<?php echo e(route('permission.destroy', $role->id)); ?>"
                                        class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="<?php echo e(route('permission.update')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['idModal' => 'edit'.e($role->id).'','size' => 'modal-lg','title' => 'Tambah Produk','btnSave' => 'Y']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['idModal' => 'edit'.e($role->id).'','size' => 'modal-lg','title' => 'Tambah Produk','btnSave' => 'Y']); ?>
                <input type="hidden" name="role_id" value="<?php echo e($role->id); ?>">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Nama Role</label>
                            <input type="text" name="role" value="<?php echo e($role->name); ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- List Permission -->
                <div class="form-group">
                    <label for="">Permission</label>
                    <div class="row">
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input id="<?php echo e($permission->name . $role->id); ?>" type="checkbox" name="permission[]" value="<?php echo e($permission->name); ?>"
                                        class="form-check-input" <?php if($role->permissions->contains('name', $permission->name)): ?> checked <?php endif; ?>>
                                    <label for="<?php echo e($permission->name . $role->id); ?>" class="form-check-label"><?php echo e($permission->name); ?></label>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php if (isset($component)) { $__componentOriginale4dc0aef678dbbc21537a31f931d4573 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4dc0aef678dbbc21537a31f931d4573 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.multiple-input','data' => ['label' => 'Tambah Row']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('multiple-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tambah Row']); ?>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label for="">Permission</label>
                            <input type="text" name="permission[]" placeholder="contoh : produk.create"
                                class="form-control">
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4dc0aef678dbbc21537a31f931d4573)): ?>
<?php $attributes = $__attributesOriginale4dc0aef678dbbc21537a31f931d4573; ?>
<?php unset($__attributesOriginale4dc0aef678dbbc21537a31f931d4573); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4dc0aef678dbbc21537a31f931d4573)): ?>
<?php $component = $__componentOriginale4dc0aef678dbbc21537a31f931d4573; ?>
<?php unset($__componentOriginale4dc0aef678dbbc21537a31f931d4573); ?>
<?php endif; ?>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/permission_role/index.blade.php ENDPATH**/ ?>