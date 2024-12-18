<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    public function index()
    {
        $materi = DB::table('materi')
        ->join('modul', 'materi.id_modul', '=', 'modul.id_modul')
        ->select('materi.*', 'modul.nama_modul')
        ->get();
        return view('admin/materi',['materi'=>$materi]);   
    }

    public function create_materi()
    {
        $modul = Modul::all();
        return view('admin/create_materi',['modul'=>$modul]);
    }

    public function save_materi(Request $request)
    {
        
        $validatedData = $request->validate([
            'id_modul' => 'required|exists:modul,id_modul', 
            'judul_materi' => 'required|string|max:255',
            'materi' => 'required',
        ]);

        $materi = new Materi();
        $materi->id_modul = $request->id_modul;
        $materi->judul_materi = $request->judul_materi;
        $materi->materi = $request->materi;

        $materi->save();

       
        return redirect('materi')->with('success', 'Materi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $modul = Modul::all();
        $materi = Materi::findOrFail($id);
        return view('admin/edit_materi',['materi'=>$materi,'modul'=>$modul]);
    }


    public function delete_materi($id)
    {
       
        $materi = Materi::findOrFail($id);
        $materi->delete();
        return redirect('materi')->with('success', 'Materi berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_modul' => 'required|exists:modul,id_modul',
            'judul_materi' => 'required|string|max:255',
            'materi' => 'required|string',
        ]);

        
        $materi = Materi::findOrFail($id);

        $materi->id_modul = $request->id_modul;
        $materi->judul_materi = $request->judul_materi;
        $materi->materi = $request->materi;
        $materi->save();

        return redirect('materi')->with('success', 'Materi berhasil diperbarui!');
    }
}
