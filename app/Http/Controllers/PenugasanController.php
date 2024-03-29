<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = DB::table('task')
            ->join('users', 'task.id_cs', '=', 'users.id')
            ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
            ->select('task.*', 'users.name', 'ruang.nama')
            ->orderBy('tanggal', 'desc')
            ->orderBy('nama', 'asc')
            ->get();
        return view('content.penugasan.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = DB::table('ruang')->get();
        $officers = DB::table('users')->where('id', '!=', 1)->get();
        return view('content.penugasan.create',compact('rooms','officers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('task')->insert([
            'id_ruang' => $request['ruang'],
            'id_cs' => $request['petugas'],
            'tanggal' => Carbon::today(),
            'status' => 'KOTOR',
        ]);

        return redirect('/penugasan')->with('toast_success','Assignment berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
