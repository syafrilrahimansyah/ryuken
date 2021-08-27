<?php

namespace App\Http\Controllers;

use App\Models\Belt;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Nilaisiswa;
use App\Models\Coach;
use App\Models\Religion;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    public function index()
    {
        return view('dashboard/coach/index', [
            "title" => "Jadwal Latihan",
            "schedules" => Schedule::latest()->filter(request(['keyword']))->get()
        ]);
    }
}
