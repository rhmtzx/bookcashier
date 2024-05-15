<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\pelanggan;
use App\Models\produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function penjualan(){

    	$data = penjualan::all();
		return view('penjualan.penjualan',compact('data'));
    }

    public function addpenjualan(){
    	$pelanggan = pelanggan::all();
    	$produk = produk::all();

        return view('penjualan.addpenjualan',compact('pelanggan','produk'));
    }
    public function insertpenjualan(Request $request)
{
    $this->validate($request, [
        'pelangganid' => 'required',
        'produkid' => 'required|array',
        'jumlahproduk' => 'required|array',
        'totalharga' => 'required|array',
        'grandtotalharga' => 'required|numeric',
        'bayar' => 'required|numeric',
    ], [
        'pelangganid.required' => 'Harus Diisi !!',
        'produkid.required' => 'Harus Diisi !!',
        'jumlahproduk.required' => 'Harus Diisi !!',
        'totalharga.required' => 'Harus Diisi !!',
        'grandtotalharga.required' => 'Harus Diisi !!',
        'bayar.required' => 'Harus Diisi !!',
    ]);

    $totalHargaDihitung = 0;
    $errorMessages = [];

    foreach ($request->produkid as $index => $produkid) {
        $jumlahProduk = $request->jumlahproduk[$index];
        $produk = Produk::find($produkid);

        if ($produk->stok < $jumlahProduk) {
            $errorMessages[] = "Stok produk {$produk->namaproduk} tidak mencukupi.";
        } else {
            $hargaProduk = $produk->harga;
            $totalHarga = $hargaProduk * $jumlahProduk;
            $totalHargaDihitung += $totalHarga;

            // Kurangi stok produk
            $produk->stok -= $jumlahProduk;
            $produk->save();
        }
    }

    if ($totalHargaDihitung != $request->grandtotalharga) {
        return redirect()->back()->withErrors('Total harga tidak sesuai dengan perhitungan.');
    }

    if (!empty($errorMessages)) {
        return redirect()->back()->withErrors($errorMessages);
    }

    $bayar = $request->bayar;
    $kembalian = $bayar - $totalHargaDihitung;

    foreach ($request->produkid as $index => $produkid) {
        $jumlahProduk = $request->jumlahproduk[$index];
        $hargaProduk = Produk::find($produkid)->harga;
        $totalHarga = $hargaProduk * $jumlahProduk;

        Penjualan::create([
            'pelangganid' => $request->pelangganid,
            'produkid' => $produkid,
            'jumlahproduk' => $jumlahProduk,
            'totalharga' => $totalHarga,
            'bayar' => $bayar,
            'kembalian' => $kembalian,
        ]);
    }

    return redirect()->route('penjualan')->with('success', 'Data Penjualan Berhasil Ditambahkan');
}


    

    public function editpenjualan ($id){ 
        $data = penjualan::findOrfail($id);
        $pelanggan = pelanggan::all();
        $produk = produk::all();
        return view('penjualan.editpenjualan',compact('data','pelanggan','produk'));
    }

    public function updatepenjualan (request $request, $id){ 
        $data = penjualan::find($id);
            $data->update([
            'pelangganid' => $request->pelangganid,
            'produkid' => $request->produkid,
            'jumlahproduk' => $request->jumlahproduk,
            'totalharga' => $request->totalharga,
        ]);
            
        return redirect()->route('penjualan')->with('success','Data Penjualan Berhasil Di Update');

    }

    public function deletepenjualan($id){
        $data = penjualan::find($id);
        $data->delete();

        return redirect()->route('penjualan')->with('success','Data Penjualan Berhasil Di Hapus');
    }

    public function cetakpenjualan(){
        $data = penjualan::all();

        return view('penjualan.cetakpenjualan', compact('data'));
    }
}