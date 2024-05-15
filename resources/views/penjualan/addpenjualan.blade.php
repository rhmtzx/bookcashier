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
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Penjualan</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">TAMBAH DATA PENJUALAN</h2>
                                <br>
                                <form action="/insertpenjualan" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="pelangganid" class="form-label"><h5>Nama Pelanggan</h5></label>
                                    <select class="form-control" name="pelangganid" id="pelangganid" autocomplete="off">
                                        <option value="" selected disabled>Pilih Pelanggan</option>
                                        @foreach($pelanggan as $hehe)
                                        <option value="{{ $hehe->id }}">{{ $hehe->namapelanggan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('pelangganid')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>

                                <div id="produk-container">
                                    <div class="produk-item mb-3">
                                        <label for="produkid" class="form-label"><h5>Nama Produk</h5></label>
                                        <select class="form-control produk-select" name="produkid[]" autocomplete="off">
                                            <option value="" selected disabled>Pilih Produk</option>
                                            @foreach($produk as $hehe)
                                            <option value="{{ $hehe->id }}" data-price="{{ $hehe->harga }}">{{ $hehe->namaproduk }}</option>
                                            @endforeach
                                        </select>
                                        @error('produkid')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <br>

                                        <label for="jumlahproduk" class="form-label"><h5>Masukkan Jumlah Produk</h5></label>
                                        <input type="number" name="jumlahproduk[]" class="form-control jumlah-produk" placeholder="1">
                                        @error('jumlahproduk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <br>

                                        <label for="totalharga" class="form-label"><h5>Total Harga</h5></label>
                                        <input type="number" name="totalharga[]" class="form-control total-harga" readonly>
                                        @error('totalharga')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <br>
                                        <a href="#" class="btn btn-danger remove-produk"><i class="fadeIn animated bx bx-trash-alt"></i> Hapus Produk</a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-secondary" id="add-produk"><i class="fadeIn animated bx bx-plus"></i> Tambah Produk</a>
                                <br><br>

                                <label for="grandtotalharga" class="form-label"><h5>Sub Total Keseluruhan Harga</h5></label>
                                <input type="number" name="grandtotalharga" class="form-control" id="grandtotalharga" readonly>
                                <br>

                                <!-- Field bayar -->
                                <label for="bayar" class="form-label"><h5>Bayar</h5></label>
                                <input type="number" name="bayar" class="form-control" id="bayar" >
                                @error('bayar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>

                                <!-- Field kembalian -->
                                <label for="kembalian" class="form-label"><h5>Kembalian</h5></label>
                                <input type="number" name="kembalian" class="form-control" id="kembalian" readonly>
                                <br>

                                <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Submit</button>
                                <a href="/penjualan" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
                            </form>

                            <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                function calculateTotal(produkItem) {
                                    let produkSelect = produkItem.querySelector('.produk-select');
                                    let selectedOption = produkSelect.options[produkSelect.selectedIndex];
                                    let harga = selectedOption.getAttribute('data-price');
                                    let jumlah = produkItem.querySelector('.jumlah-produk').value;
                                    let total = harga * jumlah;
                                    produkItem.querySelector('.total-harga').value = total;

                                    // Calculate grand total
                                    let grandTotal = 0;
                                    document.querySelectorAll('.total-harga').forEach(function(totalHarga) {
                                        grandTotal += parseFloat(totalHarga.value) || 0;
                                    });
                                    document.getElementById('grandtotalharga').value = grandTotal;

                                    // Calculate kembalian
                                    calculateKembalian();
                                }

                                function calculateKembalian() {
                                    let grandTotal = parseFloat(document.getElementById('grandtotalharga').value) || 0;
                                    let bayar = parseFloat(document.getElementById('bayar').value) || 0;
                                    let kembalian = bayar - grandTotal;
                                    document.getElementById('kembalian').value = kembalian;
                                }

                                document.getElementById('add-produk').addEventListener('click', function(event) {
                                    event.preventDefault();
                                    let newProdukItem = document.querySelector('.produk-item').cloneNode(true);
                                    newProdukItem.querySelector('.produk-select').value = '';
                                    newProdukItem.querySelector('.jumlah-produk').value = '';
                                    newProdukItem.querySelector('.total-harga').value = '';
                                    document.getElementById('produk-container').appendChild(newProdukItem);
                                });

                                document.getElementById('produk-container').addEventListener('click', function(event) {
                                    if (event.target.classList.contains('remove-produk')) {
                                        event.preventDefault();
                                        let produkItem = event.target.closest('.produk-item');
                                        produkItem.remove();

                                        // Recalculate grand total
                                        let grandTotal = 0;
                                        document.querySelectorAll('.total-harga').forEach(function(totalHarga) {
                                            grandTotal += parseFloat(totalHarga.value) || 0;
                                        });
                                        document.getElementById('grandtotalharga').value = grandTotal;

                                        // Recalculate kembalian
                                        calculateKembalian();
                                    }
                                });

                                document.getElementById('produk-container').addEventListener('change', function(event) {
                                    if (event.target.classList.contains('produk-select') || event.target.classList.contains('jumlah-produk')) {
                                        let produkItem = event.target.closest('.produk-item');
                                        calculateTotal(produkItem);
                                    }
                                });

                                document.getElementById('bayar').addEventListener('input', function(event) {
                                    calculateKembalian();
                                });
                            });
                            </script>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </div>
</div>

@endsection