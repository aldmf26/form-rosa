<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => 'Dashboard',
]));

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

foreach (array_filter(([
    'title' => 'Dashboard',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<!DOCTYPE html data-bs-theme="dark">
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="color-scheme" content="light">
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo/logo.png')); ?>" type="image/x-icon">

    <title><?php echo e($title); ?> - <?php echo e(config('app.name')); ?></title>

    <!-- Styles -->
    <?php echo $__env->make('layouts.partials.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body>
    <div id="app" x-data="{
       
        shakeForm() {
            const form = document.querySelector('#form');
            form.classList.add('shake');
            setTimeout(() => form.classList.remove('shake'), 500);
        }
    }">
        <?php echo $__env->make('layouts.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div id="main" class='layout-navbar'>
            <?php echo $__env->make('layouts.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div id="main-content">

                <div class="page-heading" style="margin-top: -40px;">
                    <div class="page-title">
                        <?php echo e($header); ?>

                    </div>
                    <?php echo e($slot); ?>

                </div>

                <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php echo $__env->make('layouts.partials.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
</body>

</html>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/layouts/app.blade.php ENDPATH**/ ?>