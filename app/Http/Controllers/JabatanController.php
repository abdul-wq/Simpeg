<?php

namespace App\Http\Controllers;

use App\Jabatan;
use DB;
use Alert;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan= Jabatan::paginate(5);
        return view('/admin/jabatan', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view('/admin/jabatan', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
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
