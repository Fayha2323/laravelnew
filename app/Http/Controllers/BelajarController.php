<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Selamat Datang di Laravel";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  "ini halaman create";
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        return "Ini adalah halaman edit dengan nama param  " . $id;
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
        //
    }

    public function tambah()
    {
        $jumlah = 0;
        return view('tambah', compact('jumlah'));

    }
    public function kali()
    {
        $kali = 0;
        return view('kali', compact('kali'));

    }
    public function bagi()
    {
        $bagi = 0;
        return view('bagi', compact('bagi'));

    }
    public function kurang()
    {
        $kurang = 0;
        return view('kurang', compact('kurang'));

    }
    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
        // return "Jumlahnya adalah " . $jumlah;
    }

public function storekali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $kali = $angka1 * $angka2;
        return view('kali', compact('kali'));
        // return "Jumlahnya adalah " . $jumlah;
    }

public function storebagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $bagi = $angka1 / $angka2;
        return view('bagi', compact('bagi'));
        // return "Jumlahnya adalah " . $jumlah;
    }

public function storekurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $kurang = $angka1 - $angka2;
        return view('kurang', compact('kurang'));
        // return "Jumlahnya adalah " . $jumlah;
    }
}
