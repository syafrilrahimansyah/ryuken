<?php

namespace App\Http\Controllers;

use App\Models\Socialsharing;
use Illuminate\Http\Request;

class DatasocialController extends Controller
{
    public function index()
    {
        return view('dashboard/admin/datasocial', [
            "title" => "Data Social Sharing",
            "socialsharings" => Socialsharing::latest()->filter(request(['keyword']))->get()
        ]);
    }
}
