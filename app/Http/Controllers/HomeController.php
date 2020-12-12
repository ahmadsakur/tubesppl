<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('welcome');
    }

    public function admin()
    {
        //query untuk cards
        $reports = DB::table('task')
                ->join('users', 'task.id_cs', '=', 'users.id')
                ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
                ->select('task.*', 'users.name', 'ruang.nama')
                ->where('tanggal', '=', Carbon::today())
                ->get();
        return view('SBAdmin/dashboard',compact('reports'));
    }

    public function detailruang($id){
        $detail = DB::table('task')
        ->join('users', 'task.id_cs', '=', 'users.id')
        ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
        ->select('task.*', 'users.name', 'ruang.nama', 'ruang.deskripsi')
        ->where('tanggal', '=', Carbon::today())
        ->where('task.id',$id)->first();
        
        return view('SBAdmin/detailruang', compact('detail'));
    }

    public function cs()
    {
        //query untuk assignment
        $reports = DB::table('task')
            ->join('users', 'task.id_cs', '=', 'users.id')
            ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
            ->select('task.*', 'users.name', 'ruang.nama')
            ->where('tanggal', '=', Carbon::today())
            ->where('task.id_cs','=', Auth::id())
            ->get();
        return view('SBAdmin/panel',compact('reports'));
    }
    public function submission($id){
        $detail = DB::table('task')
        ->join('users', 'task.id_cs', '=', 'users.id')
        ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
        ->select('task.*', 'users.name', 'ruang.nama', 'ruang.deskripsi')
        ->where('tanggal', '=', Carbon::today())
        ->where('task.id',$id)->first();
        
        return view('SBAdmin/submission', compact('detail'));
    }
}
