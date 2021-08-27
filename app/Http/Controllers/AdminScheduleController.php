<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Dojang;
use App\Models\Schedule;
use Illuminate\Http\Request;

class AdminScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/admin/jadwal', [
            "title" => "Data Jadwal Latihan",
            "schedules" => Schedule::latest()->filter(request(['keyword']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/admin/tambahdaja', [
            "title" => "Data Jadwal Latihan",
            "schedules" => Schedule::all(),
            "date" => date("Y-m-d h:i:sa"),
            "dojangs" => Dojang::all(),
            "days" => Day::all()
        ]);
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
            'nama_pelatih' => 'required|max:255',
            'nama_sekolah' => ['required', 'max:255'],
            'alamat_sekolah' => 'required|max:255',
            'hari' => 'required|max:255',
            'jam' => 'required|max:255',
            'published_at' => 'required|max:255'
        ]);

        Schedule::create($validatedData);

        // $request->session()->flash('success', '<strong>Registration successful!</strong> Please login');

        return redirect('/data-jadwal-latihan')->with('success', '<strong>Successfully added schedule</strong>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard/admin/editdaja', [
            "title" => "Data Jadwal Latihan",
            "schedule" => Schedule::find($id),
            "dojangs" => Dojang::all(),
            "days" => Day::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schedule = Schedule::whereId($id)->first();
        $schedule->update([
            'nama_pelatih' => $request->nama_pelatih,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect('/data-jadwal-latihan')->with('success', 'Data jadwal latihan <strong>berhasil diubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::whereId($id)->delete();

        return redirect('/data-jadwal-latihan')->with('success', 'Data jadwal latihan <strong>berhasil dihapus!</strong>');
    }
}
