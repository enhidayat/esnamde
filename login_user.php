<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
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
    <div class="col-sm-6 col-md-4 col-md-offset-4">
    <div class="row">

    <legend><h1 class=" login-title">Sign in</h1></legend>
    <div class="account-wall">
      <div class="col-md-9" >
        <form method="post" action="" >
            <label for="username">Username</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="username" type="text" class="form-control" name="username" placeholder="username" size="30">
            </div><br>

            <label for="password">Password</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" size="30">
            </div>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>
     </div>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>

<?php

  include("koneksi.php");
  $kon =buka_koneksi();


      session_start();

    if( isset($_POST['login'])){
      $nama = $_POST['username'];
      $pass =$_POST['password'];

$query = "SELECT nama,password FROM user WHERE nama='$nama' and password='$pass'";
$result=mysqli_query($kon,$query);//$kon->query($query) or die($kon->error.__LINE__);
if($result->num_rows > 0) {
  //header("Location : index.php");

      $_SESSION['nama']=$nama;
      $_SESSION['password']=$pass;
  header("location: index_user.php");
}
else {
// echo '<h2 style="background-color:rgb(2, 183, 208); text-align:center;">username/password
// yang anda masukkan salah. Silahkan ulang kembali</h2>';

echo '<div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert">×</a>
        <strong>Note:</strong> username/password
        yang anda masukkan salah. Silahkan ulang kembaliks.
    </div>';
}
}
 ?>
