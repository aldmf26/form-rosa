
<x-guest-layout title="Selamat Datang">
    <style>
        body {
            background: linear-gradient(180deg, #6ab7f5 0%, #1a73e8 100%);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            opacity: 0.7;
            z-index: 0;
        }

        .circle-1 {
            top: 10%;
            left: 5%;
            width: 50px;
            height: 50px;
            border: 2px solid white;
            border-radius: 50%;
        }

        .circle-2 {
            top: 20%;
            right: 10%;
            width: 30px;
            height: 30px;
            border: 2px solid white;
            border-radius: 50%;
        }

        .circle-3 {
            bottom: 15%;
            left: 15%;
            width: 40px;
            height: 40px;
            border: 2px solid white;
            border-radius: 50%;
        }

        .icon-1 {
            top: 5%;
            right: 5%;
            width: 60px;
            height: 60px;
            background: url('https://via.placeholder.com/60?text=📱') no-repeat center;
            background-size: contain;
        }

        .icon-2 {
            bottom: 10%;
            right: 15%;
            width: 50px;
            height: 50px;
            background: url('https://via.placeholder.com/50?text=👓') no-repeat center;
            background-size: contain;
        }

        /* Main Card */
        .main-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
            margin-top: 100px;
        }

        .main-card h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }

        .main-card p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .navbar-brand img {
            width: 40px;
        }

        .navbar {
            background: transparent !important;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            font-size: 1.5rem;
        }

        .btn-primary {
            background-color: #1a73e8;
            border: none;
            padding: 10px 30px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #1557b0;
        }

        .illustration {
            max-width: 300px;
            height: auto;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .main-card {
                padding: 20px;
                margin-top: 50px;
            }

            .main-card h1 {
                font-size: 1.8rem;
            }

            .illustration {
                max-width: 200px;
            }
        }
    </style>

    <!-- Floating Elements -->
    <div class="floating-element circle-1"></div>
    <div class="floating-element circle-2"></div>
    <div class="floating-element circle-3"></div>
    <div class="floating-element icon-1"></div>
    <div class="floating-element icon-2"></div>

    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/images/logo/logo.png') }}" alt="Logo">
                <span style="font-size: 1.5rem" class="ms-2 text-white">{{ config('app.name') }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Main Content -->
    <div class="container mb-3" style="margin-top: -80px">
        <div class="main-card row align-items-center">
            <div class="col-md-12 text-center">
                <img width="200" src="{{ asset('/images/logo/logo.png') }}" class="illustration" alt="Illustration">
            </div>
            <div class="col-md-12">
                <h1 class="text-center">{{ config('app.name') }}</h1>
                <p>
                    Silakan isi form pendaftaran online ini dengan benar dan lengkap agar Anda dapat bergabung dengan
                    kursus kami.
                </p>

                @livewire('welcome-form')
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-guest-layout>
