<?php
  include 'koneksi.php';
  $koneksi = buka_koneksi();
  // menyimpan data kedalam variabel
  $npm            = $_POST['npm'];
  $nama           = $_POST['nama'];
  $gender         = $_POST['gender'];
  $tanggal_lahir  = $_POST['tgl_lahir'];
  $tempat_lahir   = $_POST['tempat_lahir'];
  $agama          = $_POST['agama'];
  $jurusan        = $_POST['jurusan'];
  $email          = $_POST['email'];
  $telepon        = $_POST['telepon'];
  $alamat         = $_POST['alamat'];
  // query SQL untuk insert data
  $query= "UPDATE mahasiswa SET

            nama='$nama',
            gender='$gender',
            tgl_lahir='$tanggal_lahir',
            tempat_lahir = '$tempat_lahir',
            agama ='$agama',
            jurusan='$jurusan',
            email = '$email',
            telepon ='$telepon',
            alamat='$alamat'
          WHERE npm='$npm'";
  mysqli_query($koneksi, $query);
  // mengalihkan ke halaman index.php
  header("location:index.php?pesan=update");
?>
