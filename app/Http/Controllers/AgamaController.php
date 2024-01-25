<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agama = DB::table('agama')->get();
        // dd($agama);
        return view('crudAgama.index', ['agama' => $agama]);
    }

    public function tampil()
    {
        $agama = DB::table('agama')->get();
        // dd($agama);
        return view('crudAgama.index', ['agama' => $agama]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudAgama.tambah');
        // $agama = DB::table('agama')->get();
        // // dd($agama);
        // return view('crudAgama.tambah', ['agama' => $agama]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodeAgama' => 'required',
            'namaAgama' => 'required|min:3',
        ]);

        // tambah
        DB::table('agama')->insert([
            'id' => $request->input('kodeAgama'),
            'nama_agama' => $request->input('namaAgama'),
        ]);

        return redirect('/agama');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        $agama = DB::table('agama')->find($id);
        return view('crudAgama.detail', ['agama' => $agama]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         // dd($id);
         $agama = DB::table('agama')->find($id);
         return view('crudAgama.edit', ['agama' => $agama]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        // validasi
        $request->validate([
            'kodeAgama' => 'required',
            'namaAgama' => 'required|min:3'
        ]);
        // update
        DB::table('agama')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('kodeAgama'),
                    'nama_agama' => $request->input('namaAgama'),
                ]
            );

        return redirect('/agama');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('agama')->where('id', $id)->delete();

        return redirect('/agama');
    }
}
