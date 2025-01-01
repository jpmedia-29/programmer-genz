<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Materi;
use App\Models\Modul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index()
    {
        $modul = Modul::count();
        $blog = Blog::count();
        $materi = Materi::count();
    
        return view('admin/dashboard', compact('modul', 'blog', 'materi'));
    }
    
    public function admin()
    {
        $user = User::all();

        return view('admin/admin', compact('user'));
    }

    public function create_admin()
    {
        return view('admin/create_admin');
    }


    public function save_admin(Request $request)
    {
          $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user,username', 
            'Password' => 'required|string', 
        ]);

        $hashedPassword = password_hash($request->input('Password'), PASSWORD_DEFAULT);

        $admin = new User();
        $admin->nama_lengkap = $request->input('nama_lengkap');
        $admin->username = $request->input('username');
        $admin->password = $hashedPassword; 
        $admin->save();

        return redirect('/admin')->with('success', 'Admin berhasil ditambahkan!');
    }

    public function edit_admin($id)
    {
        $user = User::findOrFail($id); 
        return view('admin/edit_admin', compact('user')); 
    }

    public function update_admin(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user,username,' . $id,
            'Password' => 'nullable|string', 
        ]);

            $user = User::findOrFail($id);
            $user->nama_lengkap = $request->input('nama_lengkap');
            $user->username = $request->input('username');

            if ($request->filled('Password')) {
                $user->password = bcrypt($request->input('Password'));
            }

            $user->save();

            return redirect('admin')->with('success', 'Admin berhasil diperbarui!');
    }


        public function delete_admin($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect('admin')->with('success','Data Berhsil Dihapus');
        }




}
