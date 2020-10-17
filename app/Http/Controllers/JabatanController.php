<?php

namespace App\Http\Controllers;

use App\Jabatan;
use DB;
use Alert;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    
    public function index()
    {
        $jabatan= Jabatan::paginate(5);
        return view('/admin/jabatan', compact('jabatan'));
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'kode_jabatan' => 'required',
            'jabatan' => 'required'
        ]);

        $jabatan= jabatan::create($request->all());

        if ($jabatan) {
            Alert::toast('Jabatan Baru Berhasil Ditambah pak', 'success');
            return redirect('/admin/jabatan');

        }else{
            Alert::toast('Jabatan Baru Gagal Ditambah pak', 'error');
            return redirect('/admin/jabatan');
        }
    }

    
    public function show(Jabatan $jabatan)
    {
        
    }

    
    public function edit(Jabatan $jabatan)
    {
        return view('/admin/jabatan', compact('jabatan'));
    }

    
    public function update(Request $request, Jabatan $jabatan)
    {
        
    }

  
    public function destroy($id)
    {
        $id= Jabatan::FindOrFail($id);
        $hapus= $id->delete();

        if ($hapus) {
            Alert::toast('Jabatan Berhasil Dihapus pak!', 'success');
            return redirect('/admin/jabatan');

        } else{
            Alert::toast('Jabatan gagal dihapus pak', 'error');
            return redirect('/admin/jabatan');
        }
    }
}
