@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="card radius-15 bg-voilet">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$pelanggan}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-user"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Pelanggan</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$pelanggan}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card radius-15 bg-rose">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$produk}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-package"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Produk</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$produk}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card radius-15 bg-sunset">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$penjualan}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-bar-chart-alt-2"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Penjualan</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$penjualan}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
        <div class="col-12 col-lg-12">
            <div class="tab-content shadow" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="" id="accordion-tab-1">
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-1" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">APA ITU BOOKCASHIER ?</h6>
                                                </div>
                                                <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Digital Library Adalah Suatu Aplikasi Perpustakaan Digital Yang Dibuat Untuk Memudahkan Para Peminjam Buku Secara Online Melalui Web, Dengan Begitu Kita Tidak Perlu Meminjam Buku Dengan Menggunakan Kertas Atau Buku Lagi.</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-2" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">APA TUJUAN DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Tujuan Dari Aplikasi Web Digital Library Adalah Untuk Memudahkan Pembaca Buku Dalam Meminjam Buku Di Perpustakaan Secara Online Melalui Situs Web Kami.</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-3" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">BAGAIMANA CARA MENGGUNAKAN DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Cara Menggunakan Digitall Library Sangatlah Mudah, Anda hanya Perlu Membuat Akun Sebagai Siswa, Lalu Anda Login Dengan Akun Yang Sudah Di Daftarkan Sebelumnya dan Anda Bisa Memulai Meminjam Buku Secara Online Di Menu Sidebar "Peminjaman Buku" dan Jangan Lupa Untuk Mengembalikan Buku Yaa:D.</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-4" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">LAYANAN APA YANG TERDAPAT DALAM DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Ada Beberapa Layanan Yang Terdapat Dalam Aplkasi Web Digital Library Ini, Diantaranya Adalah Meminjam Buku Secara Online Di Menu "Peminjaman Buku" Anda Juga Bisa Mengulas Buku Yang Sudah Di Pinjam Di Menu "Ulasan Buku   ".</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <br>
        <div class="row">
        @foreach($allproduk as $data)
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

        </div>                         
    </div>
</div>

@endsection