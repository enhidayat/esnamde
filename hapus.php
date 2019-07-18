<?php
  include 'koneksi.php';
  $koneksi = buka_koneksi();

  $npm = $_GET['npm'];
  mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE npm='$npm'") or die(mysqli_connect_error($koneksi));

  header("Location:index.php?pesan=hapus");


 ?>
