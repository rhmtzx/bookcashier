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
                    <div class="breadcrumb-title pe-3">Data Produk</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">TAMBAH DATA PRODUK</h2>
                                <br>
                                <form action="/insertproduk" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Nama Produk</h5></label>
                                        <input type="text" name="namaproduk" class="form-control" id="namaproduk" aria-describedby="emailHelp" placeholder="Buku Filosofi">
                                    </div>
                                    @error('namaproduk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Harga</h5></label>
                                        <input type="number" name="harga" class="form-control" id="harga" aria-describedby="emailHelp" placeholder="30000">
                                    </div>
                                    @error('harga')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Stok</h5></label>
                                        <input type="number" name="stok" class="form-control" id="stok" aria-describedby="emailHelp" placeholder="25">
                                    </div>
                                    @error('stok')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Foto Produk</h5></label>
                                        <br>
                                        <input type="file" name="foto" class="form-control" >
                                    </div>
                                    @error('foto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Submit</button>
                                    <a href="/produk" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
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