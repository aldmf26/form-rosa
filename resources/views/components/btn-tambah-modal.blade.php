    @props(['label'])
    <a class="btn btn-primary btn-md" href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i
            class="fa fa-plus"></i> {{ ucwords($label) }}</a>
    <x-modal  idModal="tambah" title="Tambah {{ $label }}" size="modal-lg">
        {{ $slot }}
    </x-modal>
