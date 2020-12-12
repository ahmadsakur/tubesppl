@extends('SBAdmin.admin')
@section('content')
<div class="ml-3 mt-3">
    <div class="container col-6">
        <h3 class="card-title text-center">Edit Writer Data</h3>
        <form role="form" action="/pegawai/{{$editQ->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old ('name',$editQ->name)}}"
                    placeholder="Enter Name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old ('email',$editQ->email)}}" placeholder="writer@bloggy.com">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-primary">Edit User</button>
        </form>
    </div>
</div>
@endsection