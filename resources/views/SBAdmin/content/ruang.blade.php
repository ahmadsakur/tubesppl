@extends('SBAdmin.admin')

@section('content')
<div class="container">
   <h3 class="text-center">Data Ruang</h3>
   <table id="rooms" class="table table-bordered table-striped">
      <thead>
         <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>Trident</td>
            <td>Internet
               Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
         </tr>
      </tbody>
   </table>
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