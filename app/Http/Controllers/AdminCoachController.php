<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use App\Models\Coach;
use App\Models\Religion;
use Illuminate\Http\Request;

class AdminCoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/admin/datacoach', [
            "title" => "Data Coach",
            "coaches" => Coach::latest()->filter(request(['keyword']))->get()
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
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard/admin/detaildaco', [
            "title" => "Data Coach",
            "coach" => Coach::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard/admin/editdaco', [
            "title" => "Data Coach",
            "coach" => Coach::find($id),
            "religions" => Religion::all(),
            "belts" => Belt::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coach = Coach::whereId($id)->first();
        $coach->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jkel' => $request->jkel,
            'umur' => $request->umur,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'tmpt_latihan' => $request->tmpt_latihan,
            'sabuk' => $request->sabuk,
            'rw_penyakit' => $request->rw_penyakit,
            'beratbadan' => $request->beratbadan
        ]);

        return redirect('/data-coach')->with('success', 'Data coach <strong>berhasil diubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coach::whereId($id)->delete();

        return redirect('/data-coach')->with('success', 'Data pelatih <strong>berhasil dihapus!</strong>');
    }
}
