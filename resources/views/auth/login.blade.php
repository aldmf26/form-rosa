<x-guest-layout title="Masuk">

    <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-center">
                            <img width="200" class="" src="{{ asset('/images/logo/english.png') }}" alt="">
                        </div>
                        <h2 class="text-center mb-4 fw-bold text-dark">Masuk ke Akun Anda</h2>
                        <x-alert/>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <div class="position-relative">
                                    <i class="bi bi-envelope input-icon"></i>
                                    <input type="email" name="email" class="form-control form-control-icon rounded-3" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="position-relative">
                                    <i class="bi bi-shield-lock input-icon"></i>
                                    <input type="password" name="password" class="form-control form-control-icon rounded-3" placeholder="Kata Sandi" required>
                                </div>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow">Masuk</button>
                            </div>

                            <div class="text-center">
                                <p class="text-muted">Belum punya akun? 
                                    <a href="{{ route('register') }}" class="text-primary fw-semibold">Daftar Sekarang</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>