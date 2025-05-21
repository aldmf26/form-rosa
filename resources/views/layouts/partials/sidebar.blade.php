<x-maz-sidebar :href="route('dashboard')">

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="fa-solid fa-house"></x-maz-sidebar-item>

    @role('presiden|admin')
        <x-maz-sidebar-item name="Pendaftaran" icon="fa-solid fa-user-plus" prefix="pendaftaran">
            <x-maz-sidebar-sub-item name="Daftar Pendaftar" :link="route('pendaftaran.index')"></x-maz-sidebar-sub-item>
        </x-maz-sidebar-item>
    @endrole
    @role('presiden')
        <x-maz-sidebar-item name="Administrator" icon="bi bi-person-circle" prefix="user">
            <x-maz-sidebar-sub-item name="Daftar User" :link="route('user.index')"></x-maz-sidebar-sub-item>
            <x-maz-sidebar-sub-item name="Role & Permission" :link="route('permission.index')"></x-maz-sidebar-sub-item>
        </x-maz-sidebar-item>
    @endrole
</x-maz-sidebar>
