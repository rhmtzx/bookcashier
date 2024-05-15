<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan(){

    	$data = pelanggan::all();
		return view('pelanggan.pelanggan',compact('data'));
    }

    public function addpelanggan(){
        return view('pelanggan.addpelanggan');
    }
    public function insertpelanggan(Request $request){

             $this->validate($request,[
                 'namapelanggan' => 'required|unique:pelanggans',
                 'alamat' => 'required',
                 'telepon' => 'required',
             ],[
                 'namapelanggan.unique' => 'Data Tidak Boleh Sama !!',
                 'namapelanggan.required' => 'Harus Diisi !!',
                 'alamat.required' => 'Harus Diisi !!',
                 'telepon.required' => 'Harus Diisi !!',
             ]);

            $data = pelanggan::create([
                'namapelanggan' => $request->namapelanggan,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
            ]);

            return redirect()->route('pelanggan')->with('success','Data Pelanggan Berhasil Di Tambahkan');
    }

    public function editpelanggan ($id){ 
        $data = pelanggan::findOrfail($id);
        return view('pelanggan.editpelanggan',compact('data'));
    }

    public function updatepelanggan (request $request, $id){ 
        $data = pelanggan::find($id);
            $data->update([
            'namapelanggan' => $request->namapelanggan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);
            
        return redirect()->route('pelanggan')->with('success','Data Pelanggan Berhasil Di Update');

    }

    public function deletepelanggan($id){
        $data = pelanggan::find($id);
        $data->delete();

        return redirect()->route('pelanggan')->with('success','Data Pelanggan Berhasil Di Hapus');
    }
}
