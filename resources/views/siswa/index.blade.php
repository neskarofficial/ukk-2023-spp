<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>NIS</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($siswas as $siswa)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $siswa->nis }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas->nama_kelas }}</td>
        <td>

        </td>
        
      </tr>      
    @endforeach
  </tbody>  
</table>