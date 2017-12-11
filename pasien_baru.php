
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>no_rm</td>
				<td>:</td>
				<td><input type="text" name="kode_registrasi" /></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama_pasien" /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="gender" value="male" checked>Laki-laki /> <input type="radio" name="gender" value="female">Perempuan></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir" /></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" /></td>
			</tr>
			<tr>
			<tr>
				<td>No. Handphone</td>
				<td>:</td>
				<td><input type="text" name="no_hp" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" /></td>
			</tr>
			<tr>
				<td>Tanggal Kunjung</td>
				<td>:</td>
				<td><input type="date" name="tgl_kunjung" /></td>
			</tr>
			<tr>
				<td>Pilih Jam Kunjung</td>
				<td>:</td>
				<td><input type="text" name="jam_kunjung" /></td>
			</tr>

				<td></td>
				<td></td>
				<td><input type="submit" name="lanjut" value="Simpan" /> <input type="submit" name="reset" value="Batal"></td>
			</tr>
		</table>
	</form>

	<?php

	$no_rm = @$_POST['kode_registrasi'];
	$nama_pasien = @$_POST['nama_pasien'];
	$tempat_lahir = @$_POST['tempat_lahir'];
	$tgl_lahir = @$_POST['tgl_lahir'];
	$no_hp = @$_POST['no_hp'];
	$alamat = @$_POST['alamat'];
	$tgl_kunjung = @$_POST['tgl_kunjung'];
	$jam_kunjung = @$_POST['jam_kunjung'];
	$jk = @$_POST['jk'];

	$selanjutnya = @$_POST['lanjut'];

	if ($selanjutnya) {
		if ($no_rm == "" | $nama_pasien == "" || $tempat_lahir == "" || $tgl_lahir == "" || $no_hp = "" || $alamat = "" || $jk
			= "" || $tgl_kunjung == "" || $jam_kunjung = "") {
			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh ada yang kosong!");
			</script>
			<?php
		} else {
			mysql_query("insert into tbl_pasien values('$no_rm' ,'$nama_pasien', '$tempat_lahir' ,'$tgl_lahir' , '$no_hp' , '$alamat' , '$jk' ,'$tgl_kunjung' , 'jam_kunjung')") or die(mysql_error());
			?>
			<script type="text/javascript">
			alert("Registrasi berhasil!");
			window.location.href="?page=#";
			</script>
			<?php
		}
	}

	?>
</fieldset>