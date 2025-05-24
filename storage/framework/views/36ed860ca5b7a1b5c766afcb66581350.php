<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'idModal' => '',
    'size' => '',
    'title' => '',
    'btnSave' => 'Y',
    'btnHapus' => 'T',
    'color_header' => '',
    'disabled' => false,
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
    'idModal' => '',
    'size' => '',
    'title' => '',
    'btnSave' => 'Y',
    'btnHapus' => 'T',
    'color_header' => '',
    'disabled' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['id' => $idModal])); ?>

    <?php if($disabled): ?> data-bs-backdrop="false" <?php endif; ?> class="modal fade tambah" role="dialog"
    aria-labelledby="myModalLabel" wire:ignore.self>
    <div class="modal-dialog   <?php echo e($size); ?>" role="document">
        <div class="modal-content ">
            <div class="modal-header <?php echo e($color_header); ?>">
                <h4 class="modal-title" <?php echo e($attributes->merge(['id' => $idModal])); ?>>
                    <?php echo e($title); ?>

                </h4>
                <!--[if BLOCK]><![endif]--><?php if($disabled == false): ?>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="modal-body">
                <?php echo e($slot); ?>

            </div>
            <div class="modal-footer">
                <!--[if BLOCK]><![endif]--><?php if($disabled == false): ?>
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($btnSave == 'Y'): ?>
                    <button type="submit"
                        class="float-end btn btn-primary sbutton-save-modal"
                       
                        >
                        Simpan
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($btnHapus == 'Y'): ?>
                    <button type="button" wire:click='delete'
                        class="float-end btn btn-outline-danger sbutton-save-modal"
                        onclick="this.disabled=true; this.form.submit();"
                        >
                        Hapus
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\form-rosa\resources\views/components/modal.blade.php ENDPATH**/ ?>