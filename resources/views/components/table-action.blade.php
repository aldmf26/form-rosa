@props(['placeholder', 'filter' => false])
<hr>
<div class="d-flex justify-content-between mt-2 mb-2">
    <div>
        <select id="perPageSelect" wire:model="perPage" class="form-select form-select-sm"
            aria-label="Tampilkan data per halaman">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>



    <div class="d-flex gap-2">
        <div class="input-group" style="width: 250px;">
            
            
            <input wire:model.live="search" type="text" class="form-control" placeholder="{{ $placeholder }}"
                aria-label="Search">
                <div wire:loading wire:target="search" >
                <div class="spinner-border spinner-border-sm text-primary ms-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        @if ($filter)
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
        @endif

    </div>
</div>
