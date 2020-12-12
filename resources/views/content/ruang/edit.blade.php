@extends('SBAdmin.admin')
@section('content')
<div class="ml-3 mt-3">
    <div class="container col-6">
        <h3 class="card-title text-center">Edit Data Ruang</h3>
        <form role="form" action="/ruang/{{$editQ->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old ('nama',$editQ->nama)}}"
                    placeholder="">
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi"
                    value="{{ old ('deskripsi',$editQ->deskripsi)}}" placeholder="">
                @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-primary">Edit Ruang</button>
        </form>
    </div>
</div>
@endsection