@extends('SBAdmin.admin')
@section('content')
<div class="container">
   <h3 class="text-center">Data Penugasan</h3>
   <a href="penugasan/create" style=" transform: translateY(38px) translateX(-20px);"
      class="btn btn-primary float-right m"><i class="fa fa-file mr-1" aria-hidden="true"></i>Assign</a>
   <!-- /.card-header -->
   <div class="card-body">
      <table id="tasks" class="table table-bordered">
         <thead>
            <tr>
               <th style="width: 10px">No</th>
               <th>ID Ruangan</th>
               <th>Nama Petugas</th>
               <th>Status</th>
               <th>Tanggal</th>
            </tr>
         </thead>
         <tbody>
            @forelse($tasks as $key => $task)
            <tr>
               <td> {{ $key + 1 }} </td>
               <td> {{ $task->nama }} </td>
               <td> {{ $task->name }} </td>
               <td> {{ $task->status }}</td>
               <td> {{ $task->tanggal }}</td>
            </tr>
            @empty
            <tr>
               <td colspan="5" align="center">Belum ada Penugasan Hari Ini</td>
            </tr>
            @endforelse
         </tbody>
      </table>
   </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('SBAdmin/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('SBAdmin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
   $(function() {
      $("#tasks").DataTable();
   });
</script>
@endpush