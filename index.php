<!DOCTYPE html>
<?php
session_start();
if( !isset($_SESSION['nama'])){


  // die('anda belum login <br> silahkan login dahulu <a href="login.php">login</a>');
}

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Menampilkan data dari Database</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="home.php">Universitas Esnamde</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br/><br/>

    <div class="judul">

      <h2>Data Mahasiswa</h2>
    </div><br>
    <?php
      if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
          if($pesan == "input"){
            echo "Data berhasil diinput";
          }elseif ($pesan == "update") {
            echo "Data berhasil diupdate";
          }elseif ($pesan == "hapus") {
            echo "Data berhasil dihapus";
          }
      }
    ?>
    <br><br>
    <a href="biodata.php" class="tombol">+ Tambah Data</a>
    

    <form class="cari" action="search.php" method="post" >
      <label for="">Cari</label> <input type="text" name="nama" placeholder="nama mahasiswa">
    </form>

    <h3>Data Mahasiswa</h3>
    <table border=1 class="table">
      <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Agama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>

      <?php

          include "koneksi.php";
          $con = buka_koneksi();

          $tampil = "SELECT * FROM mahasiswa";
          $result = mysqli_query($con,$tampil); //$con->query($tampil);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

                  echo "<tr>";
                          echo "<td>". $row['npm']."</td>";
                          echo "<td>".$row['nama']."</td>";
                          echo "<td>".$row['gender']."</td>";
                          echo "<td>".date("d-m-Y",strtotime($row['tgl_lahir']))."</td>";
                          echo "<td>".$row['tempat_lahir']."</td>";
                          echo "<td>". $row['agama']."</td>";
                          echo "<td>".$row['jurusan']."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['telepon']."</td>";
                          echo "<td>".$row['alamat']."</td>";
                          echo "<td>";
        ?>
                        <a href='edit.php?npm=<?php echo $row['npm'];?>'>Edit</a> |
                        <a href='hapus.php?npm=<?php echo $row['npm'];?>'>Hapus</a>

        <?php
                          echo "</td>";
                          echo  "</tr>";

              }
                echo "<tr>
                        <td colspan='11'>
                          <h2 align='center'>Jumlah record = 999</h2>
                        </td>
                      </tr>";
          }
          else{
                  echo "0 results";
          }
          // menghitung jumlah baris pada database
          $sql="SELECT * FROM mahasiswa";

          if ($result=mysqli_query($con,$sql))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          //printf("Result set has %d rows.\n",$rowcount);
          // Free result set
        //  mysqli_free_result($result);

          echo "jumlah record dalam database ada ".$rowcount;
            echo "<br/><br/>";
          }
        ?>
    </table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boostrap/js/bootstrap.min.js"></script>
  </body>
</html>
