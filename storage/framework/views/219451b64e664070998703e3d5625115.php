<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'teks',
    'required' => false,
    'type' => 'text',
    'placeholder' => '',
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
    'teks',
    'required' => false,
    'type' => 'text',
    'placeholder' => '',
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<label for="" class="form-label">
    <?php echo e($teks); ?> <!--[if BLOCK]><![endif]--><?php if($required): ?>
        <span class="text-danger">*</span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</label>
<input type="<?php echo e($type); ?>" class="form-control" placeholder="<?php echo e($placeholder); ?>">
<?php /**PATH C:\laragon\www\kasirok\resources\views/components/labin.blade.php ENDPATH**/ ?>