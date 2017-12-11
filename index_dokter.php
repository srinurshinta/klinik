<?php
@session_start();
include "inc/koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Utama Dokter</title>
<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
	background-color:#a7dbd8;

}


#canvas{
	width: 960px;
	margin: 0 auto;
	border: 1px solid silver;

}

#header{
	font-size: 20px;
	width: 960px;
	height: 200px;
	margin-left: auto;
	margin-right: auto;
	background-color: #fff;
	color: #ccc;
	background-size: 100%  150%;

}
	

#menu{
	background-color: #69d2e7;
}

	#menu ul{
		list-style: none;
		margin: 0;
		padding: 0;
	}

	#menu ul li.utama{
		display: inline-table;
	}

	#menu ul li:hover{
		background-color: #09F;
	}
	#menu ul li a{
		display: block;
		text-decoration: none;
		line-height: 40px;
		padding: 0 10px;
		color: #fff;
	}

	.utama ul{
		display: none;
		position: absolute;
		z-index: 2;
	}

	.utama:hover ul{
		display: block;
	}

	.utama ul li{
		display: block;
		background-color: #69d2e7;
		width: 140px;
	}

#isi{
	min-height: 400px;
	padding: 20px;
	background-color: #fff;
}

#footer{
	text-align: center;
	padding: 20px;
	color: #fff;
	background-color: #09F;
	
}
</style>
</head>
<body>

<div id="canvas">

	<div id="header">
		<p style="color: #000; padding-top: 50px; padding-left: 20px; font-size: 30px;"> Klinik Utama Waluya </p>
		<p style="color: #000; padding-top: 10px;  padding-left: 20px; font-size: 20px;"> Jl. Raya Tanjungsari No. 349 Sumedang Jawa Barat </p>

	</div>

	<div id="menu">
		<ul>
			<li class="utama"><a href="?page=beranda">Beranda</a></li>
			<li class="utama"><a href="?page=pasien_dokter">Data Pasien</a></li>
			<li class="utama"><a href="?page=obat_dokter">Data Obat</a></li>
			<li class="utama"><a href="">Rekam Medis</a>
				<ul>
					<li><a href="?page=input_rm">Input Data</a></li>
					<li><a href="?page=input_rm&action=lihat_rm">Lihat Data</a></li>
				</ul>

			</li>
			<li class="utama"><a href="?page=rawat">Rawat</a></li>
			

			<li class="utama" style="float: right; background-color: #09F;"><a href="logout.php">Logout</a></li>
		</ul>
	</div>

	<div id="isi" style="background: url(image/bc2.jpg);">
	<?php
	$page = @$_GET['page'];
	$action = @$_GET['action'];
	if($page == "pasien_dokter"){
		if($action == ""){
			include "admin/data_pasien.php";
		} 

	}else if($page == "obat_dokter"){
		if($action == ""){
			include "admin/data_obat.php";
		} 

	} else if($page == "input_rm"){
		if($action == ""){
			include "rekam_medis.php";
	} else if($action == "lihat_rm"){
		include "data_rekam_medis.php";
	}
}
	?>
	</div>

	<div id="footer">
	Copyright by CV. Wijaya Rental Mobil
	</div>
</div>

</body>
</html>

