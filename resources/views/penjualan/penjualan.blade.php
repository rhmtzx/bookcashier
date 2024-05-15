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
                    <div class="breadcrumb-title pe-3">Data Penjualan</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="fadeIn animated bx bx-customize"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data penjualan</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>DATA SELURUH PENJUALAN</em></h4>
                                    <hr>
                                    <a href="/addpenjualan" class="btn btn-primary mb-10">Tambah Penjualan +</a>
                                    <a href="/cetakpenjualan" target="_blank" class="btn btn-danger mb-10"><i class="fadeIn animated bx bx-printer"></i> Cetak PDF</a>
                                    <br></br>
                                    <div class="row" > 
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered mb-0" id="datatable">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Id Kategori</th>
                                                        <th scope="col">Nama Pelanggan</th>
                                                        <th scope="col">Nama Produk</th>
                                                        <th scope="col">Jumlah Produk</th>
                                                        <th scope="col">Total Harga</th>
                                                        <th scope="col">Bayar</th>
                                                        <th scope="col">Kembalian</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $row->id}}</td>
                                                        <td>{{ $row->pelanggans->namapelanggan}}</td>
                                                        <td>{{ $row->produks->namaproduk}}</td>
                                                        <td>{{ $row->jumlahproduk}}</td>
                                                        <td>Rp. {{ $row->totalharga}}</td>
                                                        <td>Rp. {{ $row->bayar}}</td>
                                                        <td>Rp. {{ $row->kembalian}}</td>
                                                        <td>
                                                            <a href="/editpenjualan/{{ $row->id }}" class="btn btn-warning"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                                                            <a href="/deletepenjualan/{{ $row->id }}" class="btn btn-danger"><i class="fadeIn animated bx bx-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
</div>

@endsection

