<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['placeholder', 'filter' => false]));

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

foreach (array_filter((['placeholder', 'filter' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="d-flex justify-content-between mt-2 mb-2">
    <div>
        <div class="d-flex">
            <select id="perPageSelect" wire:model.live="perPage" class="form-select form-select-sm"
                aria-label="Tampilkan data per halaman">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
          
        </div>
    </div>

    <div class="d-flex gap-2">
        <div class="input-group" style="width: 250px;">
            <input wire:model.live="search" type="text" class="form-control" placeholder="<?php echo e($placeholder); ?>"
                aria-label="Search">
        </div>
        <!--[if BLOCK]><![endif]--><?php if($filter): ?>
            <div class="dropdown">
                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="filterDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-filter"></i> Filter
                </button>
                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                    <li><a class="dropdown-item" href="#"
                            wire:click.prevent="$set('statusFilter', null)">Semua</a></li>
                    <li><a class="dropdown-item" href="#"
                            wire:click.prevent="$set('statusFilter', 'aktif')">Aktif</a></li>
                    <li><a class="dropdown-item" href="#" wire:click.prevent="$set('statusFilter', 'tidak')">Tidak
                            Aktif</a></li>
                </ul>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <div class="dropdown">
            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="tanggalDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-calendar"></i> Tanggal
            </button>
            <ul class="dropdown-menu" aria-labelledby="tanggalDropdown">
                <li><a class="dropdown-item" href="#"
                        @click="viewByBulan = !viewByBulan; viewByCustom = false">Bulan Tahun</a></li>
                <li><a class="dropdown-item" href="#"
                        @click="viewByCustom = !viewByCustom; viewByBulan = false">Custom</a></li>
            </ul>
        </div>

        <div x-show="viewByBulan">
            <select class="form-control" id="bulan" wire:model.live="bulan">
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>
        <div x-show="viewByBulan">
            <select class="form-control" id="tahun" wire:model.live="tahun">
                <!--[if BLOCK]><![endif]--><?php for($year = now()->year; $year >= 2024; $year--): ?>
                    <option value="<?php echo e($year); ?>"><?php echo e($year); ?></option>
                <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
            </select>
        </div>

        <div x-show="viewByCustom">
            <input type="date" class="form-control" id="dari" wire:model.live="dari">
        </div>
        <div x-show="viewByCustom">
            <input type="date" class="form-control" id="sampai" wire:model.live="sampai">
        </div>

        <div x-show="viewByBulan || viewByCustom">
            <button class="btn btn-sm btn-primary" type="button" @click="viewByBulan = false; viewByCustom = false"
                wire:click="resetFilter">
                <i class="fa fa-refresh"></i> Reset
            </button>
        </div>
        <div>
            <a wire:click='export' class="btn btn-sm btn-success"><i class="fa fa-file-excel"></i> Export</a>
        </div>
        <div>
            <div wire:loading>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\form-inggirs\resources\views/components/table-action.blade.php ENDPATH**/ ?>