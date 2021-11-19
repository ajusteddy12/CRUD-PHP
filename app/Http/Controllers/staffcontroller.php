<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;


class staffcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff=staff::all();
        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = staff::all();
        return view('staff.create',compact('staff'));
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
        staff::create([
        'nama' => $request->nama,
        'bidang' => $request->bidang,
        'no' => $request->no,
        'email' => $request->email,
        ]);
        return redirect()->route('staff.index');
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
        $staff = staff::where('id',$id)->first();
        return view('staff.show',compact('staff'));
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
        $staff = staff::where('id',$id)->first();
        return view('staff.edit',compact('staff'));
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
        staff::where('id',$id)
        ->update([
        'nama' => $request->nama,
        'bidang' => $request->bidang,
        'no' => $request->no,
        'email' => $request->email,
        ]);
        return redirect()->route('staff.index');
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
        staff::where('id',$id)->delete();
        return redirect()->route('staff.index');
        //
    }
}
