<div class="form-group ms-2">
    <label for="">No Hp Admin</label>

    <form wire:submit='save'>
        <div class="d-flex gap-2">
            <div>
                <input type="text" wire:model='nohp' class="form-control form-control-sm">
            </div>
            <div>
                <button type="submit" class="btn btn-sm btn-primary">Simpan </button>
                <!--[if BLOCK]><![endif]--><?php if(session()->has('sukses')): ?>
                    <?php echo e(session()->get('sukses')); ?>

                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/livewire/form-nohp.blade.php ENDPATH**/ ?>