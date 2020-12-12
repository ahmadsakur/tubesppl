<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $rooms = Ruang::get()->sortBy('nama');
        return view('content.ruang.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama" =>'required|unique:ruang',
            "deskripsi" => 'required',
        ]);

        $insertQ = Ruang::create([
            "nama" => $request["nama"],
            "deskripsi" => $request["deskripsi"],
        ]);

        return redirect('/ruang')->with('toast_success','Ruang Berhasil di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editQ = Ruang::find($id);
        return view('content.ruang.edit', compact('editQ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nama" =>'required|unique:ruang',
            "deskripsi" => 'required',
        ]);

        $UpdateQ = Ruang::where('id',$id)->update([
            "nama" => $request["nama"],
            "deskripsi" => $request["deskripsi"],
        ]);

        return redirect('/ruang')->with('toast_success','Data Ruang Telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruang::destroy($id);
        return redirect('/ruang')->with('toast_info','Ruang Berhasil DiHapus');
    }
}
