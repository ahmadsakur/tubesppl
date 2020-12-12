@extends('SBAdmin.cleaner')
@section('content')
<div id="content">
   <!-- Begin Page Content -->
   <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Hi, {{ Auth::user()->name }}</h1>
         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
               class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>

      <!-- Content Row -->
      <div class="row">
         @forelse($reports as $report)
         @if ($report->status == 'KOTOR')
         <div class="col-sm-4 mb-2 mt-3">
            <div class="card shadow-sm">
               <div class="card-header bg-warning content-center">
                  <h5 class=" font-weight-bold text-white my-4 display-4">{{$report->nama}}</h5>
               </div>
               <div class="card-body row text-center">
                  <div class="col">
                     <i class="fa fa-toggle-off" aria-hidden="true"></i>
                     <div style="font-size: 12px" class="font-weight-bold">PETUGAS</div>
                     <div class="text-uppercase text-muted small">{{$report->name}}</div>
                  </div>
                  <div class="col">
                     <a href="/submit/{{$report->id}}" class="btn btn-primary mt-3"><i class="fa fa-book"
                           aria-hidden="true"></i> Detail</a>
                  </div>
               </div>
            </div>
         </div>
         @else
         <div class="col-sm-4 mb-2 mt-3">
            <div class="card shadow-sm">
               <div class="card-header bg-success content-center">
                  <h5 class=" font-weight-bold text-white my-4 display-4">{{$report->nama}}</h5>
               </div>
               <div class="card-body row text-center">
                  <div class="col">
                     <i class="fa fa-toggle-on" aria-hidden="true"></i>
                     <div style="font-size: 12px" class="font-weight-bold">PETUGAS</div>
                     <div class="text-uppercase text-muted small">{{$report->name}}</div>
                  </div>
                  <div class="col">
                     <a href="/submit/{{$report->id}}" class="btn btn-primary mt-3"><i class="fa fa-book"
                           aria-hidden="true"></i> Detail</a>
                  </div>
               </div>
            </div>
         </div>
         @endif
         @empty
         <h1 class="display-4">Belum Ada Tugas Hari Ini</h1>
         @endforelse
         {{-- end of cards --}}
      </div>
   </div>
   <!-- /.container-fluid -->

</div>
@endsection