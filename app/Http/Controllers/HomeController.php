<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;


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

    public function generatePDF() //minta parameter $tanggal dr input di view
    {
        $tasks = DB::table('task')
            ->join('users', 'task.id_cs', '=', 'users.id')
            ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
            ->select('task.*', 'users.name', 'ruang.nama')
            ->orderBy('tanggal', 'desc')
            ->orderBy('nama', 'asc')
            // tambahin where tanggal = $tanggal
            ->limit(20)
            ->get();
        
        $pdf = PDF::loadView('cetak',compact('tasks'));
        return $pdf->download('detail.pdf');
    }

    public function updatestatus(Request $request, $id){



        DB::table('task')
        ->where('id',$id)
        ->update([
            'status' => 'BERSIH',
            'bukti1' => $request->bukti1->store('public/bukti1'),
            'bukti2' => $request->bukti2->store('public/bukti2'),
            'bukti3' => $request->bukti3->store('public/bukti3'),
            'bukti4' => $request->bukti4->store('public/bukti4'),
            'bukti5' => $request->bukti5->store('public/bukti5'),
        ]);
        

        $reports = DB::table('task')
        ->join('users', 'task.id_cs', '=', 'users.id')
        ->join('ruang', 'task.id_ruang', '=', 'ruang.id')
        ->select('task.*', 'users.name', 'ruang.nama')
        ->where('tanggal', '=', Carbon::today())
        ->where('task.id_cs','=', Auth::id())
        ->get();
    return view('SBAdmin/panel',compact('reports'));
    }
}
