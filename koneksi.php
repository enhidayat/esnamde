<?php
  function buka_koneksi(){

    $host ="localhost";
    $username="root";
    $password="";
    $dbname="universitasdb";
  // membuka koneksi ke database
  $koneksi = mysqli_connect($host,$username,$password,$dbname);

  if(!$koneksi){
    echo "gagal tersambung ke db";
    die("ada error db". mysqli_connect_error());
  }else {
    //echo "berhasil konek";
  }
   return $koneksi;
    }
//   if($koneksi){
//     echo "berhasil tersmbung ke db";
//     //die("ada error db". mysqli_connect_error());
//   }else{
//     die("ada error db". mysqli_connect_error());
//   }
//
//   //mysqli_close($koneksi);
//   return $koneksi;
// }
 ?>
