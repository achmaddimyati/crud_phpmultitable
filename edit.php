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
        if($edit['agama']=='Islam')
          {
            echo "<option value='Islam' selected>Islam</option>
            <option value='Kristen'>Kristen</option>
            <option value='Katholik'>Katholik</option>
            <option value='Hindu'>Hindu</option>
            <option value='Budha'>Budha</option>
            <option value='Konghuchu'>Konghuchu</option>";
          }elseif ($edit['agama']=='Kristen')
            {
              echo "<option value='Islam'>Islam</option>
              <option value='Kristen' selected>Kristen</option>
              <option value='Katholik'>Katholik</option>
              <option value='Hindu'>Hindu</option>
              <option value='Budha'>Budha</option>
              <option value='Konghuchu'>Konghuchu</option>";
            }elseif ($edit['agama']=='Katholik')
              {
                echo "<option value='Islam'>Islam</option>
                <option value='Kristen'>Kristen</option>
                <option value='Katholik' selected>Katholik</option>
                <option value='Hindu'>Hindu</option>
                <option value='Budha'>Budha</option>
                <option value='Konghuchu'>Konghuchu</option>";
              }elseif ($edit['agama']=='Hindu')
                {
                  echo "<option value='Islam'>Islam</option>
                  <option value='Kristen'>Kristen</option>
                  <option value='Katholik'>Katholik</option>
                  <option value='Hindu'selected>Hindu</option>
                  <option value='Budha'>Budha</option>
                  <option value='Konghuchu'>Konghuchu</option>";
                }elseif ($edit['agama']=='Budha')
                  {
                    echo "<option value='Islam'>Islam</option>
                    <option value='Kristen'>Kristen</option>
                    <option value='Katholik'>Katholik</option>
                    <option value='Hindu'>Hindu</option>
                    <option value='Budha'selected>Budha</option>
                    <option value='Konghuchu'>Konghuchu</option>";
                  }elseif ($edit['agama']=='Budha')
                    {
                      echo "<option value='Islam'>Islam</option>
                      <option value='Kristen'>Kristen</option>
                      <option value='Katholik'>Katholik</option>
                      <option value='Hindu'>Hindu</option>
                      <option value='Budha'>Budha</option>
                      <option value='Konghuchu' selected>Konghuchu</option>";
                    }elseif ($edit['agama']=='0')
                      {
                        echo "<option value='Islam'>Islam</option>
                        <option value='Kristen'>Kristen</option>
                        <option value='Katholik'>Katholik</option>
                        <option value='Hindu'>Hindu</option>
                        <option value='Budha'>Budha</option>
                        <option value='Konghuchu'>Konghuchu</option>";
                      }
        echo "</select>
      </td>
    </tr>

    <tr><td colspan=3 align='center'><input type='submit' value='Simpan'></td></tr>

    </table></form>";
 ?>
