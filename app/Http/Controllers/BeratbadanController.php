<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeratbadanController extends Controller
{
    public function index()
    {
        return view('dashboard/client/beratbadan', [
            "title" => "Berat Badan Ideal"
        ]);
    }
}
