@extends('SBAdmin.admin')

@section('content')
<div class="ml-3 mt-3">
    <div class="container col-6">
        <h3 class="card-title text-center">Tambah Ruangan</h3>
        <form role="form" action="/ruang" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Ruang</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old ('nama','')}}"
                    placeholder="R001" autocomplete="off">
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                    value="{{ old ('deskripsi','')}}" placeholder="Ruang Meeting" autocomplete="off">
                @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection