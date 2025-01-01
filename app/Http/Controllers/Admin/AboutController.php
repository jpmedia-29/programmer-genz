<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = about::first();
        return view('admin/about',['about'=>$about]);
    }

    public function update (Request $request)
    {
        $about = about::first();
        if ($about) {
            $about->deskripsi = $request->deskripsi;
            $about->save();
            return redirect('about')->with('success', 'Data About berhasil diperbarui!');
        } else {
            $about = new about();
            $about->deskripsi = $request->deskripsi;
            $about->save();
            return redirect('about')->with('success', 'Data About berhasil dibuat!');
        }
    }
}
