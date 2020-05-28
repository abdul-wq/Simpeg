<?php

namespace App\Http\Controllers;

use Alert;
use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai= Pegawai::paginate(5);
        return view('/admin/pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/tambah_pegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'jabatan' => 'required' ]);

        $pegawai= Pegawai::create($request->all());

        if ($pegawai) {
            Alert::toast('Data Pegawai Berhasil Ditambah Pak!','success');
           return redirect('/admin/pegawai');

        } else{
           Alert::toast('Data Pegawai Gagal Ditambah Pak!','error');
            return redirect('/admin/tambah_pegawai');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('/admin/detail', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('admin/edit_pegawai', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $edit= Pegawai::where('id', $pegawai->id)
        ->update([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'jabatan' => $request->jabatan ]);

            if ($edit) {
                Alert::toast('Data Pegawai Berhasil Diedit Pak!','success');
                return redirect('/admin/pegawai');

            } else{
                 Alert::toast('Data Pegawai Gagal Diedit Pak!','error');
                 return redirect('/admin/edit_pegawai');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai= Pegawai::Findorfail($id);
        $p= $pegawai->delete();

        if ($p) {
            Alert::toast('Data Pegawai Berhasil Dihapus Pak!','success');
            return redirect('/admin/pegawai');

        } else{
            Alert::toast('Data Pegawai Gagal Ditambah Pak!','error');
            return redirect('/admin/pegawai');
        }

    }
}





