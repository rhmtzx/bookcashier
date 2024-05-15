<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    	return view('auth.login');
    }
    public function proseslogin(Request $request){
    	$this->validate($request,[
    		'email' => 'required',
    		'password' => 'required'
    	],[
    		'email.required' => 'email Harus Diisi !!',	
    		'password.required' => 'password Harus Diisi !!',	
    	]);

    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin' ])) {
            return redirect('/')->with('success','Berhasil Login Sebagai Admin');
        }if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Petugas' ])) {
            return redirect('/welcomep')->with('success','Berhasil Login Sebagai Petugas');
        }        
    
    	return redirect('login')->with('error','Email atau Password Yang Anda Masukkan Salah !!');
    }

    //REGISTER PELANGGAN
    public function register(){
    	return view('auth.register');
    }
    public function prosesregister(Request $request)
	{
    $this->validate($request, [
        'name' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required|email', 
        'password' => 'required'
    ], [
        'name.required' => 'Nama Harus Diisi !!',
        'alamat.required' => 'alamat Harus Diisi !!',
        'telepon.required' => 'Telepon Harus Diisi !!',
        'email.required' => 'email Harus Diisi !!',
        'email.email' => 'Format email Tidak Valid !!',
        'password.required' => 'password Harus Diisi !!',
    ]);

    user::create([
        'name' => $request->name,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
        'email' => $request->email,
        'role' => 'Petugas',
        'password' => bcrypt($request->password),
        'remember_token' => Str::random(60),
    ]);

    return redirect('datapetugas')->with('success', 'Berhasil Register Petugas :D');
	}

    public function logout(){
        Auth::logout();
        return redirect('login')->with('success','Berhasil Logout');
    }

    public function datapetugas(){
        $usersekarang = auth()->user();
        $data = user::where('role','Petugas')
                ->whereNotIn('id', [$usersekarang->id])->get();
        return view('datapetugas.datapetugas',compact('data'));
    }

    public function deletepetugas($id){
        $data = user::find($id);
        $data->delete();

        return redirect()->route('datapetugas')->with('success','User Petugas Berhasil Di Hapus');
    }

}
