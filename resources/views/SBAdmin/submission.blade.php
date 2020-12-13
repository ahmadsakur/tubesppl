@extends('SBAdmin.cleaner')
@section('content')
<div id="content">
   <div class="container-fluid">
      <!-- Content Row -->
      <h3 class="text-center">Buat Laporan</h3>
      <div class="row justify-content-center">
         <div class="col-md-8">
            <form action="/submit/{{$detail->id}}" method="POST">
               @csrf
               @method('PUT')
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Ruang</label>
                  <div class="col-sm-10">
                     <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="{{$detail->nama}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Petugas</label>
                  <div class="col-sm-10">
                     <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="{{$detail->name}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                     <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="{{$detail->tanggal}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti 1</label>
                  <div class="col-sm-10">
                     <input type="file" class="form-control-file" id="bukti" name="bukti">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti 2</label>
                  <div class="col-sm-10">
                     <input type="file" class="form-control-file" id="bukti" name="bukti">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti 3</label>
                  <div class="col-sm-10">
                     <input type="file" class="form-control-file" id="bukti" name="bukti">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti 4</label>
                  <div class="col-sm-10">
                     <input type="file" class="form-control-file" id="bukti" name="bukti">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti 5</label>
                  <div class="col-sm-10">
                     <input type="file" class="form-control-file" id="bukti" name="bukti">
                  </div>
               </div>
               <a href="/home" class="btn btn-warning mb-2 mr-2">Kembali </a>
               <button type="submit" class="btn btn-primary mb-2 mr-2">Submit</button>
            </form>
         </div>
      </div>
      {{-- end of row --}}
   </div>
   <!-- /.container-fluid -->
</div>
@endsection