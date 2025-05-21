<x-app-layout :title="$title">
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="m-0">{{ $title }}</h3>
            <button type="button" data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah
            </button>
        </div>

        
    </x-slot>

    @livewire('tbl-pendaftaran')

    @section('scripts')
        <script>
            new DataTable('#tableUser');

            function toggleAgamaLain(select) {
                document.getElementById('agamaLainField').classList.toggle('d-none', select.value !== 'lainnya');
            }
        </script>
    @endsection
</x-app-layout>
