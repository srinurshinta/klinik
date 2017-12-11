<?php
session_start();
include "inc/koneksi.php";

if(isset($_POST['login'])){
  $user = @$_POST['user'];
  $pass = @$_POST['pass'];
  
    if($user == "" || $pass == ""){
      ?> <script type="text/javascript">alert("Username / password tidak boleh kosong");</script> <?php
        }else {
          $sql = mysql_query("select * from tb_login where user = '$user' and pass = '$pass'") or die (mysql_error());
          $sql2 = mysql_query("select * from tb_login where user = '$user' and pass = '$pass'") or die (mysql_error());
          
      $data = mysql_fetch_array($sql);
      $data2 = mysql_fetch_array($sql2);
      $cek = mysql_num_rows($sql);
      $cek2 = mysql_num_rows($sql2);
      if($cek >= 1){
          $_SESSION['user'] = "admin";
          $_SESSION['uname'] = $data['user'];
          header("location: index.php");
      }else if($cek2 >= 1){
        $_SESSION['user'] = "dokter";
        $_SESSION['uname'] = $data2['user'];
        header("location: indexdokter.php");
      }else{
        echo "Login Gagal!";
      }
        }
}
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
              <li><a href="indexuser.php">Home</a></li>
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
              <li class="active"><a href="login_.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="page-header"><h3 align="center">Silahkan Login</h3></div>

      <form class="form-horizontal" action="" method="POST" role="form">

      <div class="form-group">
        <label for="user" class="control-label col-sm-3">Username</label>
        <div class="col-sm-8">
          <input type="text" name="user" id="user" class="form-control" placeholder="Username">
        </div>  
      </div>

      <div class="form-group">
        <label for="pass" class="control-label col-sm-3">Password</label>
        <div class="col-sm-8">
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
        </div>  
      </div> 

      <div class="form-group">
      <label for="btn" class="control-label col-sm-3"></label>
      <div class="col-sm-8">
        <input type="submit" name="login" id="login" class="btn btn-info " value="Login" />
      </div>  
      </div>
      </form>


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