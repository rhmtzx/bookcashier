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
                                <h2 class="text-center mb-4">UPDATE KATEGORI BUKU</h2>
                                <br>
                                <form action="/updatepelanggan/{{ $data->id }}" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Nama Pelanggan</h5></label>
                                        <input type="text" name="namapelanggan" class="form-control" id="namapelanggan" aria-describedby="emailHelp" value="{{ $data->namapelanggan }}">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Alamat</h5></label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update No Telepon</h5></label>
                                        <input type="text" name="telepon" class="form-control" id="telepon" aria-describedby="emailHelp" value="{{ $data->telepon }}">
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