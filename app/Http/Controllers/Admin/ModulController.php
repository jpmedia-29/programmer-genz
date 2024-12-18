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
        ]);

        $modul = new Modul();
        $modul->nama_modul = $request->input('nama_modul');

        $modul->save();
        return redirect('modul')->with('success', 'Modul berhasil disimpan.');
    }

    public function edit_modul($id)
    {
        $modul = Modul::findOrFail($id);
        return view('admin/edit_modul',['modul'=> $modul]);
    }

    public function update(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama_modul' => 'required|string|max:255',
        ]);

        $id = $request->id;

       
        $modul = Modul::findOrFail($id);
        $modul->nama_modul = $request->nama_modul;
        $modul->save();
        return redirect('modul')->with('success', 'Modul berhasil diperbarui!');
    }

    public function delete_modul($id)
    {
        // $id = $request->id;
        $modul = Modul::findOrFail($id);
        $modul->delete();
        return redirect('modul')->with('success', 'Modul berhasil dihapus!');
    }

}
