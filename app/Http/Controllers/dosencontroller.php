<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;


class dosencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen=dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = dosen::all();
        return view('dosen.create',compact('dosen'));
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
        dosen::create([
        'nidn' => $request->nidn,
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'no' => $request->no,
        'email' => $request->email,
        ]);
        return redirect()->route('dosen.index');
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
        $dosen = dosen::where('id',$id)->first();
        return view('dosen.show',compact('dosen'));
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
        $dosen = dosen::where('id',$id)->first();
        return view('dosen.edit',compact('dosen'));
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
        dosen::where('id',$id)
        ->update([
        'nidn' => $request->nidn,
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'no' => $request->no,
        'email' => $request->email,
        ]);
        return redirect()->route('dosen.index');
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
        dosen::where('id',$id)->delete();
        return redirect()->route('dosen.index');
        //
    }
}
