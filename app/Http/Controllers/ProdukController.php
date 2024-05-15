<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk(){

    	$data = produk::all();
		return view('produk.produk',compact('data'));
    }

    public function addproduk(){
        return view('produk.addproduk');
    }
    public function insertproduk(Request $request){
        $this->validate($request,[
            'namaproduk' => 'required|unique:produks',
            'harga' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png',
            'stok' => 'required',
        ],[
            'namaproduk.unique' => 'Data Tidak Boleh Sama !!',
            'namaproduk.required' => 'Harus Diisi !!',
            'harga.required' => 'Harus Diisi !!',
            'foto.required' => 'Harus Diisi !!',
            'foto.mimes' => 'Foto harus bertipe JPG, PNG, atau JPEG !!',
            'stok.required' => 'Harus Diisi !!',
        ]);

        $dimensions = getimagesize($request->file('foto')->getPathName());
        $width = $dimensions[0];
        $height = $dimensions[1];
        $requiredWidth = 736;
        $requiredHeight = 736;

        if ($width != $requiredWidth || $height != $requiredHeight) {
            return redirect()->back()->withInput()->withErrors(['foto' => 'Dimensi Gambar Harus ' . $requiredWidth . 'x' . $requiredHeight . ' Piksel']);
        }

        $data = produk::create([
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'foto'=> $request->foto,
            'stok'=> $request->stok,
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
            $file->move('allfoto/', $filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('produk')->with('success','Buku Berhasil Di Tambahkan');
    }



    public function editproduk ($id){ 
        $data = produk::findOrfail($id);
        return view('produk.editproduk',compact('data'));
    }

    public function updateproduk (request $request, $id){ 
        $data = produk::find($id);
            $data->update([
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        if ($request->hasFile('foto')) {
            unlink(public_path('allfoto/' . $data->foto));
            $file = $request->file('foto');
            $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
            $file->move('allfoto/', $filename);
            $data->foto = $filename;
            $data->save();
        }

            
        return redirect()->route('produk')->with('success','Data produk Berhasil Di Update');

    }

    public function deleteproduk($id){
        $data = produk::find($id);
        $data->delete();

        return redirect()->route('produk')->with('success','Data produk Berhasil Di Hapus');
    }

    public function cariproduk(Request $request) {
        $searchQuery = $request->input('query');

        $produks = produk::where('namaproduk', 'LIKE', "%$searchQuery%")->get();

        return view('halamancariproduk', ['produks' => $produks]);
    }

    public function halamancariproduk(){
        $allproduk = produk::all();

        return view('halamancariproduk',compact('allproduk'));
    }    

    public function cetakproduk(){
        $data = produk::all();

        return view('produk.cetakproduk', compact('data'));
    }
}
