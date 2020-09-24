<?php
include 'koneksi.php';

$nm = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$almt = $_POST['alamat'];
$tlp = $_POST['no_telepon'];
$agm = $_POST['agama'];

$insert = mysqli_query($koneksi, "INSERT INTO pegawai VALUES('','$nm','$jk','$almt','$tlp','$agm')");

if($insert)
  {
    echo "<center>Data Berhasil disimpan !<br><a href='view.php'>
    Kembali ke View </a></center>";
  }else{
        echo "<center> Data gagal disimpan !<br><a href='tambah.php'>
        Kembali ke Form</a></center>";
        }
 ?>
