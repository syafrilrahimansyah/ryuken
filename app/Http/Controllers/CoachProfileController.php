<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use App\Models\Coach;
use App\Models\Religion;
use Illuminate\Http\Request;

class CoachProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/coach/editprofile', [
            "title" => "Coach Profile",
            "coaches" => Coach::all(),
            "religions" => Religion::all(),
            "belts" => Belt::all()
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
            'no_tlp' => 'required|max:255',
            'tmpt_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'jkel' => 'required|max:255',
            'umur' => 'required|max:255',
            'agama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'sabuk' => 'required|max:255',
            'aboutme' => 'required|max:255'
        ]);

        Coach::create($validatedData);

        return redirect('/profile-coach')->with('success', '<strong>Successful!</strong>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        //
    }
}
