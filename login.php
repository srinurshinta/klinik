<?php
@session_start();
include "inc/koneksi.php";

if (isset($_POST['login'])) {
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
          $_SESSION['user'] = "admin1";
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
              <li><a href="index_user.php">Home</a></li>
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
              <li class="active"><a href="login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Login</title>
<style type="text/css">
body{
  font-family: arial;
  font-size: 14px;
  background-color: #222;
}

#utama{
  width: 300px;
  margin: 0 auto;
  margin-top: 12%;
  
}

#judul{
  padding: 15px;
  text-align: center;
  color: #fff;
  font-size: 25px;
  background-color: #69d2e7;
  border-top-right-radius: 15px;
  border-top-left-radius: 15px;
  border-bottom: 5px solid #0AA;
}

#inputan{
  background-color: #e0e4cc;
  padding: 20px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;

}

input{
  padding: 10px;
  border: 0;

}

.lg{
  width: 240px;
  cursor: pointer;
}

.btn{
  background-color: #69d2e7;
  border-radius: 5px;
  color: #fff;

}

.btn:hover{
  background-color:   #a7dbd8;
  cursor: pointer;

}
</style>
</head>

<body>

<div class="loginBox">
<div class="glass">

<div id="utama"  style="background: url(image/bc3.jpg);">
  <div id="judul">
    Login Admin
  </div>

  <div id="inputan">
  <form action="" method="post">
    <div>
      <input type="text" name="user" placeholder="Username" class="lg" />
    </div>
    <div style="margin-top: 10px;">
      <input type="password" name="pass" placeholder="Password" class="lg" />
    </div>
    <div style="margin-top: 10px;">
      <input type="submit" name="login" value="Login" class="btn" />
    </div>
  </form>
  </div>
  </div>

    <div class="container-fluid">
      <div class="row copy text-center">
        <p>All Right Reserved 2017 | <a href=""></a></p>
        
      </div>
    </div>


  </div> <!-- akhir container-fluid semua -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jqueryo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
