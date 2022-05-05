@extends('layouts.master')

@section('content')

    <div class="container">

        <h1>Edit Warga</h1>

        <form action="/warga/{{ $warga->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $warga->nama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" value="{{ $warga->nik }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">No KK</label>
                <input type="text" name="nik" class="form-control" value="{{ $warga->no_kk }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                    <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
                </select><br>
            </div> 
            <div class="form-floating mb-3">
                <textarea class="form-control" name="alamat" placeholder="Tulis Alamat Lengkap" id="floatingTextarea2" style="height: 100px">{{ $warga->alamat }}</textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>

            <button type="submit" class="btn btn-info" name="submit">Update</button>
            <button type="cancel" class="btn btn-danger" name="cancel">Cancel</button>
            
        </form>
    </div>

@endsection