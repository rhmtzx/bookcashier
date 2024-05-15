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
                                <h2 class="text-center mb-4">UPDATE DATA PENJUALAN</h2>
                                <br>
                                <form action="/updatepenjualan/{{ $data->id }}" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="col-lg-12">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Nama Pelanggan</h5></label>
                                        <select class="form-control js-example-basic-single" name="pelangganid" id="pelangganid" autocomplete="off">
                                            <option value="" selected disabled>- Pilih Nama Pelanggan -</option>
                                            @foreach($pelanggan as $a)
                                            <option value="{{ $a->id }}"
                                                <?php 
                                                    if($data->pelangganid == $a->id) { echo 'selected'; }
                                                ?> > {{ $a->namapelanggan }} 
                                            </option>
                                            @endforeach
                                        </select>
                                    <br>

                                    <div class="col-lg-12">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Nama Produk</h5></label>
                                        <select class="form-control js-example-basic-single" name="produkid" id="produkid" autocomplete="off">
                                            <option value="" selected disabled>- Pilih Nama Produk -</option>
                                            @foreach($produk as $a)
                                            <option value="{{ $a->id }}"
                                                <?php 
                                                    if($data->produkid == $a->id) { echo 'selected'; }
                                                ?> > {{ $a->namaproduk }} 
                                            </option>
                                            @endforeach
                                        </select>
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Jumlah Produk</h5></label>
                                        <input type="number" name="jumlahproduk" class="form-control" id="jumlahproduk" aria-describedby="emailHelp" value="{{ $data->jumlahproduk }}">
                                    </div>
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Total Harga</h5></label>
                                        <input type="number" name="totalharga" class="form-control" id="totalharga" aria-describedby="emailHelp" value="{{ $data->totalharga }}" readonly="">
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Update</button>
                                    <a href="/penjualan" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
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