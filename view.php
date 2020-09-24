<?php
include 'koneksi.php';

echo '<center><h1>Daftar Pegawai</h1></center><hr>';
echo "<center><form method ='POST' action='tambah.php'>
<input type = 'submit' value='Tambah Data'></form></center>";

echo "<table border=1 align='center'>
    <tr>
      <th>no</th>
      <th>nama pegawai</th>
      <th>jenis kelamin</th>
      <th>alamat</th>
      <th>no telp</th>
      <th>agama</th>
      <th>aksi</th>
    </tr>";
$no = 1;
$view = mysqli_query($koneksi,"SELECT * FROM pegawai");
while ($a = mysqli_fetch_array($view))
{
echo "<tr>
        <td>$no</td>
        <td>$a[nama]</td>
        <td>$a[jenis_kelamin]</td>
        <td>$a[alamat]</td>
        <td>$a[no_telepon]</td>
        <td>$a[agama]</td>
        <td><a href='edit.php?id=$a[id_pegawai]'>Edit</a> |
        <a href='hapus.php?id=$a[id_pegawai]'>Hapus</a></td>";
      $no++;
}
echo "</tr></table>";

 ?>
