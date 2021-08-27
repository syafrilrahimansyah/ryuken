<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use App\Models\Dojang;
use App\Models\Registration;
use App\Models\Religion;
use Illuminate\Http\Request;

class ClientRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/client/index', [
            "title" => "Pendaftaran Anggota",
            "dojangs" => Dojang::all(),
            "religions" => Religion::all(),
            "belts" => Belt::all(),
            "date" => date("Y-m-d h:i:sa"),
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
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'user_id' => 'unique:registrations',
            'no_tlp' => 'required|max:255',
            'tmpt_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'jkel' => 'required|max:255',
            'umur' => 'required|max:255',
            'agama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tmpt_latihan' => 'required|max:255',
            'sabuk' => 'required|max:255',
            'rw_penyakit' => 'required|max:255',
            'beratbadan' => 'required|max:255',
            'sertifikat' => '',
            'published_at' => 'required|max:255'
        ]);

        $file = $request->file('sertifikat');
        $file->move('datafile', $file->getClientOriginalName());

        Registration::create($validatedData);

        return redirect('/pendaftaran-anggota')->with('success', 'Registration <strong>successful!</strong>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        $user = (isset(auth()->user()->role)) ? auth()->user()->role : '';
        $registration = Registration::where('user_id', auth()->user()->id)->first();
        return view('dashboard/client/detaildapen', [
            "title" => "Edit Data Pendaftaran",
            "registration" => (isset($registration)) ? $registration : null
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
