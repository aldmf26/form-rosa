@props(['name', 'link'])

@php
    $isActive = url()->current() === $link;
@endphp

<li class="submenu-item {{ $isActive ? 'active' : '' }}">
    <a href="{{ $link }}">{{ $name }}</a>
</li>
