<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;


class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa=mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.create',compact('mahasiswa'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mahasiswa::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'prodi' => $request->prodi,
        'alamat' => $request->alamat,

        'tempat' => $request->tempat,
        'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('mahasiswa.index');
                //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = mahasiswa::where('id',$id)->first();
        return view('mahasiswa.show',compact('mahasiswa'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = mahasiswa::where('id',$id)->first();
        return view('mahasiswa.edit',compact('mahasiswa'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        mahasiswa::where('id',$id)
        ->update([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'prodi' => $request->prodi,
        'alamat' => $request->alamat,

        'tempat' => $request->tempat,
        'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('mahasiswa.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mahasiswa::where('id',$id)->delete();
        return redirect()->route('mahasiswa.index');
        //
    }
}
