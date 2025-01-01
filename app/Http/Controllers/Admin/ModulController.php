<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        $modul = Modul::all();
        return view('admin/modul',['modul'=>$modul]);
    }

    public function create_modul()

    {
        return view('admin/create_modul');
    }
    public function save_modul(Request $request)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif', 
        ]);
    

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('uploads/modul', 'public'); 
        }
    
        $modul = new Modul();
        $modul->nama_modul = $request->input('nama_modul');
        $modul->foto = $fotoPath; 
    
        $modul->save();
    
        return redirect('modul')->with('success', 'Modul berhasil disimpan.');
    }
    

    public function edit_modul($id)
    {
        $modul = Modul::findOrFail($id);
        return view('admin/edit_modul',['modul'=> $modul]);
    }

    public function update_modul(Request $request)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
        ]);
    
        $modul = Modul::findOrFail($request->id);
        $modul->nama_modul = $request->input('nama_modul');
    
        if ($request->hasFile('foto')) {
            if ($modul->foto && \Storage::exists('public/' . $modul->foto)) {
                \Storage::delete('public/' . $modul->foto);
            }

            $fotoPath = $request->file('foto')->store('uploads/modul', 'public');
            $modul->foto = $fotoPath;
        }
    
        $modul->save();
    
        return redirect('/modul')->with('success', 'Modul berhasil diperbarui.');
    }
    

    public function delete_modul($id)
    {
        // $id = $request->id;
        $modul = Modul::findOrFail($id);
        $modul->delete();
        return redirect('modul')->with('success', 'Modul berhasil dihapus!');
    }

}
