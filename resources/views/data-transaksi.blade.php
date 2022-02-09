@extends('blank.thema')


@section('Breadcrumbs')
    <div class="row">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto">
                    <h4 class="mb-0">Transaksi</h4>
                    <p>Data transaksi yang tersedia</p>
                </div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
                    <li class="breadcrumb-item active">Data Transaksi</li>
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
                            <h4 class="card-title">Data Tabel Transaksi</h4>
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
                                    <i class="icon-pencil"></i> Tambah Data Transaksi
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                            </div>
                            <form class="edit-invoice-form" action="/simpantransaksi" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Nama Hewan</label>
                                                <select class="form-control" id="status" name="hewan">
                                                    </option>
                                                    @foreach ($hewan as $y)
                                                        <option value="{{ $y->id_hewan }}">{{ $y->nama_hewan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Nama Pelanggan</label>
                                                <select class="form-control" id="status" name="pelanggan">
                                                    </option>
                                                    @foreach ($pelanggan as $z)
                                                        <option value="{{ $z->id_pelanggan }}">{{ $z->nama_pelanggan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Tanggal Penitipan</label>
                                                <input type="date" id="due-date" class="form-control" required="" name="tanggal_penitipan">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Tanggal Pengembalian</label>
                                                <input type="date" id="due-date" class="form-control" required="" name="tanggal_pengembalian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Lama Hari</label>
                                                <input type="text" id="due-date" class="form-control" required="" name="lama_hari" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="due-date" class="col-form-label">Harga</label>
                                                <input type="text" id="due-date" class="form-control" required="" name="harga" >
                                            </div>
                                        </div>
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
                                    <th>Nama Hewan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Lama Hari</th>
                                    <th>Tanggal Penitipan</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $x)
                                    <tr>
                                        <td>{{ $x->id_transaksi }}</td>
                                        <td>{{ $x->nama_hewan }}</td>
                                        <td>{{ $x->nama_pelanggan }}</td>
                                        <td>{{ $x->lama_hari }}</td>
                                        <td>{{ $x->tgl_penitipan }}</td>
                                        <td>{{ $x->tgl_pengembalian }}</td>
                                        <td>{{ $x->harga }}</td>
                                        <td>{{ $x->total }}</td>
                                        <td>
                                            <a class="text-success edit-invoice" href="#" data-toggle="modal"
                                                data-target="#editinvoice{{ $x->id_transaksi }}"><i
                                                    class="icon-pencil"></i></a>
                                            <a class="text-danger delete-invoice"
                                                href="deletetransaksi/{{ $x->id_transaksi }}"><i
                                                    class="icon-trash"></i></a>
                                        </td>
                                        <!-- Edit  -->
                                        <div class="modal fade" id="editinvoice{{ $x->id_transaksi }}">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            <i class="icon-pencil"></i> Edit Transaksi
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <i class="icon-close"></i>
                                                        </button>
                                                    </div>
                                                    <form class="edit-invoice-form" action="/updatetransaksi" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">ID</label>
                                                                <input type="text" id="due-date" class="form-control"
                                                                    required="" name="id" value="{{ $x->id_transaksi }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Nama
                                                                            Hewan</label>
                                                                        <select class="form-control" id="status"
                                                                            name="hewan">
                                                                            <option value="{{ $x->id_hewan }}" selected>
                                                                                {{ $x->nama_hewan }}</option>
                                                                            @foreach ($hewan as $y)
                                                                                <option value="{{ $y->id_hewan }}">
                                                                                    {{ $y->nama_hewan }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Nama
                                                                            Pelanggan</label>
                                                                        <select class="form-control" id="status"
                                                                            name="pelanggan">
                                                                            <option value="{{ $x->id_pelanggan }}"
                                                                                selected>{{ $x->nama_pelanggan }}</option>
                                                                            @foreach ($pelanggan as $z)
                                                                                <option value="{{ $z->id_pelanggan }}">
                                                                                    {{ $z->nama_pelanggan }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Tanggal
                                                                            Penitipan</label>
                                                                        <input type="date" id="due-date"
                                                                            class="form-control" required="" name="tanggal_titip"
                                                                            value="{{ $x->tgl_penitipan }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Tanggal
                                                                            Pengambilan</label>
                                                                        <input type="date" id="due-date"
                                                                            class="form-control" required=""
                                                                            name="tanggal_pengambilan"
                                                                            value="{{ $x->tgl_pengembalian }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date" class="col-form-label">Lama
                                                                            Hari</label>
                                                                        <input type="text" id="due-date"
                                                                            class="form-control" required="" name="lama_hari"
                                                                            value="{{ $x->lama_hari }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="due-date"
                                                                            class="col-form-label">Harga</label>
                                                                        <input type="text" id="due-date"
                                                                            class="form-control" required="" name="harga"
                                                                            value="{{ $x->harga }}">
                                                                    </div>
                                                                </div>
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
