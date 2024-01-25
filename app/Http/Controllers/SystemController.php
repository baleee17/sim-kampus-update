<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sistem = DB::table('sistem')->get();
        return view('sistem.index', ['sistem' => $sistem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sistem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kodesistem' => 'required',
            'namasistem' => 'required',
            'tipeprogram' => 'required|max:10',
            'statusprogram' => 'required|integer|max:11',
        ]);

        // tambah
        DB::table('sistem')->insert([
            'id' => $request->input('kodesistem'),
            'nama_sistem' => $request->input('namasistem'),
            'tipe_program' => $request->input('tipeprogram'),
            'status_program' => $request->input('statusprogram'),
        ]);

        return redirect('/sistem');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($statusmhs);
        $sistem = DB::table('sistem')->find($id);
        return view('sistem.detail', ['sistem' => $sistem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $sistem = DB::table('sistem')->find($id);
        return view('sistem.edit', ['sistem' => $sistem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi
        $request->validate([
            'kodesistem' => 'required',
            'namasistem' => 'required',
            'tipeprogram' => 'required|max:10',
            'statusprogram' => 'required|integer|max:11',
        ]);
        // update
        DB::table('sistem')
            ->where('id', $id)
            ->update(
                [
                    // 'id' => $request->input('kodesistem'),
                    'nama_sistem' => $request->input('namasistem'),
                    'tipe_program' => $request->input('tipeprogram'),
                    'status_program' => $request->input('statusprogram'),
                ]
            );

        return redirect('/sistem');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('sistem')->where('id', $id)->delete();

        return redirect('/sistem');
    }
}
