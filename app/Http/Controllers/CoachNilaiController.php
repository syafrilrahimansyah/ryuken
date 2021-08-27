<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use App\Models\Nilaisiswa;
use Illuminate\Http\Request;

class CoachNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/coach/nilai', [
            "title" => "Nilai Ujian Siswa",
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
        return view('dashboard/coach/tambahnilai', [
            "title" => "Nilai Ujian Siswa",
            "nilaisiswas" => Nilaisiswa::all(),
            "belts" => Belt::all(),
            "date" => date("Y-m-d h:i:sa"),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'user_id' => 'required|max:255',
            'kelas' => 'required|max:255',
            'kyorugi' => 'required|max:255',
            'poomsae' => 'required|max:255',
            'kyukpa' => 'required|max:255',
            'naikke' => 'required|max:255',
            'published_at' => 'required|max:255'
        ]);

        Nilaisiswa::create($validatedData);

        return redirect('/nilai-ujian-siswa')->with('success', '<strong>Successfully</strong> added student grades');
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
        return view('dashboard/coach/editnilai', [
            "title" => "Nilai Ujian Siswa",
            "nilaisiswa" => Nilaisiswa::find($id),
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
            'user_id' => $request->user_id,
            'kelas' => $request->kelas,
            'kyorugi' => $request->kyorugi,
            'poomsae' => $request->poomsae,
            'kyukpa' => $request->kyukpa,
            'naikke' => $request->naikke
        ]);

        return redirect('/nilai-ujian-siswa')->with('success', 'Data nilai siswa <strong>berhasil diubah!</strong>');
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

        return redirect('/nilai-ujian-siswa')->with('success', 'Data nilai siswa <strong>berhasil dihapus!</strong>');
    }
}
