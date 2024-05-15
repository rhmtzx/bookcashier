@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <br>
        <div class="row">
            @if($produks->isEmpty())
                <div class="card radius-15 shadow-none">
					<div class="row g-0">
						<div class="col-lg-6">
							<div class="card-body p-5">
								<h1 class="display-1"><span class="text-primary">U</span><span class="text-danger">p</span><span class="text-success">s</span><span class="text-primary">s</span><span class="text-danger">.</span><span class="text-success">.</span></h1>
								<h2 class="font-weight-bold display-4">Maaf Produk Yang Anda Cari Tidak Ada :(</h2>
								<p>Produk Yang Lainnya Tidak Kalah Menarik Lohh...
									<br>Cari Produk Yang Lainnya Yukk:D
								</p>
								<div class="mt-5">
									<a href="javascript:history.back()" class="btn btn-lg btn-primary px-md-5 radius-30">Kembali Ke Dashboard</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<img src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/errors-images/404-error.png')}}" class="card-img" alt="">
						</div>
					</div>
					<!--end row-->
				</div>
            @else
                @foreach($produks as $data)
                <div class="col-12 col-lg-4">
                    <div class="card-radius-15">
                        <div class="card">
                            <img src="{{ asset('allfoto/' . $data->foto) }}" alt="" style="max-width: 100%;">
                            <div class="card-body">
                                <h4 class="card-title"><b>Nama Produk : {{$data->namaproduk}}</b></h4>
                            	<h6 class="card-title">Harga Produk : Rp.{{$data->harga}}</h6>
                            	<h6 class="card-title">Stok Produk : {{$data->stok}} Item</h6>
                                <br>
                            	<a href="/penjualan" class="btn btn-primary"><i class="bx bx-cart-alt"></i> Beli Produk</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
