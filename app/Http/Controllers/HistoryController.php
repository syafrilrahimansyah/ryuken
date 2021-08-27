<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Socialsharing;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('history/index', [
            "slug" => '/history',
            "title" => "Sejarah Taekwondo",
            "active" => "active",
            "date" => date("Y-m-d h:i:sa"),
            "histories" => History::all(),
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

        return redirect('/history')->with('success', '<strong>Komentar berhasil ditambahkan!</strong>');
    }
}
