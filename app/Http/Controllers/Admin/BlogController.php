<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog = DB::table('blog')
        ->join('kategori', 'blog.id_kategori', '=', 'kategori.id_kategori')
        ->select('blog.*', 'kategori.nama_kategori')
        ->get();
        return view('admin/blog',['blog'=>$blog]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin/create_blog',['kategori'=>$kategori]);
    }

    public function save(Request $request)
    {
         
          $validated = $request->validate([
            'id_blog' => 'required|exists:kategori,id_kategori',
            'judul_Blog' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'isi_blog' => 'required|string',
        ]);

       
        $blog = new Blog();
        $blog->id_kategori = $request->id_blog;
        $blog->judul_blog = $request->judul_Blog;
        $blog->isi_blog = $request->isi_blog;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '-' . $foto->getClientOriginalName();
            $foto->storeAs('public/blogs', $fotoName);
            $blog->foto = 'blogs/' . $fotoName; 
        }

   
        $blog->save();

        
        return redirect('blog')->with('success', 'Blog berhasil disimpan!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail();
        return view('admin/blog');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_modul' => 'required|exists:kategori,id_kategori',
            'judul_Blog' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'isi_blog' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id); 

        if ($request->hasFile('foto')) {
       
            if ($blog->foto) {
                Storage::delete($blog->foto);
            }

            $fotoPath = $request->file('foto')->store('public/blogs');
            $blog->foto = $fotoPath; 
        }


        $blog->id_modul = $request->id_modul;
        $blog->judul_blog = $request->judul_Blog;
        $blog->isi_blog = $request->isi_blog;
        $blog->save();

   
        return redirect('blog')->with('success', 'Blog berhasil diupdate!');
    }


    public function delete_blog($id)
    {
        $modul = Blog::findOrFail($id);
        $modul->delete();
        return redirect('blog')->with('success', 'Blog berhasil dihapus!');
    }

    
    
}
