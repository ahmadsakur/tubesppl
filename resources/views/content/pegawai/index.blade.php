@extends('SBAdmin.admin')
@section('content')
<div class="container">
   <h3 class="text-center">Data Cleaning Services</h3>
   <a href="pegawai/create" style=" transform: translateY(38px) translateX(-20px);"
      class="btn btn-primary float-right m"><i class="fa fa-file mr-1" aria-hidden="true"></i> Add CS</a>
   <!-- /.card-header -->
   <div class="card-body">
      <table id="employee" class="table table-bordered">
         <thead>
            <tr>
               <th style="width: 10px">No</th>
               <th>Name</th>
               <th>Email</th>
               <th style="width: 40px">Action</th>
            </tr>
         </thead>
         <tbody>
            @forelse($employees as $key => $employee)
            <tr>
               <td> {{ $key + 1 }} </td>
               <td> {{ $employee->name }} </td>
               <td> {{ $employee->email }} </td>
               <td style="display: flex;">
                  <a href="/pegawai/{{$employee->id}}/edit" class="btn btn-warning btn-sm mr-2">edit</a>
                  <form action="/pegawai/{{$employee->id}}" method="post">
                     @csrf
                     @method('DELETE')
                     <input type="submit" value="delete" class="btn btn-danger btn-sm">
                  </form>
               </td>
            </tr>
            @empty
            <tr>
               <td colspan="4" align="center">Data Tidak Ditemukan</td>
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
      $("#employee").DataTable();
   });
</script>
@endpush