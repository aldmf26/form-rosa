<div class="section">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($companies as $usaha)
                    <li class="pointer nav-item" role="presentation">
                        <a wire:click='changeCompany({{ $usaha->id }})'
                            class="nav-link {{ $selectedCompany->id === $usaha->id ? 'active' : '' }}"
                            role="tab">{{ $usaha->name }}</a>
                    </li>
                @endforeach


            </ul>
                <div wire:loading wire:target='changeCompany' class="spinner-border spinner-border-sm text-primary"
                    role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade {{ $selectedCompany->id ? 'active show' : '' }}" role="tabpanel">
                    <div class="row mt-4">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Informasi</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false" tabindex="-1">Service Charge</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false" tabindex="-1">Tax</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" class="form-control"
                                                        value="{{ $selectedCompany->name ?? '' }}" placeholder="Nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Jenis</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" class="form-control"
                                                        value="{{ $selectedCompany->type ?? '' }}" placeholder="Jenis">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Logo</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="file" class="form-control"
                                                    value="{{ $selectedCompany->logo_url ?? '' }}" placeholder="Logo">
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label"></label>
                                                </div>
                                                <div class="col-lg-10 col-9 mt-2">
                                                        <img src="{{ asset('images/samples/fore.png') }}"
                                                            class="img-thumbnail" style="width: 100px; height: 100px;">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    ini service setting
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    ini pajak setting
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
