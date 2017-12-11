<?php
function login($user,$pass){
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
}
?>