<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" id="" placeholder="nama"><br>
    <input type="text" name="nik" id="" placeholder="nik"><br>
    <input type="text" name="no_kk" id=""><br>
    <select name="jenis_kelamin" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="simpan">
</form>