<?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resources/js/dark.js']); ?>

<script src="<?php echo e(asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('/vendors/tinymce/tinymce.min.js')); ?>"></script>


<script src="<?php echo e(asset('/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('/js/main.js')); ?>"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    $("#example").dataTable({
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }]
    });

    $('.select2').select2({
        dropdownParent: $('#tambah .modal-content')
    });
    $('.select2-wire').select2({
        width: '100%' // Pastikan lebar selektor mengisi penuh kontainer
    });

    function pencarian(inputId, tblId) {

        $(document).on('keyup', "#" + inputId, function() {
            var value = $(this).val().toLowerCase();
            $(`#${tblId} tbody tr`).filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        })

    }
</script>

<?php if(session()->has('sukses')): ?>
    <script>
        $(document).ready(function() {
            Toastify({
                text: "<?php echo e(session()->get('sukses')); ?>",
                duration: 5000,
                position: 'center',
                style: {
                    background: "#EAF7EE",
                    color: "#7F8B8B",
                    fontSize: "15px", // Menyesuaikan ukuran teks
                },
                close: true,
                avatar: "https://cdn-icons-png.flaticon.com/512/190/190411.png"
            }).showToast();
        });
    </script>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <script>
        $(document).ready(function() {
            Toastify({
                text: "<?php echo e(session()->get('error')); ?>",
                duration: 5000,
                position: 'center',
                style: {
                    background: "#FCEDE9",
                    color: "#7F8B8B",
                    fontSize: "15px", // Menyesuaikan ukuran teks
                },
                close: true,
                avatar: "https://cdn-icons-png.flaticon.com/512/564/564619.png"
            }).showToast();
        });
    </script>
<?php endif; ?>
<?php echo $__env->yieldContent('scripts'); ?>
<?php echo e($script ?? ''); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php /**PATH C:\laragon\www\form-rosa\resources\views/layouts/partials/scripts.blade.php ENDPATH**/ ?>