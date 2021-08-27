<?php

namespace App\Http\Controllers;

use App\Models\Socialsharing;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about/index', [
            "slug" => '/about',
            "date" => date("Y-m-d h:i:sa"),
            "title" => "Tentang Kami",
            "nama" => "Mohammad Fajar Alfarizy",
            "socialsharings" => Socialsharing::latest()->get()
        ]);
    }

    public function storeSharing(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|unique:socialsharings',
            'pesan' => ['required', 'min:5', 'max:65535'],
            'published_at' => 'required|max:255'
        ]);

        Socialsharing::create($validatedData);

        return redirect('/about')->with('success', '<strong>Komentar berhasil ditambahkan!</strong>');
    }
}
