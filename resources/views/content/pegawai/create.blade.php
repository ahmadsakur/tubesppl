@extends('SBAdmin.admin')

@section('content')
<div class="ml-3 mt-3">
    <div class="container col-6">
        <h3 class="card-title text-center">Tambah Pegawai</h3>
        <form role="form" action="/pegawai" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old ('name','')}}"
                    placeholder="kokeru cleaner" autocomplete="off">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old ('email','')}}"
                    placeholder="cleaner@kokeru.com" autocomplete="off">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cat_description">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="{{ old ('password','')}}" placeholder="Enter Password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection