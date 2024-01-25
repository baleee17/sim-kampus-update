<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = DB::table('unit')->get();
        return view('unit.index', ['unit' => $unit]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodeunit' => 'required',
            'namaunit' => 'required',
        ]);

        // tambah
        DB::table('unit')->insert([
            'id' => $request->input('kodeunit'),
            'nama_unit' => $request->input('namaunit'),
        ]);

        return redirect('/unit');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($statusmhs);
        $unit = DB::table('unit')->find($id);
        return view('unit.detail', ['unit' => $unit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $unit = DB::table('unit')->find($id);
        return view('unit.edit', ['unit' => $unit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi
        $request->validate([
            'kodeunit' => 'required',
            'namaunit' => 'required'
        ]);
        // update
        DB::table('unit')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('kodeunit'),
                    'nama_unit' => $request->input('namaunit'),
                ]
            );

        return redirect('/unit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('unit')->where('id', $id)->delete();

        return redirect('/unit');
    }
}
