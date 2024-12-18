<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        return view('admin/materi');   
    }

    public function create_materi()
    {
        return view('admin/create_materi');
    }
}
