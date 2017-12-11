<?php
@session_start();
include "inc/koneksi.php";

if (!isset($_SESSION['admin'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama Admin</title>
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
			<li class="utama"><a href="">Data Pasien</a>
				<ul>
					<li><a href="?page=pasien">Input Data</a></li>
					<li><a href="?page=pasien&action=lihat_data_pasien">Lihat Data</a></li>
				</ul>
			</li>

			<li class="utama"><a href="">Data Dokter</a>
				<ul>
					<li><a href="?page=dokter">Input Data</a></li>
					<li><a href="?page=dokter&action=lihat_data_dokter">Lihat Data</a></li>
				</ul>
			</li>

			<li class="utama"><a href="">Data Obat</a>
				<ul>
					<li><a href="?page=obat">Input Data</a></li>
					<li><a href="?page=obat&action=lihat_data_obat">Lihat Data</a></li>
				</ul>
			</li>

			<li class="utama"><a href="?page=data_rm">Data Rekam Medis</a></li>

			<li class="utama"><a href="?page=kunjungan">Kunjungan</a></li>

			<li class="utama" style="float: right; background-color: #09F;"><a href="inc/logout.php">Logout</a></li>
		</ul>
	</div>

	<div id="isi" style="background: url(image/bc2.jpg);">
	<?php
	$page = @$_GET['page'];
	$action = @$_GET['action'];
	if($page == "pasien"){
		if($action == ""){
			include "admin/tambah_pasien.php";
		} else if($action == "lihat_data_pasien") {
			include "admin/data_pasien.php";
		} else if($action == "edit"){
			include "admin/Edit_pasien.php";
		} else if($action == "hapus"){
			include "admin/hapus_pasien.php";	
		} 

	}else if($page == "dokter"){
		if($action == ""){
			include "admin/tambah_dokter.php";
		} else if($action == "lihat_data_dokter"){
			include "admin/data_dokter.php";
		} else if($action == "edit_dokter"){
			include "admin/edit_dokter.php";
		} else if($action == "hapus_dokter"){
			include "admin/hapus_dokter.php";	
		} 


	}else if($page == "obat"){
		if($action == ""){
			include "admin/tambah_obat.php";
		} else if($action == "lihat_data_obat"){
			include "admin/data_obat.php";
		} else if($action == "edit_obat"){
			include "admin/edit_obat.php";
		} else if($action == "hapus_obat"){
			include "admin/hapus_obat.php";	
		} 

	} else if ($page == "data_rm") {
		if ($action == "") {
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

<?php
} else{
	header("location: login.php");
}
?>