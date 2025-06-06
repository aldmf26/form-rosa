<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Vendors -->
<link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    .order-first {
        display: none;
    }

    .form-control {
        border-radius: .5rem !important;
    }

    .btn {
        border-radius: .5rem !important;
    }

    .btn-primary {
        background-color: #0d6efd !important;
        border-color: #0d6efd !important;
    }

    .form-label,
    .form-text,
    .text-muted {
        font-weight: 400;

    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 400;
    }

    /* Pastikan tidak ada !important yang menghalangi */
    .table,
    .card,
    .navbar {
        background-color: var(--bs-body-bg);
        color: var(--bs-body-color);
    }

    .pointer {
        cursor: pointer;
    }

    .hovercard:hover {
        border: 0.75px solid #0d6efd;
    }

    .select2 {
        width: 100% !important;

    }

    .select2-container--default .select2-selection--single {
        background-color: #1b1b29;
        border: 1px solid #1b1b29;
        border-radius: 4px;
        height: 35px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #b8b8cf;
        background-color: #1b1b29;
        line-height: 36px;
        /* font-size: 12px; */


    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 35px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
    }

    .shake {
        animation: shake 0.5s;
        animation-timing-function: ease-in-out;
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        20%,
        60% {
            transform: translateX(-5px);
        }

        40%,
        80% {
            transform: translateX(5px);
        }
    }
</style>
<!-- Styles -->
{{-- <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="{{ mix('css/app-dark.css') }}"> --}}
@vite(['resources/sass/bootstrap.scss', 'resources/sass/themes/dark/app-dark.scss', 'resources/sass/pages/auth.scss', 'resources/sass/app.scss'])

{{ $style ?? '' }}
@livewireStyles
