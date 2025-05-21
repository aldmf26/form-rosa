@props(['icon', 'link' => '#', 'name', 'prefix'])

@php
    $routeName = Route::currentRouteName();

    // Jika prefix tidak dikasih, ambil dari nama
    $prefix = $prefix ?? strtolower($name);

    // Cek apakah route name dimulai dengan prefix ini
    $active = Str::startsWith($routeName, $prefix . '.');

    $hasSub = !$slot->isEmpty();
    $classes = 'sidebar-item' . ($active ? ' active' : '') . ($hasSub ? ' has-sub' : '');
@endphp

<li class="{{ $classes }}">
    <a href="{{ $hasSub ? '#' : $link }}" class="sidebar-link">
        <i class="{{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>
    @if ($hasSub)
        <ul class="submenu" style="display: {{ $active ? 'block' : 'none' }};">
            {{ $slot }}
        </ul>
    @endif
</li>
