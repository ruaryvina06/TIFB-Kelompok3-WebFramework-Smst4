<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        // dd($petugas);
        //mengirim data petugas ke view petugas
        return view('petugas', ['data_petugas' => $petugas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menampilkan form input data petugas
        return view('petugasForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //untuk menambahkan data petugas
    {
        DB::table('petugas')->insert([
                'nama_petugas'=>$request->namap,
                'no_telp'=>$request->no_telpp
            ]);
            return redirect('/petugas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // menampilkan data satu objek
    {
        $dtPetugas = Petugas::find($id);
        return view('petugasDetail',['detail_petugas' => $dtPetugas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update database
        DB::table('petugas')->where('id',$id)->update([
            'nama_petugas'=> $request->namape,
            'no_telp'=> $request->notelpe
        ]);
        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('petugas')->where('id', $id)->delete();
        return redirect('/petugas');
    }
}
