<x-maz-sidebar :href="route('transaksi.penjualan')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="fa-solid fa-house"></x-maz-sidebar-item>
    {{-- <x-maz-sidebar-item name="Kasir" :link="route('kasir.index')" icon="fa-solid fa-store"></x-maz-sidebar-item> --}}

    @role('presiden|superadmin')
        <x-maz-sidebar-item name="Produk" icon="bi bi-shop-window">
            <x-maz-sidebar-sub-item name="Daftar Produk" :link="route('produk.index')"></x-maz-sidebar-sub-item>
            {{-- <x-maz-sidebar-sub-item name="Daftar Rak / Satuan / Pemilik" :link="route('produk.daftar_rak')"></x-maz-sidebar-sub-item> --}}
        </x-maz-sidebar-item>
    @endrole

    {{-- <x-maz-sidebar-item name="Transaksi" icon="bi bi-shop-window">
        <x-maz-sidebar-sub-item name="Transaksi" :link="route('transaksi.penjualan')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="History" :link="route('transaksi.history.penjualan')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item> --}}

    @role('presiden')
        <x-maz-sidebar-item name="Administrator" icon="bi bi-person-circle">
            <x-maz-sidebar-sub-item name="Daftar User" :link="route('user.index')"></x-maz-sidebar-sub-item>
            <x-maz-sidebar-sub-item name="Role & Permission" :link="route('permission.index')"></x-maz-sidebar-sub-item>
            {{-- <x-maz-sidebar-sub-item name="Daftar Rak / Satuan / Pemilik" :link="route('produk.daftar_rak')"></x-maz-sidebar-sub-item> --}}
        </x-maz-sidebar-item>
    @endrole

    @role('owner')
        <x-maz-sidebar-item name="Produk" icon="fa-solid fa-box" prefix="produk">
            <x-maz-sidebar-sub-item name="Daftar Kategori" :link="route('produk.kategori.index')"></x-maz-sidebar-sub-item>
            <x-maz-sidebar-sub-item name="Daftar Produk" :link="route('produk.item.index')"></x-maz-sidebar-sub-item>
        </x-maz-sidebar-item>
        
        <x-maz-sidebar-item name="Pengaturan" icon="bi bi-gear" prefix="pengaturan">
            <x-maz-sidebar-sub-item name="Undang Kasir" :link="route('pengaturan.undang_kasir.index')"></x-maz-sidebar-sub-item>
            {{-- <x-maz-sidebar-sub-item name="Manajemen Akses" :link="route('permission.index')"></x-maz-sidebar-sub-item> --}}
        </x-maz-sidebar-item>
    @endrole

    {{-- <x-maz-sidebar-item name="Perusahaan" :link="route('perusahaan.index')" icon="fa-solid fa-store"></x-maz-sidebar-item> --}}
</x-maz-sidebar>
