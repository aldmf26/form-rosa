<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['icon', 'link' => '#', 'name', 'prefix']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['icon', 'link' => '#', 'name', 'prefix']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $routeName = Route::currentRouteName();

    // Jika prefix tidak dikasih, ambil dari nama
    $prefix = $prefix ?? strtolower($name);

    // Cek apakah route name dimulai dengan prefix ini
    $active = Str::startsWith($routeName, $prefix . '.');

    $hasSub = !$slot->isEmpty();
    $classes = 'sidebar-item' . ($active ? ' active' : '') . ($hasSub ? ' has-sub' : '');
?>

<li class="<?php echo e($classes); ?>">
    <a href="<?php echo e($hasSub ? '#' : $link); ?>" class="sidebar-link">
        <i class="<?php echo e($icon); ?>"></i>
        <span><?php echo e($name); ?></span>
    </a>
    <?php if($hasSub): ?>
        <ul class="submenu" style="display: <?php echo e($active ? 'block' : 'none'); ?>;">
            <?php echo e($slot); ?>

        </ul>
    <?php endif; ?>
</li>
<?php /**PATH C:\laragon\www\kasirok\resources\views/components/maz-sidebar-item.blade.php ENDPATH**/ ?>