<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $agama = DB::table('agama')->get();
        // return view('status.index',['agama'=>$agama]);
        $semester = DB::table('semester')->get();
        return view('semester.index', ['semester' => $semester]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semester.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodeSemester' => 'required',
            'namaSemester' => 'required',
        ]);

        // tambah
        DB::table('semester')->insert([
            'id' => $request->input('kodeSemester'),
            'nama_semester' => $request->input('namaSemester'),
        ]);

        return redirect('/semester');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($statusmhs);
        $semester = DB::table('semester')->find($id);
        return view('semester.detail', ['semester' => $semester]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $semester = DB::table('semester')->find($id);
        return view('semester.edit', ['semester' => $semester]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi
        $request->validate([
            'kodeSemester' => 'required',
            'namaSemester' => 'required'
        ]);
        // update
        DB::table('semester')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('kodeSemester'),
                    'nama_semester' => $request->input('namaSemester'),
                ]
            );

        return redirect('/semester');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('semester')->where('id', $id)->delete();

        return redirect('/semester');
    }
}
