<?php
include 'koneksi.php';

$id = $_GET['id'];
$edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id'"));

echo "<h1> Form Edit Data Pegawai </h1>";
echo "<form method='POST' action='update.php'>";
echo "<input type='hidden' name='id' value='$id'>
    <table border=1>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type='text' name='nama' value='$edit[nama]'></td>
    </tr>

    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>";
      if($edit['jenis_kelamin']=='Laki-laki')
      {
        echo "<input type='radio' name='jenis_kelamin' value='Laki-laki' checked>Laki-laki
        <input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan";
      }else
          {
            echo "<input type='radio' name='jenis_kelamin' value='Laki-laki'>Laki-laki
            <input type='radio' name='jenis_kelamin' value='Perempuan' checked>Perempuan";
          }
    echo "</td>;</tr>

    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input type='text' name='alamat' value='$edit[alamat]'></td>
    </tr>

    <tr>
      <td>Nomor Telepon</td>
      <td>:</td>
      <td><input type='number' name='no_telepon' value='$edit[no_telepon]'></td>
    </tr>

    <tr>
      <td>Agama</td>
      <td>:</td>
      <td>
        <select name='agama'>";
        $tampil=mysqli_query($koneksi,"SELECT * FROM agama");
        while ($ag=mysqli_fetch_array($tampil)) {
          if ($edit[agama]==$ag[id_agama]) {
            echo "<option value=$ag[id_agama] selected>$ag[agama]</option>";
            }
            else {
              echo "<option value=$ag[id_agama]>$ag[agama]</option>";
            }
        }
        echo "</select>
      </td>
    </tr>

    <tr><td colspan=3 align='center'><input type='submit' value='Simpan'></td></tr>

    </table></form>";
 ?>
