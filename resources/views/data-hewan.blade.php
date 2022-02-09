@extends('blank.thema')


@section('Breadcrumbs')
    <div class="row">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Hewan</h4> <p>Data hewan yang tersedia</p></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                    <li class="breadcrumb-item active">Data Hewan</li>
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
                        <h4 class="card-title">Data Tabel Hewan</h4> 
                    </div>
                    <div class="col-lg-2">
                        <a class="text-info edit-invoice" href="#" data-toggle="modal" data-target="#tambah"><button type="button" class="btn btn-primary mb-4" ><i class="mdi mdi-plus me-1"></i>Tambah Data</button></i></a>
                    </div>
                </div>                          
            </div>
            <!-- Tambah Data  -->
            <div class="modal fade" id="tambah">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="icon-pencil"></i> Tambah Data Hewan
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="icon-close"></i>
                            </button>
                        </div>
                        <form class="edit-invoice-form" action="/simpanhewan" method="POST">
                            @csrf
                            <div class="modal-body">   
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Pemilik</label>
                                    <select class="form-control" id="status" name="pemilik">
                                        @foreach ($pelanggan as $x)
                                            <option value="{{$x->nama_pelanggan}}">{{$x->nama_pelanggan}}</option>
                                        @endforeach
                                    </select>
                                </div>                                            
                                <div class="row"> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Nama Hewan</label>
                                            <input type="text" id="due-date" class="form-control" required="" name="nama">      
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Jenis Hewan</label>
                                            <input type="text" id="due-date" class="form-control" required="" name="jenis_hewan">      
                                        </div>
                                    </div>
                                </div>  
                                <div class="row"> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Umur</label>
                                            <input type="text" id="due-date" class="form-control" required="" name="umur">      
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
                                    <label for="status" class="col-form-label">Ciri</label>
                                    <textarea name="ciri" class="form-control" id="" cols="10" rows="4"></textarea>
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
                    <table id="example" class="display table dataTable table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>ID Hewan</th>
                                <th>Nama</th>
                                <th>Jenis Hewan</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Ciri</th>
                                <th>Pemilik</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $x)
                            <tr>
                                <td>{{$x->id_hewan}}</td>
                                <td>{{$x->nama_hewan}}</td>
                                <td>{{$x->jenis_hewan}}</td>
                                <td>{{$x->umur}}</td>
                                <td>{{$x->jenis_kelamin}}</td>
                                <td>{{$x->ciri}}</td>
                                <td>{{$x->pemilik}}</td>
                                <td>
                                    <a class="text-info edit-invoice" href="#" data-toggle="modal" data-target="#detailinvoice{{$x->id_hewan}}"><i class="far fa-file"></i></a>
                                    <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice{{$x->id_hewan}}"><i class="icon-pencil"></i></a>
                                    <a class="text-danger delete-invoice" href="deletehewan/{{$x->id_hewan}}"><i class="icon-trash"></i></a>
                                </td>
                                <!-- Detail -->
                                <div class="modal fade" id="detailinvoice{{$x->id_hewan}}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="far fa-file"></i> Detail Hewan ({{$x->nama_hewan}})
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </div>
                                            <form class="edit-invoice-form">
                                                <div class="modal-body">                                               
                                                    <div class="row"> 
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Jenis Hewan</label>
                                                                <h6>{{$x->jenis_hewan}} </h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Jenis Kelamin</label>
                                                                <h6>{{$x->jenis_kelamin}} </h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Umur</label>
                                                                <h6>{{$x->umur}} </h6>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    
                                                    <div class="form-group">
                                                        <label for="status" class="col-form-label">Ciri - ciri</label>
                                                        <h6>{{$x->ciri}} </h6>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit  -->
                                <div class="modal fade" id="editinvoice{{$x->id_hewan}}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="icon-pencil"></i> Edit Hewan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </div>
                                            <form class="edit-invoice-form" action="/updatehewan" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="status" class="col-form-label">ID</label>
                                                        <input type="text" id="due-date" class="form-control" required="" name="id" value="{{$x->id_hewan}}" readonly>
                                                    </div>   
                                                    <div class="form-group">
                                                        <label for="status" class="col-form-label">Pemilik</label>
                                                        <select class="form-control" id="status" name="pemilik">
                                                            @foreach ($pelanggan as $y)
                                                                <option value="{{$y->nama_pelanggan}}">{{$y->nama_pelanggan}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>   
                                                    <div class="row"> 
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Nama Hewan</label>
                                                                <input type="text" id="due-date" class="form-control" required="" name="nama" value="{{$x->nama_hewan}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Jenis Hewan</label>
                                                                <input type="text" id="due-date" class="form-control" required="" name="jenis_hewan" value="{{$x->jenis_hewan}}">      
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="row"> 
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Umur</label>
                                                                <input type="text" id="due-date" class="form-control" required="" name="umur" value="{{$x->umur}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="due-date" class="col-form-label">Jenis Kelamin</label>
                                                                <select class="form-control" id="status" name="jenis_kelamin">
                                                                    <option value="{{$x->jenis_kelamin}}">{{$x->jenis_kelamin}}</option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label for="status" class="col-form-label">Ciri</label>
                                                        <textarea name="ciri" class="form-control" id="" cols="10" rows="4">{{$x->ciri}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" id="edit-date">
                                                    <button type="submit" class="btn btn-primary add-todo">Update</button>
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