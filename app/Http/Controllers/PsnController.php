<?php

namespace App\Http\Controllers;

use App\Models\Psn;
use Illuminate\Http\Request;

class PsnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.datapeta.psn.index',[
            'title' => 'Data Proyek Strategis Nasional',
            'psn' => Psn::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.datapeta.psn.create',[
            'title' => 'Tambah Data Psn',
            'bencana' => Psn::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'ancaman' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'luas_terdampak' => 'required|max:255',
            'jiwa_terdampak' => 'required|max:255',
            'aktor' => 'required|max:255',
            'sumber_dana' => 'required|max:255'
    ]);
    
    Psn::create($validatedData);
        return redirect('/admin/datapeta/psn')->with('success', 'Tambah Data Psn Berhasil');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function show(Psn $psn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function edit(Psn $psn)
    {
        return view('admin.pages.datapeta.psn.edit',[
            'title' => 'Edit Data Psn',
            'psn' => $psn
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psn $psn)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'ancaman' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'luas_terdampak' => 'required|max:255',
            'jiwa_terdampak' => 'required|max:255',
            'aktor' => 'required|max:255',
            'sumber_dana' => 'required|max:255'
        ]);
        
        Psn::where('id', $psn->id)->update($validatedData);
        return redirect('/admin/datapeta/psn')->with('success', 'Edit Data Psn Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psn $psn)
    {
        Psn::destroy($psn->id);
        return redirect('/admin/datapeta/psn')->with('success', 'Hapus Data Psn Berhasil');
    }
}
