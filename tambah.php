<?php
include "koneksi.php";
echo "<center><h1>Form Tambah Pegawai</h1>";
echo "<form method ='POST' action='insert.php'>";
echo "<table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type='text' name='nama'></td>
        </tr>

        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><input type='radio' name='jenis_kelamin' value='Laki-laki'>Laki-laki
          <td><input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan
        </tr>

        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><input type='text' name='alamat'></td>
        </tr>

        <tr>
          <td>Nomor Telepon</td>
          <td>:</td>
          <td><input type='number' name='no_telepon'></td>
        </tr>

        <tr>
          <td>Agama</td>
          <td>:</td>
          <td>
            <select name='agama'>";
              $query = mysqli_query($koneksi,"SELECT * FROM agama");
              while ($a=mysqli_fetch_array($query)) {
                echo "<option value='$a[id_agama]'>$a[agama]</option>";
              }
            echo "</select>
          </td>
        </tr>

        <tr><td colspan=3 align='center'><input type='submit' value='Simpan'></td></tr>

        </table></form></center>";
?>
