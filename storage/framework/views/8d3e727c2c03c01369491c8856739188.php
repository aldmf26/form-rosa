<div>
    <button wire:click="toggleAktif(<?php echo e($id); ?>)" type="button"
        class="btn btn-sm <?php echo e($aktif == 1 ? 'btn-success' : 'btn-outline-danger'); ?>">
        <span wire:loading.remove wire:target="toggleAktif(<?php echo e($id); ?>)">
            <?php echo e($aktif == 1 ? 'Aktif' : 'Tidak Aktif'); ?>

        </span>
        <span wire:loading wire:target="toggleAktif(<?php echo e($id); ?>)">
            Loading...
        </span>
    </button>
</div>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/components/toggle.blade.php ENDPATH**/ ?>