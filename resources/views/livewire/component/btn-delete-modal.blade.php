<div>
    <form wire:submit='delete'>
        <x-modal idModal="hapus" title="Hapus Data">
            <p>Apakah Anda yakin ingin menghapus data <strong>{{ $nama }}</strong>?</p>
        </x-modal>
    </form>
    @section('scripts')
        <script>
            $(document).ready(function() {
                $('.btnHapus').on('click', function() {
                    $('#hapus').modal('show');
                });
            });
        </script>
    @endsection
</div>
