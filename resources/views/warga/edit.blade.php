<h1>Edit Warga</h1>

<form action="/warga/{{ $warga->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" id="" placeholder="nama" value="{{ $warga->nama }}"><br>
    <input type="text" name="nik" id="" placeholder="nik" value="{{ $warga->nik }}"><br>
    <input type="text" name="no_kk" id="" value="{{ $warga->no_kk }}"><br>
    <select name="jenis_kelamin" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" id="" cols="30" rows="10">{{ $warga->alamat }}</textarea><br>
    <input type="submit" name="submit" value="simpan">
</form>