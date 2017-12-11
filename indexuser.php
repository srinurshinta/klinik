<?php 
@session_start();
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Halaman Utama User</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Klinik Utama Waluya</a>
          </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="pages/profil.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="pages/tentang_kami.html">Tentang Kami</a></li>
                  <li><a href="pages/visi_misi.html">Visi dan Misi</a></li>
                </ul>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pelayanan<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="pages/jam_buka.html">Jam Buka</a></li>
                  <li><a href="pages/jadwal_dokter.html">Jadwal Dokter</a></li>
                  <li><a href="pages/sarana.html">Sarana dan Prasarana</a></li>
                  <li><a href="pages/ket_berobat.html">Ketentuan Berobat</a></li>
                 </ul> 
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fasilitas<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Jam Buka</a></li>
                  <li><a href="#">Jadwal Dokter</a></li>
                  <li><a href="#">Sarana dan Prasarana</a></li>
                  <li><a href="#">Ketentuan Berobat</a></li>                
                </ul>
              <li><a href="pages/reg_online.html">Registrasi Online</a></li> 
              <li><a href="pages/hubungi_kami.html">Hubungi Kami</a></li> 
              </li>
              <li><a href="login_.php"><span class="glyphicon glyphicon-log-in"></span>     Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


        <div class="container test">
          <div class="row">
            <div class="col-md-12 col-xs-12 bor">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="image/1.jpg" alt="..." class="img-responsive" style="width=100%; height: 300px;">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="image/3.jpg" alt="..." class="img-responsive" style="width=100%; height: 300px;">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                ...
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>   
            </div> 
          </div>

          <div class="container-fluid atas" >
            <div class="container">
              <div class="row">
                <div class="col-md-6 text-atas">
                  <h2>Selamat Datang <br> Di Klinik Utama Waluya</h2>
                  <p>Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.</p>
                  
                </div>

                <div class="col-md-6">
                  <img src="image/beranda.jpg" alt="..." class="img-responsive" style="width=100%; position: center">       
                  
                  
                </div>  
              </div>
            </div>
          </div> <!-- akhir class atas -->

          <div class="container">
            <div class="row">
              <div class="col-sm-12 judul text-center">
                <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> About Us</h1>  
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <img src="image/Banner.jpg" class="img-responsive" style="width=100%;">
              
            </div>
            <div class="col-md-8 about">
              <p>Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.</p> 
            </div>
          </div> <!-- akhir dari container -->

          <div class="container-fluid myskilss">
            <div class="col-sm-12 judul text-center">
              <h1>My Skilss</h1>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
            </div><!-- skilss pertama -->
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h1> 
                    <h2>Skill 1</h2>
                    <p>90</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


    <div class="container-fluid">
      <div class="row copyright text-center">
        <p>All Right Reserved 2017 | <a href=""></a></p>
        
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jqueryo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>