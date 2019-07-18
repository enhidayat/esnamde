<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

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
    <?php

      include 'koneksi.php';
      $con= buka_koneksi();
      $npm = $_GET['npm'];

      $mahasiswa  = mysqli_query($con, "SELECT * FROM mahasiswa WHERE npm='$npm'");
    //  $sql = ("SELECT * FROM mahasiswa WHERE npm='$npm'") ; //or die(mysqli_error($con))
      //$result = $con->query($sql);
      //if ($result->num_rows > 0) {
       $row        = mysqli_fetch_array($mahasiswa);
      //  while($row = $result->fetch_assoc($sql)) {
      $jurusan    = array('Teknik Informatika','Teknik Industri','DKV','Teknik Arsitektur','SASTRA INGGRIS');
      $agama    = array('ISLAM','KRISTEN','KATHOLIK','HINDU','BUDHA');
    ?>


<!-- form baru -->
    <div class="container">
    <div class="col-sm-8   col-md-offset-2">
    <div class="row">
   <div class=" ">
   <div class="col-md-9" >
    <form action="biodata_aksi_update.php" method="POST" id="form">
	<legend><h1 class=" login-title">Edit Data</h1></legend>
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" name="npm" value="<?php echo $row['npm']; ?>" id="npm" aria-describedby="tekshelp" placeholder="npm anda">
    <!-- <small id="tekshelp" class="form-text text-muted">wajib diisi.</small> -->
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" >
  </div>
	<fieldset class="form-group">
    <label for="">Jenis Kelamin</label>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="L" <?php echo $row['gender'] == "L"? "checked = checked" : "" ; ?> >Laki-laki
				&emsp;<input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="P" <?php echo $row['gender'] == "P"? "checked = checked" : "" ; ?> >Perempuan
      </label>
    </div>
  </fieldset>
	<div class="form-group">
    <label for="tanggallahir">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>" id="nama" >
  </div>
	<div class="form-group">
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" id="nama" >
  </div>

  <div class="form-group">
    <label for="agama">Agama</label>
    <select class="form-control" id="agama" name="agama">
      <?php
        foreach ($agama as $a){
            echo "<option value='$a' ";
            echo $row['agama']==$a?'selected="selected"':'';
            echo ">$a</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" name="jurusan" id="jurusan">
      <?php
        foreach ($jurusan as $j){
            echo "<option value='$j' ";
            echo $row['jurusan']==$j?'selected="selected"':'';
            echo ">$j</option>";
        }
    ?>
    </select>
  </div>
	<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
  </div>
	<div class="form-group">
    <label for="telepon">Telepone</label>
    <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $row['telepon']; ?>" >
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" rows="3"> <?php echo $row['alamat']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="simpan">Edit</button>
</form>
</div>
</div>
</div>
</div>
</div>

  </body>
</html>

