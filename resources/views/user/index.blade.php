<x-app-layout :title="$title">
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h3>{{ $title }}</h3>
            <button type="button" data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary"><i
                    class="fa fa-plus"></i> Tambah</button>
            
        </div>

        <form action="" method="post">
                @csrf
                <x-modal idModal="tambah" title="Tambah User" size="modal-lg">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Role</label>
                                <select name="role" class="form-control">
                                    <option value="">-- Pilih Role --</option>
                                    <option value="admin">Admin</option>
                                    <option value="presiden">Presiden</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Masukkan Password">
                            </div>
                        </div>
                    </div>

                </x-modal>
            </form>
    </x-slot>


    <div class="section">
        @php
            $pesan = session()->get('error') ? 'error' : 'sukses';
        @endphp
        <x-alert pesan="{{ session()->get($pesan) }}" />
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('user.update') }}" method="post">
                    @csrf
                    <table class="table table-stripped table-bordered" id="tableUser">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th width="200">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr x-data="{
                                    edit: false
                                }">
                                    <td>

                                        {{ $loop->iteration }}
                                        <input type="hidden" name="id[]" value="{{ $user->id }}">
                                    </td>

                                    <td>
                                        <span x-show="!edit">{{ $user->name }}</span>
                                        <input type="text" x-show="edit" value="{{ $user->name }}"
                                            class="form-control" name="name[]">
                                    </td>

                                    <td>
                                        <span x-show="!edit">{{ $user->email }}</span>
                                        <input type="text" x-show="edit" value="{{ $user->email }}"
                                            class="form-control" name="email[]">
                                    </td>

                                    <td>
                                        @foreach ($user->roles as $role)
                                            <span x-show="!edit">{{ $role->name }}</span>
                                        @endforeach
                                        <select name="role[]" id="" x-show="edit" class="form-control">
                                            <option value="">- Pilih role -</option>
                                            @foreach ($roles as $r)
                                                <option @selected($user->roles[0]->id == $r->id) value="{{ $r->id }}">
                                                    {{ $r->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <a x-show="!edit" @click="edit = !edit" class="btn btn-sm btn-primary"><i
                                                class="fa fa-edit"></i> Edit</a>
                                        <a x-show="edit" @click="edit = !edit" class="btn btn-sm btn-primary">
                                            Cancel</a>
                                        <button type="submit" x-show="edit" class="btn btn-sm btn-success"><i
                                                class="fa fa-check"></i>
                                            Simpan</button>

                                        <a href="{{ route('user.hapus', $user->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="button" x-show="!edit" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </form>
            </div>
        </div>

    </div>

    @section('scripts')
        <script>
            new DataTable('#tableUser');
        </script>
    @endsection
</x-app-layout>
