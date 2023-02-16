<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('createKaryawan');
    }

    public function editKaryawan(){
        $karyawans = Karyawan::all();
        return view('editKaryawan', compact('karyawans'));
    }

    public function delete($id){
        Karyawan::destroy($id);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createKaryawan(Request $request)
    {
        // $request->validate([
        //     'nama' => ['required|min:5|max:20'],
        //     'umur' => ['required|gt:20'],
        //     'alamat' => ['required'],
        //     'nomortelepon' => ['required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'],
        // ]);

        Karyawan::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomortelepon' => $request->nomortelepon,
        ]);
        return redirect('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function listKaryawan(karyawan $karyawan)
    {
        $karyawans = karyawan::all();
        return view('showKaryawan', compact('karyawans'));
    }

    public function updateKaryawan($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('updateKaryawan', compact('karyawan'));
    }

    public function update($id, Request $request)
    {
        $karyawan = karyawan::findOrFail($id);
        // dd($karyawan);
        $karyawan->Nama = $request->nama;
        $karyawan->Umur = $request->umur;
        $karyawan->Alamat = $request->alamat;
        $karyawan->NomorTelepon = $request->nomortelepon;
        $karyawan->save();
        return view('index');
    }


    public function edit(karyawan $karyawan)
    {
        //
    }

}
