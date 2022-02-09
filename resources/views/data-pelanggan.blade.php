@extends('blank.thema')


@section('Breadcrumbs')
    <div class="row">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto">
                    <h4 class="mb-0">Pelanggan</h4>
                    <p>Data pelanggan yang tersedia</p>
                </div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                    <li class="breadcrumb-item active">Data Pelanggan</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('konten')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header  justify-content-between align-items-center">
                    <div class="row">
                        <div class="col-lg-10">
                            <h4 class="card-title">Data Tabel Pelanggan</h4>
                        </div>
                        <div class="col-lg-2">
                            <a class="text-info edit-invoice" href="#" data-toggle="modal" data-target="#tambah"><button
                                    type="button" class="btn btn-primary mb-4"><i class="mdi mdi-plus me-1"></i>Tambah
                                    Data</button></i></a>
                        </div>
                    </div>
                </div>
                <!-- Tambah Data  -->
                <div class="modal fade" id="tambah">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <i class="icon-pencil"></i> Tambah Data Pelanggan
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                            </div>
                            <form class="edit-invoice-form" action="/simpanpelanggan" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Nama</label>
                                                <input type="text" id="due-date" class="form-control" required="" name="nama">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Tempat</label>
                                                <input type="text" id="due-date" class="form-control" required="" name="tempat" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Tanggal Lahir</label>
                                                <input type="date" id="due-date" class="form-control" required="" name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Telepon</label>
                                                <input type="text" id="due-date" class="form-control" required="" name="no">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Jenis Kelamin</label>
                                                <select class="form-control" id="status" name="jenis_kelamin">
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="status" class="col-form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="" cols="10"rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="edit-date">
                                    <button type="submit" class="btn btn-primary add-todo">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display table dataTable table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Pelanggan</th>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $x)
                                    <tr>
                                        <td>{{ $x->id_pelanggan }}</td>
                                        <td>{{ $x->nama_pelanggan }}</td>
                                        <td>{{ $x->tempat_lahir }}, {{ $x->tanggal_lahir }}</td>
                                        <td>{{ $x->jenis_kelamin }}</td>
                                        <td>{{ $x->alamat }}</td>
                                        <td>{{ $x->nohp }}</td>
                                        <td>
                                            <a class="text-success edit-invoice" href="#" data-toggle="modal"
                                                data-target="#editinvoice{{ $x->id_pelanggan }}"><i
                                                    class="icon-pencil"></i></a>
                                            <a class="text-danger delete-invoice"
                                                href="deletepelanggan/{{ $x->id_pelanggan }}"><i
                                                    class="icon-trash"></i></a>
                                        </td>
                                        <!-- Edit  -->
                                        <div class="modal fade" id="editinvoice{{ $x->id_pelanggan }}">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            <i class="icon-pencil"></i> Edit Pelanggan
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <i class="icon-close"></i>
                                                        </button>
                                                    </div>
                                                    <form class="edit-invoice-form" action="/updatepelanggan" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date"
                                                                            class="col-form-label">ID</label>
                                                                        <input type="text" id="due-date"
                                                                            class="form-control" required="" name="id"
                                                                            value="{{ $x->id_pelanggan }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date"
                                                                            class="col-form-label">Nama</label>
                                                                        <input type="text" id="due-date"
                                                                            class="form-control" required="" name="nama"
                                                                            value="{{ $x->nama_pelanggan }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date"
                                                                            class="col-form-label">Tempat</label>
                                                                        <input type="text" id="due-date"
                                                                            class="form-control" required="" name="tempat"
                                                                            value="{{ $x->tempat_lahir }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Tanggal
                                                                            Lahir</label>
                                                                        <input type="date" id="due-date"
                                                                            class="form-control" required="" name="tanggal"
                                                                            value="{{ $x->tanggal_lahir }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date"
                                                                            class="col-form-label">Telepon</label>
                                                                        <input type="text" id="due-date"
                                                                            class="form-control" required="" name="nohp"
                                                                            value="{{ $x->nohp }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Jenis
                                                                            Kelamin</label>
                                                                        <select class="form-control" id="status"
                                                                            name="jenis_kelamin">
                                                                            <option value="{{ $x->jenis_kelamin }}">
                                                                                {{ $x->jenis_kelamin }}</option>
                                                                            <option value="Laki-laki">Laki-laki</option>
                                                                            <option value="Perempuan">Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="status" class="col-form-label">Alamat</label>
                                                                <textarea name="alamat" class="form-control" id=""
                                                                    cols="10" rows="4">{{ $x->alamat }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" id="edit-date">
                                                            <button type="submit"
                                                                class="btn btn-primary add-todo">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
