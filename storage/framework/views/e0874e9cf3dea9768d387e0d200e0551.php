<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => 'Tambah Row',
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
    'label' => 'Tambah Row',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div>
    <div x-data="{
        rows: ['']
    }">
        <template x-for="(row, index) in rows" :key="index">
            <div class="row">
                <?php echo e($slot); ?>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Aksi</label><br>
                        <button class="btn btn-danger btn-sm" type="button" @click="rows.splice(index, 1)"><i
                                class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </template>
        <button type="button" @click="rows.push({ value: '' })" class="btn btn-primary btn-sm"><?php echo e($label); ?></button>
    </div>
</div>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/components/multiple-input.blade.php ENDPATH**/ ?>