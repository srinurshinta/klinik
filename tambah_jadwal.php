<fieldset>
	<legend>Tambah Jadwal Dokter</legend>

	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Dokter</td>
				<td>:</td>
				<td><select name="kode_dokter" style="width: 100%">-<option>--Pilih Kode Dokter--</option>
					<?php
					$kd=mysql_query("select*from tbl_dokter");
					while($dt_dokter=mysql_fetch_array($kd)){
					?>
					<option value="<?php echo $dt_dokter['kode_dokter'];?>"><?php echo $dt_dokter['kode_dokter']?>
					</option>
					<?php
					}
					?>
				</select></td>
			</tr>

			<tr>
				<td>Nama Dokter</td>
				<td>:</td>
				<td><input type="text" name="nama_dokter"></td>
			</tr>

			<tr>
				<td>Hari/Jam</td>
				<td>:</td>
				<td><textarea name="waktu" style="width: 80%"></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah_jadwal_dokter" value="Tambah" /> <input type="reset" value="Batal" /></td>
			</tr>

		</table>
	</form>

	<?php
	$kode_dokter = @$_POST['kode_dokter'];
	$nama_dokter = @$_POST['nama_dokter'];
	$waktu = @$_POST['waktu'];

	$kd=mysql_query("select*from tbl_dokter where kode_dokter = '$kode_dokter'");
	$dt_dokter=mysql_fetch_array($kd);

	$tambah_jadwal = @$_POST['tambah_jadwal_dokter'];

	if($tambah_jadwal) {
		if($kode_dokter == "" || $nama_dokter == "" || $waktu == "") {
			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh kosong !");
			</script>
			<?php
		} else {
			mysql_query("insert into tbl_jadwal values('$kode_dokter', '$nama_dokter', '$waktu')") or die (mysql_error());
			?>
			<script type="text/javascript">
				alert("Tambah data jadwal berhasil !");
				window.location.href="?page=dokter&action=lihat_jadwal_dokter";
			</script>
			<?php
		}
	}
	?>
</fieldset>