<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        // mengirim data anggota ke view anggota
        return view('anggota', ['data_anggota' => $anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menampilkan form input data anggota
        return view('anggotaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //tambah
    {
        //pinjam
        // $id = Order::insertGetId([
        //     'id_user' => Auth()->id(),
        //     'tgl_pesan' => $waktu,
        //     'ongkir' => $ongkir, // INI PERLU DIKIRIM DATANYA
        //     'status' => 'belum bayar',
        //     'total' => $total,
        //     'keterangan' => $keterangan,
        //     'alamat_kirim' => $this->address
        // ]);
            // pinjam_detail
        // foreach ($filterCart as $cart) {
        //     Order_detail::create([
        //         'id_pesanan' => $id,
        //         'id_variasi' => $cart['id'],
        //         'qty' => $cart['quantity'],
        //         'subtotal' => $cart['price'],
        //     ]);
        // }

        $id = Anggota::insertGetId([
            'nama_anggota'=> $request->nama_anggotax,
            'jenis_kelamin'=> $request->jenis_kelaminx,
            'alamat' => $request->alamatx,
            'no_hp' => $request->no_hpx
        ]);

            // DB::table('anggota')->insert([
            //     'nama'=> $request->namax,
            //     'alamat' => $request->alamatx,
            //     'no_telp' => $request->no_telpx
            // ]);
            return redirect('/anggota');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //menampilkan
    {
        $dtAnggita = Anggota::find($id); //mencari berdasarkan id yang dikirim
        return view('anggotaDetail', ['detail_anggota' => $dtAnggota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update ke database
        DB::table('anggota')->where('id',$id)->update([
            'nama_anggota'=> $request->nama_anggotae,
            'jenis_kelamin'=> $request->jenis_kelamine,
            'alamat' => $request->alamate,
            'no_hp' => $request->no_hpe
        ]);
        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('anggota')->where('id',$id)->delete();
        return redirect('/anggota');
    }
}


// $detailAnggota = Anggota::find($anggota->id);
//         // mengirim data anggota ke view anggota
//         return view('anggotaDetail', ['detail_anggota' => $detailAnggota]);
