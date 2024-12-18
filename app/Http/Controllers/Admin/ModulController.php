<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        return view('admin/modul');
    }

    public function create_modul()

    {
        return view('admin/create_modul');
    }
}
