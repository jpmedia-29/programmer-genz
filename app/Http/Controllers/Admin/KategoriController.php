<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori =Kategori::all();
        return view('admin/kategori',['kategori'=>$kategori]);
    }

    public function create_kategori()
    {
        return view('admin/create_kategori');
    }

    public function save_kategori(Request $request)
    {
        Kategori::create([
            'nama_kategori'=> $request->nama_kategori,
        ]);

        return redirect('kategori')->with('success','kategori berhasil ditambahkan');
    }

    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect('kategori')->with('success','kategori berhasil dihapus');
    }
}
