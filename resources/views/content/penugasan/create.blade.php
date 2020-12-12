@extends('SBAdmin.admin')

@section('content')
<div class="ml-3 mt-3">
    <div class="container col-6">
        <h3 class="card-title text-center">Buat Penugasan</h3>
        <form role="form" action="/penugasan" method="POST">
            @csrf
            <div class="form-group">
                <label for="ruang">Ruangan</label>
                <select name="ruang" id="ruang" class="form-control">
                    <option value="">-- Pilih Ruangan --</option>
                    @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="petugas">Petugas</label>
                <select name="petugas" id="petugas" class="form-control">
                    <option value="">-- Pilih Petugas --</option>
                    @foreach ($officers as $officer)
                    <option value="{{ $officer->id }}">{{ $officer->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Assign</button>
        </form>
    </div>
</div>
@endsection