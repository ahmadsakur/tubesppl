@extends('SBAdmin.admin')
@section('content')
<div id="content">
   <!-- Begin Page Content -->
   <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Laporan Ruangan</h1>
      </div>
      <!-- Content Row -->
      <div class="row">
         <form class="ml-3">
            <div class="form-group row">
               <label for="ruang" class="col-sm-4 col-form-label">ID Ruang :</label>
               <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext" id="ruang" value="{{$detail->nama}}">
               </div>
            </div>
            <div class="form-group row">
               <label for="ruang" class="col-sm-4 col-form-label">Deskripsi :</label>
               <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext" id="ruang" value="{{$detail->deskripsi}}">
               </div>
            </div>
         </form>
      </div>
      <hr width="40%" align="left">
      @if ($detail->status == 'KOTOR')
      <h4 class="h3 mb-0 text-gray-800">Ruangan Belum dibersihkan</h4>
      @else
     
      <div class="col-sm-4">
         <img src="{{ Storage::url($detail->bukti1) }}"  style="width:300px">
     </div>
      <div class="col-sm-4">
         <img src="{{ Storage::url($detail->bukti2) }}"  style="width:300px">
     </div>
      <div class="col-sm-4">
         <img src="{{ Storage::url($detail->bukti3) }}"  style="width:300px">
     </div>
      <div class="col-sm-4">
         <img src="{{ Storage::url($detail->bukti4) }}"  style="width:300px">
     </div>
      <div class="col-sm-4">
         <img src="{{ Storage::url($detail->bukti5) }}"  style="width:300px">
     </div>
      @endif

   </div>
   <!-- /.container-fluid -->

</div>
@endsection