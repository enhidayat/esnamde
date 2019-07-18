<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Universitas Esnamde</title>

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
                        <a href="#about">Beranda</a>
                    </li>
                    <li>
                        <a href="#services">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#contact">Kontak</a>
                    </li>
                    <li>
                        <a href="#login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="container">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide  " data-ride="carousel"  >
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="bootstrap/img/BANNER-rev.jpg" alt="unindra" width="100%" >
              <div class="carousel-caption">
                <h1>UNIVERSITAS Esnamde</h1>
                <h3>P e d u l i . K r e a t i f . M a n d i r i . I n o v a t i f</h3>
                <h5>Hakikat pendidikan adalah mengentaskan kemiskinan dan kebodohan</h5>
              </div>
            </div>

            <div class="item">
              <img src="bootstrap/img/banner-rev22.jpg" alt="unindra" width="100%" >
              <div class="carousel-caption">
                <h1>UNIVERSITAS Esnamde</h1>
                <h3>P e d u l i . K r e a t i f . M a n d i r i . I n o v a t i f</h3>
                <h6>Hakikat pendidikan adalah mengentaskan kemiskinan dan kebodohan</h6>
              </div>
            </div>

            <div class="item">
              <img src="bootstrap/img/banner-rev33.jpg" alt="unindra" width="100%" >
              <div class="carousel-caption">
                <h1>UNIVERSITAS Esnamde</h1>
                <h3>P e d u l i . K r e a t i f . M a n d i r i . I n o v a t i f</h3>
                <h6>Hakikat pendidikan adalah mengentaskan kemiskinan dan kebodohan</h6>
              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

    <a  name="login"></a>


        <div class="intro-header" >
            <div class="container" style="background-color:rgb(0, 46, 54);">

                <div class="row">
                    <div class="col-lg-12">
                            <hr class="intro-divider" style="background-color:black;">
                            <ul class="list-inline ">
                                <li>
                                    <a href="login.php" class="btn btn-primary btn-lg"> <span class="network-name">Login admin</span></a>
                                </li>
                                <li>
                                    <a href="login_user.php" class="btn btn-success btn-lg"> <span class="network-name">Login User</span></a>
                                </li>

                            </ul>
                    </div>
                </div>

            </div>
            <!-- /.container -->

         </div>

    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Fasilitas yang mumpuni</h2>
                    <p class="lead">Dengan didukung fasilitas yang lengkap dan berkuallitas
                       disetiap bidang akademis membuat mahasiswa dapat belajar dengan maksimal</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="bootstrap/img/labcomp.jpg" alt="fasilitas">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Pengajar yang Kompeten & Kurikulum yang terupdate</h2>
                    <p class="lead">Universitas Esnamde selalu menggandeng para tenaga pengajar yang berkompeten dan berpengalaman serta menggunakan sistem kurikulum terupdate dan sesuai dengan kebutuhan dunia kerja
                       sehingga dapat mencetak lulusan yang berkualitas dan unggul dikalangan masyarakat dan dunia kerja</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="bootstrap/img/pembimbing.jpg" alt="pembimbing">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Mewujudkan cita-cita berbagai kalangan.</h2>
                    <p class="lead">Universitas Esnamde memiliki manajemen waktu pengajaran yang fleksibel. tersedianya kuliah malam membuat para pekerja juga dapat
                      mengikuti kuliah.biaya perkuliahan juga lebih ekonomis. Sehingga dapat merangkul masyarakat yang berpenghasilan rendah untuk meraih cita cita.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="bootstrap/img/sarjana.jpg" alt="sarjana">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Temukan kami di:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-info btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                        <li>
                            <a href="https://facebook.com/" class="btn btn-primary btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>



    <!-- /.banner -->

    <!-- Footer -->
    <footer style="background-color:black; text-align:center;" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Beranda</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Tentang Kami</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">KOntak</a>
                        </li>
                        <li>
                            <a href="#login">Login</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; wwww.esnamde.ac.id 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
