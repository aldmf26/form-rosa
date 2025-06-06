@props([
    'idModal' => '',
    'size' => '',
    'title' => '',
    'btnSave' => 'Y',
    'btnHapus' => 'T',
    'color_header' => '',
    'disabled' => false,
])

<div {{ $attributes->merge(['id' => $idModal]) }}
    @if ($disabled) data-bs-backdrop="false" @endif class="modal fade tambah" role="dialog"
    aria-labelledby="myModalLabel" wire:ignore.self>
    <div class="modal-dialog   {{ $size }}" role="document">
        <div class="modal-content ">
            <div class="modal-header {{ $color_header }}">
                <h4 class="modal-title" {{ $attributes->merge(['id' => $idModal]) }}>
                    {{ $title }}
                </h4>
                @if ($disabled == false)
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                @endif
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                @if ($disabled == false)
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                @endif
                @if ($btnSave == 'Y')
                    <button type="submit"
                        class="float-end btn btn-primary sbutton-save-modal"
                       
                        >
                        Simpan
                    </button>
                @endif
                @if ($btnHapus == 'Y')
                    <button type="button" wire:click='delete'
                        class="float-end btn btn-outline-danger sbutton-save-modal"
                        onclick="this.disabled=true; this.form.submit();"
                        >
                        Hapus
                    </button>
                @endif

            </div>

        </div>
    </div>
</div>
