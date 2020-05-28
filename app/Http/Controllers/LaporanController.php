<?php

namespace App\Http\Controllers;

use App\Laporan;
use Alert;
use DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan= Laporan::all();
        return view('/admin/laporan', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'tgl' => 'required' ]);

        $tambah= Laporan::create($request->all());

            if ($tambah) {
            Alert::toast('Laporan Baru Berhasil Dibuat', 'success');
            return redirect('/admin/laporan');

            } else{
                Alert::toast('Laporan Baru Gagal Dibuat', 'error');
            return redirect('/admin/laporan');
            
            }
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        // return $request;
             $ubah= Laporan::where('id', $laporan->id)
             ->update([
                'tgl' => $request->tgl
            ]);

            if ($ubah) {
                Alert::toast('Laporan Berhasil Diubah', 'success');
                return redirect('/admin/laporan');

            } else{
                Alert::toast('Laporan Gagal Diubah', 'error');
                return redirect('/admin/laporan');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id= Laporan::FindOrFail($id);
        $id->delete();

        if ($id) {
            Alert::toast('Laporan Berhasil Dihapus', 'success');
            return redirect('/admin/laporan');

        } else{
                Alert::toast('Laporan Gagal Dihapus', 'error');
                return redirect('/admin/laporan');
        }
    }
}
