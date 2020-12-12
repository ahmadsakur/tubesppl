@extends('SBAdmin.admin')
@section('content')
<div class="container">
   <h3 class="text-center">Data Ruangan</h3>
   <a href="ruang/create" style=" transform: translateY(38px) translateX(-20px);"
      class="btn btn-primary float-right m"><i class="fa fa-file mr-1" aria-hidden="true"></i> Add Room</a>
   <!-- /.card-header -->
   <div class="card-body">
      <table id="rooms" class="table table-bordered">
         <thead>
            <tr>
               <th style="width: 10px">No</th>
               <th>Name</th>
               <th>Deskripsi</th>
               <th style="width: 40px">Action</th>
            </tr>
         </thead>
         <tbody>
            @forelse($rooms as $key => $room)
            <tr>
               <td> {{ $key + 1 }} </td>
               <td> {{ $room->nama }} </td>
               <td> {{ $room->deskripsi }} </td>
               <td style="display: flex;">
                  <a href="/ruang/{{$room->id}}/edit" class="btn btn-warning btn-sm mr-2">edit</a>
                  <form action="/ruang/{{$room->id}}" method="post">
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
      $("#rooms").DataTable();
   });
</script>
@endpush