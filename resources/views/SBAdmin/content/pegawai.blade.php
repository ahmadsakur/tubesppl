@extends('SBAdmin.admin')

@section('content')
<div class="container">
   <h3 class="text-center">Data Customer Services</h3>
   <a href="" style=" transform: translateY(17px);" class="btn btn-primary float-right m"><i class="fa fa-file mr-1"
         aria-hidden="true"></i> Add
      CS</a>
   <table id="employee" class="table table-bordered table-striped">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         @forelse ($users as $key => $user)
         <tr>
            <td>{{ $key + 1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td class="text-center justify-content-center">
               <a href="buku/{{$user->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
               <form action="buku/{{$user->id}}" class="d-inline" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="btn btn-sm btn-danger"></form>
            </td>
         </tr>
         @empty
         <tr>
            <td colspan="5" class="text-center">Tidak ada Pegawai</td>
         </tr>
         @endforelse
      </tbody>
   </table>
   <!-- /.card-body -->
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