<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $karyawan = User::where('role_id', '!=', 1) // Mengecualikan admin
                        ->where(function($query) use ($search) {
                            $query->where('name', 'LIKE', '%'.$search.'%')
                                  ->orWhere('email', 'LIKE', '%'.$search.'%');
                        })
                        ->orderBy('id', 'desc')
                        ->paginate(6);
        return view('karyawan', ['karyawanList' => $karyawan]);
    }

    public function show(){

    }

    public function create(){
        return view('karyawan-add');
    }

    public function store(Request $request){
        $karyawan = User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if($karyawan){
            Session::flash('successtambah', 'success');
        }
        return redirect('/karyawan');
    }

    public function edit(Request $request, $id){
        $karyawan = User::findOrFail($id);
        return view('karyawan-edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request, $id){
        $karyawan = User::findOrFail($id);
        $karyawan->update($request->all());

        if($karyawan){
            Session::flash('successupdate', 'success');
        }
        return redirect('/karyawan');
    }

    public function delete($id){
        $karyawan = User::findOrFail($id);
        return view('karyawan-delete', ['karyawan' => $karyawan]);
    }

    public function destroy($id){
        $karyawan = User::findOrFail($id);
        $karyawan->delete();

        if($karyawan){
            Session::flash('success', 'success');
            Session::flash('message', 'delete karyawan Success!');
        }
        else{
            Session::flash('error','error');
            Session::flash('message', 'delete karyawan Failed!');
        }
        return redirect('/karyawan');
    }
}
