<form action="{{ route('siswa.store') }}" method="POST">
  @csrf
  <input type="number" name="nisn" placeholder="Silahkan Input NISN" value="{{ old('nisn') }}">
  <br>
  <input type="number" name="nis" placeholder="Silahkan Input NIS" value="{{ old('nis') }}">
  <br>
  <input type="text" name="nama" placeholder="Silahkan Input Nama" value="{{ old('nama') }}">
  <br>
  <textarea name="alamat" id="" cols="30" rows="10" placeholder="Silahkan Input Alamat">{{ old('alamat') }}</textarea>
  <br>
  <input type="number" name="no_tlp" placeholder="Silahkan Input Tlp" value="{{ old('no_tlp') }}">
  <br>
  <select name="kelas_id" id="kelas_id">
    <option value="" disabled>Silahkan Pilih Kelas</option>
    @foreach ($kelas as $item)
      <option value="{{ $item->id }}" 
       
        >
        {{ $item->nama_kelas }}</option>
    @endforeach
  </select>
  <br>
  <select name="spps_id" id="spps_id">
    <option value="" disabled>Silahkan Pilih Kelas</option>
    @foreach ($spps as $item)
    <option value="{{ $item->id }}">{{ $item->nominal }}</option>
  @endforeach
  </select>
  <input type="submit" value="Simpan">
</form>


