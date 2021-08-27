<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dojang;
use App\Models\Belt;
use App\Models\Registration;
use App\Models\Religion;

class PendaftaranController extends Controller
{
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

    public function storeRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'user_id' => '',
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
            'published_at' => 'required|max:255'
        ]);

        Registration::create($validatedData);

        return redirect('/pendaftaran-anggota')->with('success', 'Registration <strong>successful!</strong>');
    }
}
