<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simpan Biodata</title>
  </head>
  <body>
    <?php

      if(isset($_POST['simpan'])){
        //membuka koneksi
        require_once "koneksi.php";
        
        header('Location: index.php?pesan=input');


        //set variable
        $npm= $_POST['npm'];
        $nama= $_POST['nama'];
        $gender= $_POST['gender'];
        $tempat_lahir= $_POST['tempat_lahir'];
        $tanggal_lahir= $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $telepon = $_POST['phone'];
        $alamat= $_POST['alamat'];

        //TODO cetak ke layar
        echo "NPM : $npm ";
        echo "Nama : $nama ";
        echo "Jenis Kelamin : $gender ";
        echo "TTL : $tempat_lahir,$tanggal_lahir ";
        echo "agama : $agama ";
        echo "jurusan : $jurusan ";
        echo "email : $email ";
        echo "phone : $telepon ";
        echo "Alamat : $alamat ";

        //TODO membuka koneksi
        $kon= buka_koneksi();

        //TODO insert ke db menggunakan msqli
        $sql = "INSERT INTO mahasiswa
        VALUES('$npm','$nama','$gender','$tempat_lahir','$tanggal_lahir','$agama','$jurusan','$email','$telepon','$alamat')";

        if (mysqli_query($kon,$sql)) {
          echo "alhamdulillah berhasil menyimpan";

        }else {
          echo "Error: ".$sql. "<br/>".mysqli_error($kon);
        }
        mysqli_close($kon);
      }

     ?>
  </body>
</html>
