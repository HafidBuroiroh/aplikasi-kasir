@extends('layout')
@section('isi')
<div class="card">
    <div class="card-body">
        <form action="{{ url('manager/' .$manager->id) }}" method="post">
            {{ csrf_field() }}
            @method("PATCH")
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="floating-label" for="Text">Nama Manager</label>
                        <input type="text" class="form-control" id="Text" value="{{ $manager->nama_manager }}" placeholder="Masukkan Nama" name="nama_manager">
                        @error('nama_manager')
                        <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="floating-label" for="Text">Alamat</label>
                        <input type="text" class="form-control" id="Text" value="{{ $manager->alamat }}" placeholder="Alamat" name="alamat">
                        @error('alamat')
                        <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="floating-label" for="Text">No. Telepon</label>
                        <input type="number" class="form-control" id="Text" value="{{ $manager->no_telp }}" placeholder="No Telepon" name="no_telp">
                        @error('no_telp')
                        <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection