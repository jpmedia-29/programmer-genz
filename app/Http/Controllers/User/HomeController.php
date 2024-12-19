<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Modul;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return View('user.index');
    }
    
    public function kelas()
    {
        $modul = Modul::all();
        return view('user.kelas',['modul'=>$modul]);
    }

    public function about()
    {
        $about = about::all();
        return view('user/about',['about'=>$about]);
    }

    public function blog()
    {
        $blog = Blog::all();
        $kategori = Kategori::all();
        return view('user/blog',['blog'=>$blog,'kategori'=>$kategori]);
    }

}
