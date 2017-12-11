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
    <title>Halaman Utama Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid">

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

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>     Home <span class="sr-only">(current)</span></a></li>
          <li><a href="admin/data_pasien.php"><span class="glyphicon glyphicon-user"></span>     Pasien</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Dokter <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="admin/data_dokter.php">Data Dokter</a></li>
              <li><a href="admin/data_jadwal.php">Jadwal Dokter</a></li>
            </ul>
          </li>
          <li><a href="admin/data_obat.php"><span class="glyphicon glyphicon-tint"></span>     Obat</a></li>
          <li><a href="admin/data_kunjungan.php"><span class="glyphicon glyphicon-tint"></span>     Kunjungan</a></li>
          <li><a href="admin/data_rekam_medis.php"><span class="glyphicon glyphicon-plus"></span>     Rekam Medis</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="inc/logout.php"><span class="glyphicon glyphicon-log-out"></span>     Logout</a></li>          
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 side" style="border: 1px solid silver">
        <p>Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.Website ini adalah official website dari Klinik Utama Waluya, merupakan wujud dari kesungguhan kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pelayanan.</p>
      </div>
      <div class="col-md-9">
      <div class="col-md-12"> 
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <a href="#"><h1><span class="glyphicon glyphicon-user"></span></h1>
              <h5>Registrasi Pasien</h5></a>
            </div>
          </div>    
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <a href="#"><h1><span class="glyphicon glyphicon-user"></span></h1>
              <h5>Kunjungan</h5></a>
            </div>
          </div>    
        </div>
        <div class="col-md-4 col-sm-6">
          <a href=""><div class="panel panel-default">
            <div class="panel-body text-center">
              <h1><span class="glyphicon glyphicon-plus"></span></h1>
              <h5>Rekam Medis</h5></a>
            </div>
          </div>    
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <a href=""><h1><span class="glyphicon glyphicon-file"></span></h1>
              <h5>Laporan Kunjungan</h5></a>
            </div>
          </div>    
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <a href=""><h1><span class="glyphicon glyphicon-plus"></span></h1>
              <h5>Laporan ..</h5></a>
            </div>
          </div>    
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <a href=""><h1><span class="glyphicon glyphicon-user"></span></h1>
              <h5>Laporan ..</h5></a>
            </div>
          </div>    
        </div>
      </div>   
      </div> 
      </div>
    </div>
  </div>

    <div class="container-fluid">
      <div class="row copy text-center">
        <p>All Right Reserved 2017 | <a href=""></a></p>
        
      </div>
    </div>

    
  </div><!-- container fluid semua -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jqueryo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

