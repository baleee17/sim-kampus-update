<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode = DB::table('periode')->get();
        return view('periode.index', ['periode' => $periode]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodeperiode' => 'required',
            'bulanawal' => 'required|max:6',
            'bulanakhir' => 'required|max:6',
            'tglmulai' => 'required',
            'tglakhir' => 'required',
        ]);

        // tambah
        DB::table('periode')->insert([
            'id' => $request->input('kodeperiode'),
            'bulanawal' => $request->input('bulanawal'),
            'bulanakhir' => $request->input('bulanakhir'),
            'tgl_mulai' => $request->input('tglmulai'),
            'tgl_akhir' => $request->input('tglakhir'),
        ]);

        return redirect('/periode');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($statusmhs);
        $periode = DB::table('periode')->find($id);
        return view('periode.detail', ['periode' => $periode]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $periode = DB::table('periode')->find($id);
        return view('periode.edit', ['periode' => $periode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi
        $request->validate([
            'kodeperiode' => 'required',
            'bulanawal' => 'required|max:6',
            'bulanakhir' => 'required|max:6',
            'tglmulai' => 'required',
            'tglakhir' => 'required',
        ]);

        // update
        DB::table('periode')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('kodeperiode'),
                    'bulanawal' => $request->input('bulanawal'),
                    'bulanakhir' => $request->input('bulanakhir'),
                    'tgl_mulai' => $request->input('tglmulai'),
                    'tgl_akhir' => $request->input('tglakhir'),
                ]
            );
        return redirect('/periode');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('periode')->where('id', $id)->delete();

        return redirect('/periode');
    }
}
