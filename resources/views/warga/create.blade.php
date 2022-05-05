@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Create Warga</h1>

    <form action="/warga/store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control">
        </div>
        <div class="mb-3">
            <label for="no_kk" class="form-label">No KK</label>
            <input type="text" name="no_kk" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="alamat" placeholder="Tulis Alamat Lengkap" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="cancel" class="btn btn-danger" name="cancel">Cancel</button>
      </form>
</div>

@endsection
