<div>
    <button wire:click="toggleAktif({{ $id }})" type="button"
        class="btn btn-sm {{ $aktif == 1 ? 'btn-success' : 'btn-outline-danger' }}">
        <span wire:loading.remove wire:target="toggleAktif({{ $id }})">
            {{ $aktif == 1 ? 'Aktif' : 'Tidak Aktif' }}
        </span>
        <span wire:loading wire:target="toggleAktif({{ $id }})">
            Loading...
        </span>
    </button>
</div>
