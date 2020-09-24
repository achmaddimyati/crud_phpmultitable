<?php
include 'koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id'"));
$delete = mysqli_query($koneksi,"DELETE FROM pegawai WHERE id_pegawai='$id'");
  if($delete){
    echo "<center>Data <b>$hapus[nama]</b> Berhasil di hapus<br><a href='view.php'>Kembali ke View</a></center>";
  }else{
    echo "<center>Data $hapus[nama] gagal di hapus<br><a href='view.php'>Kembali ke View</a></center>";
  }
?>
