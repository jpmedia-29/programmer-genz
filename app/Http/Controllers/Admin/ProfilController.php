<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $profil = Profil::first();
        return view('admin/profil',['profil'=>$profil]);
    }

    public function save_profil(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_profil' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'required|string',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',
        ]);
    
        // Cek apakah profil sudah ada
        $profil = Profil::first();
    
        // Buat atau update profil
        if ($profil) {
            $profil->nama_profil = $request->nama_profil;
            $profil->alamat = $request->alamat;
            $profil->no_telp = $request->no_telp;
            $profil->email = $request->email;
    
            // Jika ada file logo, simpan dengan nama profil + datetime
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = $request->nama_profil . '-' . now()->format('Y-m-d-H-i-s') . '.' . $logo->getClientOriginalExtension();
                $logo->storeAs('public/logos', $logoName);
                $profil->logo = $logoName;  // Simpan path relatif
            }
    
            $profil->save();
            return redirect('profil')->with('success', 'Profil berhasil diperbarui!');
        } else {
            // Buat profil baru
            $profil = new Profil();
            $profil->nama_profil = $request->nama_profil;
            $profil->alamat = $request->alamat;
            $profil->no_telp = $request->no_telp;
            $profil->email = $request->email;
    
            // Jika ada file logo, simpan dengan nama profil + datetime
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = $request->nama_profil . '-' . now()->format('Y-m-d-H-i-s') . '.' . $logo->getClientOriginalExtension();
                $logo->storeAs('public/logos', $logoName);
                $profil->logo = 'logos/' . $logoName;  // Simpan path relatif
            }
    
            $profil->save();
            return redirect('profil')->with('success', 'Profil berhasil dibuat!');
        }
    }
    
    
}
