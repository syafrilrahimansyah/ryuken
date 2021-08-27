<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use App\Models\Nilaisiswa;
use App\Models\Religion;
use Illuminate\Http\Request;

class AdminNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/admin/datanilai', [
            "title" => "Data Nilai Siswa",
            "nilaisiswas" => Nilaisiswa::latest()->filter(request(['keyword']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilaisiswa  $nilaisiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Nilaisiswa $nilaisiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilaisiswa  $nilaisiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard/admin/editdanil', [
            "title" => "Data Nilai Siswa",
            "nilaisiswa" => Nilaisiswa::find($id),
            "religions" => Religion::all(),
            "belts" => Belt::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilaisiswa  $nilaisiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nilaisiswa = Nilaisiswa::whereId($id)->first();
        $nilaisiswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'kyorugi' => $request->kyorugi,
            'poomsae' => $request->poomsae,
            'kyukpa' => $request->kyukpa,
            'naikke' => $request->naikke
        ]);

        return redirect('/data-nilai-siswa')->with('success', 'Data nilai siswa <strong>berhasil diubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilaisiswa  $nilaisiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nilaisiswa::whereId($id)->delete();

        return redirect('/data-nilai-siswa')->with('success', 'Data nilai siswa <strong>berhasil dihapus!</strong>');
    }
}
