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
                    <div class="breadcrumb-title pe-3">Kategori Buku</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update Kategori Buku</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">UPDATE PRODUK</h2>
                                <br>
                                <form action="/updateproduk/{{ $data->id }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Nama Produk</h5></label>
                                        <input type="text" name="namaproduk" class="form-control" id="namaproduk" aria-describedby="emailHelp" value="{{ $data->namaproduk }}">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Harga</h5></label>
                                        <input type="number" name="harga" class="form-control" id="harga" aria-describedby="emailHelp" value="{{ $data->harga }}">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Stok</h5></label>
                                        <input type="number" name="stok" class="form-control" id="stok" aria-describedby="emailHelp" value="{{ $data->stok }}">
                                    </div>
                                    <br>

                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Foto Produk</h5></label>      
                                        <br>
                                        <img class="img mb-3"src="{{ asset('allfoto/' . $data->foto) }}"
                                        alt="" style="width: 90px" alt="">
                                        <br>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Update</button>
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