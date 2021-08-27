<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socialsharing;
use App\Models\Dojang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $user = (isset(auth()->user()->role)) ? auth()->user()->role : '';
        if ($user == 'admin') $role = 'data-pendaftaran';
        elseif ($user == 'client') $role = 'pendaftaran-anggota';
        else $role = 'jadwal-latihan';
        // $role = DB::table('users')->where('username', $user)->first();
        return view('home/index', [
            "slug" => '/',
            "title" => "Ryuken Taekwondo Academy",
            "role" => $role,
            "test" => $user,
            "date" => date("Y-m-d h:i:sa"),
            "namabody" => "Dojang Ryuken",
            "dojangs" => Dojang::paginate(6),
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

        return redirect('/')->with('success', '<strong>Komentar berhasil ditambahkan!</strong>');
    }
}
