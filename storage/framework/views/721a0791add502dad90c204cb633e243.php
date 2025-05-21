<?php if (isset($component)) { $__componentOriginal0158306fc982a943ee8c34ecfb2f590a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0158306fc982a943ee8c34ecfb2f590a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar','data' => ['href' => route('transaksi.penjualan')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('transaksi.penjualan'))]); ?>

    <!-- Add Sidebar Menu Items Here -->

    <?php if (isset($component)) { $__componentOriginal9b73651542edb7bdadd390483168d6a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b73651542edb7bdadd390483168d6a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-item','data' => ['name' => 'Dashboard','link' => route('dashboard'),'icon' => 'fa-solid fa-house']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Dashboard','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'icon' => 'fa-solid fa-house']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $attributes = $__attributesOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__attributesOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $component = $__componentOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__componentOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
    

    <?php if (\Illuminate\Support\Facades\Blade::check('role', 'presiden|superadmin')): ?>
        <?php if (isset($component)) { $__componentOriginal9b73651542edb7bdadd390483168d6a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b73651542edb7bdadd390483168d6a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-item','data' => ['name' => 'Produk','icon' => 'bi bi-shop-window']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Produk','icon' => 'bi bi-shop-window']); ?>
            <?php if (isset($component)) { $__componentOriginal38666840e1bd544a7053686848cd75c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38666840e1bd544a7053686848cd75c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-sub-item','data' => ['name' => 'Daftar Produk','link' => route('produk.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-sub-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Daftar Produk','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('produk.index'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $attributes = $__attributesOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__attributesOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $component = $__componentOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__componentOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
            
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $attributes = $__attributesOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__attributesOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $component = $__componentOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__componentOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
    <?php endif; ?>

    

    <?php if (\Illuminate\Support\Facades\Blade::check('role', 'presiden')): ?>
        <?php if (isset($component)) { $__componentOriginal9b73651542edb7bdadd390483168d6a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b73651542edb7bdadd390483168d6a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-item','data' => ['name' => 'Administrator','icon' => 'bi bi-person-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Administrator','icon' => 'bi bi-person-circle']); ?>
            <?php if (isset($component)) { $__componentOriginal38666840e1bd544a7053686848cd75c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38666840e1bd544a7053686848cd75c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-sub-item','data' => ['name' => 'Daftar User','link' => route('user.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-sub-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Daftar User','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('user.index'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $attributes = $__attributesOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__attributesOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $component = $__componentOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__componentOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal38666840e1bd544a7053686848cd75c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38666840e1bd544a7053686848cd75c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-sub-item','data' => ['name' => 'Role & Permission','link' => route('permission.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-sub-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Role & Permission','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('permission.index'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $attributes = $__attributesOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__attributesOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $component = $__componentOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__componentOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
            
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $attributes = $__attributesOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__attributesOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $component = $__componentOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__componentOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('role', 'owner')): ?>
        <?php if (isset($component)) { $__componentOriginal9b73651542edb7bdadd390483168d6a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b73651542edb7bdadd390483168d6a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-item','data' => ['name' => 'Produk','icon' => 'fa-solid fa-box','prefix' => 'produk']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Produk','icon' => 'fa-solid fa-box','prefix' => 'produk']); ?>
            <?php if (isset($component)) { $__componentOriginal38666840e1bd544a7053686848cd75c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38666840e1bd544a7053686848cd75c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-sub-item','data' => ['name' => 'Daftar Kategori','link' => route('produk.kategori.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-sub-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Daftar Kategori','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('produk.kategori.index'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $attributes = $__attributesOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__attributesOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $component = $__componentOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__componentOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal38666840e1bd544a7053686848cd75c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38666840e1bd544a7053686848cd75c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-sub-item','data' => ['name' => 'Daftar Produk','link' => route('produk.item.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-sub-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Daftar Produk','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('produk.item.index'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $attributes = $__attributesOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__attributesOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $component = $__componentOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__componentOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $attributes = $__attributesOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__attributesOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $component = $__componentOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__componentOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
        
        <?php if (isset($component)) { $__componentOriginal9b73651542edb7bdadd390483168d6a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b73651542edb7bdadd390483168d6a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-item','data' => ['name' => 'Pengaturan','icon' => 'bi bi-gear','prefix' => 'pengaturan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Pengaturan','icon' => 'bi bi-gear','prefix' => 'pengaturan']); ?>
            <?php if (isset($component)) { $__componentOriginal38666840e1bd544a7053686848cd75c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38666840e1bd544a7053686848cd75c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.maz-sidebar-sub-item','data' => ['name' => 'Undang Kasir','link' => route('pengaturan.undang_kasir.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('maz-sidebar-sub-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Undang Kasir','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('pengaturan.undang_kasir.index'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $attributes = $__attributesOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__attributesOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38666840e1bd544a7053686848cd75c6)): ?>
<?php $component = $__componentOriginal38666840e1bd544a7053686848cd75c6; ?>
<?php unset($__componentOriginal38666840e1bd544a7053686848cd75c6); ?>
<?php endif; ?>
            
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $attributes = $__attributesOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__attributesOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b73651542edb7bdadd390483168d6a5)): ?>
<?php $component = $__componentOriginal9b73651542edb7bdadd390483168d6a5; ?>
<?php unset($__componentOriginal9b73651542edb7bdadd390483168d6a5); ?>
<?php endif; ?>
    <?php endif; ?>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0158306fc982a943ee8c34ecfb2f590a)): ?>
<?php $attributes = $__attributesOriginal0158306fc982a943ee8c34ecfb2f590a; ?>
<?php unset($__attributesOriginal0158306fc982a943ee8c34ecfb2f590a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0158306fc982a943ee8c34ecfb2f590a)): ?>
<?php $component = $__componentOriginal0158306fc982a943ee8c34ecfb2f590a; ?>
<?php unset($__componentOriginal0158306fc982a943ee8c34ecfb2f590a); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\kasirok\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>