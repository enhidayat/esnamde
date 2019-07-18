<html>
	<title>Tambah Data</title>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="container">
		<div class="col-sm-8   col-md-offset-2">
		<div class="row">


		<div class=" ">
			<div class="col-md-9" >

		<form action="biodata_aksi.php" method="POST" id="form">
	<legend><h1 class=" login-title">Tambah Data</h1></legend>
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" name="npm" id="npm" aria-describedby="tekshelp" placeholder="npm anda">
    <!-- <small id="tekshelp" class="form-text text-muted">wajib diisi.</small> -->
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama anda">
  </div>
	<fieldset class="form-group">
    <label for="">Jenis Kelamin</label>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="L" checked>Laki-laki
				&emsp;<input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="P">Perempuan
      </label>
    </div>
  </fieldset>
	<div class="form-group">
    <label for="tanggallahir">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir" id="nama" placeholder="Tanggal lahir">
  </div>
	<div class="form-group">
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir" id="nama" placeholder="Tempat lahir">
  </div>

  <div class="form-group">
    <label for="agama">Agama</label>
    <select class="form-control" id="agama" name="agama">
			<option value="ISLAM">ISLAM</option>
			<option value="KRISTEN">KRISTEN</option>
			<option value="KATHOLIK">KATHOLIK</option>
			<option value="HINDU">HINDU</option>
			<option value="BUDHA">BUDHA</option>
    </select>
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" name="jurusan" id="jurusan">
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Teknik Industri">Teknik Industri</option>
			<option value="DKV">DKV</option>
			<option value="Teknik Arsitektur">Teknik Arsitektur</option>
			<option value="Sastra Inggris">Sastra Inggris</option>
    </select>
  </div>
	<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="email">
  </div>
	<div class="form-group">
    <label for="phone">Telepone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepone">
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div> -->


  <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
</form>
</div>
</div>
</div>
</div>
</div>

	</body>
</html>
