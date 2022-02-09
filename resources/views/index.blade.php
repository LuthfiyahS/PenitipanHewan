@extends('blank.thema')


@section('Breadcrumbs')
    <div class="row">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <p>Welcome to P'nitipan Hewan, {{auth()->user()->name}}</p></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('konten')
    <div class="row">
        <div class="col-12 col-lg-12  mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                        <i class="icon-basket icons card-liner-icon mt-2 text-white"></i>
                                        <div class='card-liner-content'>
                                            <h2 class="card-liner-title text-white">{{$datatransaksi}}</h2>
                                            <h6 class="card-liner-subtitle text-white">Jumlah Penitipan</h6>                                       
                                        </div>                                
                                    </div>
                                    <div id="apex_primary_chart"></div>                               
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                        <i class="icon-user icons card-liner-icon mt-2"></i>
                                        <div class='card-liner-content'>
                                            <h2 class="card-liner-title">{{$datauser}}</h2>
                                            <h6 class="card-liner-subtitle">Jumlah User</h6> 
                                        </div>                                
                                    </div>
                                    <div id="apex_today_visitors"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 mt-3">
                            <div class="card border card-body">                            
                                <div class="card-content">
                                    <div class="p-3">   
                                        <div class="d-md-flex">
                                            <div class="my-auto">
                                                <img src="{{ asset('PenitipanHewan/dist/images/wallet.png')}}" alt="author" width="48" class="my-auto">
                                            </div>
                                            <div class="content px-md-3 my-3 my-md-0">                                           
                                                <span class="mb-0 font-w-600 h5">Buat Transaksi Baru</span><br>
                                                <p class="mb-0 font-w-500 tx-s-12">Silahkan buat transaksi baru untuk pelanggan yang akan menitipkan hewannya</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="/transaksi" class="btn btn-outline-primary font-w-600 my-auto text-nowrap">Buat Transaksi</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-3">
                    <div class="card">                           
                        <div class="card-content">
                            <div class="card-body">
                                <div id="apex_bar_chart" class="height-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection