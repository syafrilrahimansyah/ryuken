<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditdasiController extends Controller
{
    public function index()
    {
        return view('dashboard/client/editdapen', [
            "title" => "Edit Data Pendaftaran"
        ]);
    }
}
