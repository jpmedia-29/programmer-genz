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
        
        $validated = $request->validate([
            'nama_profil' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'required|string',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',
        ]);
    
        
        $profil = Profil::first();
    
        if ($profil) {
            $profil->nama_profil = $request->nama_profil;
            $profil->alamat = $request->alamat;
            $profil->no_telp = $request->no_telp;
            $profil->email = $request->email;
    
            
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = $request->nama_profil . '-' . now()->format('Y-m-d-H-i-s') . '.' . $logo->getClientOriginalExtension();
                $logo->storeAs('public/logos', $logoName);
                $profil->logo = $logoName;  
            }
    
            $profil->save();
            return redirect('profil')->with('success', 'Profil berhasil diperbarui!');
        } else {
           
            $profil = new Profil();
            $profil->nama_profil = $request->nama_profil;
            $profil->alamat = $request->alamat;
            $profil->no_telp = $request->no_telp;
            $profil->email = $request->email;
    
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = $request->nama_profil . '-' . now()->format('Y-m-d-H-i-s') . '.' . $logo->getClientOriginalExtension();
                $logo->storeAs('public/logos', $logoName);
                $profil->logo = 'logos/' . $logoName;  
            }
    
            $profil->save();
            return redirect('profil')->with('success', 'Profil berhasil dibuat!');
        }
    }
    
    
}
