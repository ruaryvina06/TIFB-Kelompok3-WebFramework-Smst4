<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        //mengirim data buku ke view anggota
        return view('buku', ['data_buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menampilkan form input data buku
        return view('bukuForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah data buku
        DB::table('buku')->insert([
            'judul_buku'=>$request->jbukui,
            'penulis'=>$request->penulisi,
            'tahun_terbit'=>$request->thterbiti
        ]);
        return redirect('/buku');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //menampilkan halaman perobjeknya
    {
        $dtBuku = Buku::find($id); // mencari berdasarkan id
        // dd($dtBuku);
        return view('bukuDetail', ['detail_buku'=>$dtBuku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update ke database
        DB::table('buku')->where('id', $id)->update([
            'judul_buku'=>$request->jdbukuu,
            'penulis'=>$request->penulisu,
            'tahun_terbit'=>$request->thterbitu
        ]);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus
        DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku');
    }
}
