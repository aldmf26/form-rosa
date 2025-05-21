<x-guest-layout title="Daftar">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-center">
                        <img width="200" class="" src="{{ asset('/images/logo/logo-kasirok.png') }}"
                            alt="">
                    </div>
                    <h2 class="text-center mb-4 fw-bold text-dark">Daftarkan Bisnis Anda</h2>

                    <form action="{{ route('register_baru') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Informasi Perusahaan -->
                        <div class="mb-3">
                            <h4 class="fw-semibold mb-3 text-primary">Informasi Bisnis</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-shop input-icon"></i>
                                        <input type="text" name="namaBisnis"
                                            class="form-control form-control-icon rounded-3" placeholder="Nama Bisnis"
                                            required>
                                        @if ($errors->has('namaBisnis'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('namaBisnis') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-image input-icon"></i>
                                        <input type="file" name="logo"
                                            class="form-control form-control-icon rounded-3" accept="image/*" required>
                                        @if ($errors->has('logo'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('logo') }}
                                            </div>
                                        @endif

                                    </div>
                                    <img src="" id="preview-logo" class="img-thumbnail mt-2 d-none"
                                        width="100" height="100" alt="Pratinjau Logo">
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-list-check input-icon"></i>
                                        <input type="text" name="jenis"
                                            class="form-control form-control-icon rounded-3"
                                            placeholder="Jenis Perusahaan" required>
                                        @if ($errors->has('jenis'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('jenis') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-map input-icon"></i>
                                        <input type="text" name="alamat"
                                            class="form-control form-control-icon rounded-3" placeholder="Alamat"
                                            required>
                                        @if ($errors->has('alamat'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('alamat') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-phone input-icon"></i>
                                        <input type="text" name="no_hp"
                                            class="form-control form-control-icon rounded-3" placeholder="Nomor Telepon"
                                            required>
                                        @if ($errors->has('no_hp'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('no_hp') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-share input-icon"></i>
                                        <input type="text" placeholder="isi sosmed dengan pemisah koma"
                                            id="sosmed" name="sosmed"
                                            class="form-control form-control-icon rounded-3" placeholder="">
                                        @if ($errors->has('sosmed'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('sosmed') }}
                                            </div>
                                        @endif
                                    </div>
                                    <span class="text-warning fst-italic fw-lighter">Contoh IG: @abude, FB: abude_akun
                                        (pisahkan dengan tanda koma ,)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Akun -->
                        <div class="mb-5">
                            <h4 class="fw-semibold mb-3 text-primary">Informasi Akun</h4>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="position-relative">
                                        <i class="bi bi-person-circle input-icon"></i>
                                        <input type="text" readonly class="form-control form-control-icon rounded-3"
                                            value="Owner" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="position-relative">
                                        <i class="bi bi-person input-icon"></i>
                                        <input type="text" name="name"
                                            class="form-control form-control-icon rounded-3" placeholder="Nama"
                                            required>
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="position-relative">
                                        <i class="bi bi-envelope input-icon"></i>
                                        <input type="email" name="email"
                                            class="form-control form-control-icon rounded-3" placeholder="Email"
                                            required>
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-shield-lock input-icon"></i>
                                        <input type="password" name="password"
                                            class="form-control form-control-icon rounded-3" placeholder="Kata Sandi"
                                            required>
                                        @if ($errors->has('password'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <i class="bi bi-shield-lock input-icon"></i>
                                        <input type="password" name="password_confirmation"
                                            class="form-control form-control-icon rounded-3"
                                            placeholder="Konfirmasi Kata Sandi" required>
                                        @if ($errors->has('password_confirmation'))
                                            <div class="alert alert-danger mt-2">
                                                {{ $errors->first('password_confirmation') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow">Daftar</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-muted">Sudah punya akun? <a href="{{ route('login') }}"
                                class="text-primary fw-semibold">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
