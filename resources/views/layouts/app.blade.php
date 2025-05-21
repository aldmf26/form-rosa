@props([
    'title' => 'Dashboard',
])
<!DOCTYPE html data-bs-theme="dark">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="color-scheme" content="light">
    <link rel="shortcut icon" href="{{ asset('images/logo/english.png') }}" type="image/x-icon">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    <!-- Styles -->
    @include('layouts.partials.styles')
</head>

<body>
    <div id="app" x-data="{
       
        shakeForm() {
            const form = document.querySelector('#form');
            form.classList.add('shake');
            setTimeout(() => form.classList.remove('shake'), 500);
        }
    }">
        @include('layouts.partials.sidebar')

        <div id="main" class='layout-navbar'>
            @include('layouts.partials.header')
            <div id="main-content">

                <div class="page-heading" style="margin-top: -40px;">
                    <div class="page-title">
                        {{ $header }}
                    </div>
                    {{ $slot }}
                </div>

                @include('layouts.partials.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @include('layouts.partials.scripts')
    
</body>

</html>
