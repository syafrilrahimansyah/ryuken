<?php

namespace App\Http\Controllers;

use App\Models\Socialsharing;
use Illuminate\Http\Request;

class AdminSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/admin/datasocial', [
            "title" => "Data Social Sharing",
            "socialsharings" => Socialsharing::latest()->filter(request(['keyword']))->get()
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
     * @param  \App\Models\Socialsharing  $socialsharing
     * @return \Illuminate\Http\Response
     */
    public function show(Socialsharing $socialsharing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socialsharing  $socialsharing
     * @return \Illuminate\Http\Response
     */
    public function edit(Socialsharing $socialsharing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socialsharing  $socialsharing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socialsharing $socialsharing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socialsharing  $socialsharing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Socialsharing::whereId($id)->delete();

        return redirect('/data-social-sharing')->with('success', 'Data Social Sharing <strong>berhasil dihapus!</strong>');
    }
}
