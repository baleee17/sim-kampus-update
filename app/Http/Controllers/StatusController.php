<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
class Group extends Model{}


class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $agama = DB::table('agama')->get();
        // return view('status.index',['agama'=>$agama]);
        $status = DB::table('status')->get();
        return view('status.index', ['status' => $status]);
    }

    public function tampil()
    {
        $status = DB::table('status')->get();
        // dd($agama);
        return view('status.index', ['status' => $status]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status.tambah');
        // $status = DB::table('status')->get();
        // return view('status.index', ['status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'statusmhs' => 'required',
            'namastatus' => 'required|min:3',
        ]);

        // tambah
        DB::table('status')->insert([
            'id' => $request->input('statusmhs'),
            'namastatus' => $request->input('namastatus'),
        ]);

        return redirect('/status');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($statusmhs);
        $status = DB::table('status')->find($id);
        return view('status.detail', ['status' => $status]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $status = DB::table('status')->find($id);
        return view('status.edit', ['status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        // validasi
        $request->validate([
            'statusmhs' => 'required',
            'namastatus' => 'required|min:3'
        ]);
        // update
        DB::table('status')
            ->where('id', $id)
            ->update(
                [
                    'id' => $request->input('statusmhs'),
                    'namastatus' => $request->input('namastatus'),
                ]
            );

        return redirect('/status');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('status')->where('id', $id)->delete();

        return redirect('/status');
    }
}
