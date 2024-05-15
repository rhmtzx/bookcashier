@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="justify-content-center">
      <div class="row-2">
        <div class="col-12 col-lg-12">
            <div class="card-body">
                <div class="container">
                    <div class="row" > 
                	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Data Pelanggan</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">TAMBAH DATA PELANGGAN</h2>
                                <br>
                                <form action="/insertpelanggan" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Nama Pelanggan</h5></label>
                                        <input type="text" name="namapelanggan" class="form-control" id="namapelanggan" aria-describedby="emailHelp" placeholder="Muhammad Rahmatullah">
                                    </div>
                                    @error('namapelanggan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Alamat</h5></label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="JL.MT HARYONO GG 10">
                                    </div>
                                    @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan No Telepon</h5></label>
                                        <input type="number" name="telepon" class="form-control" id="telepon" aria-describedby="emailHelp" placeholder="089679203045">
                                    </div>
                                    @error('telepon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Submit</button>
                                    <a href="/pelanggan" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </div>
</div>

@endsection