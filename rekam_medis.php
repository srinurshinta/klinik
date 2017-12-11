<fieldset>
	<legend>Rekam Medis Pasien</legend>

	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Pasien</td>
				<td>:</td>
				<td><select name="kode_pasien" style="width: 100%">-<option>--Pilih Kode Pasien--</option>
					<?php
					$dt=mysql_query("select*from tbl_pasien");
					while($data_pasien=mysql_fetch_array($dt)){
					?>
					<option value="<?php echo $data_pasien['kode_pasien'];?>"><?php echo $data_pasien['kode_pasien']?>
					</option>
					<?php
					}
					?>
				</select>
				</td>
			</tr>

			<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><input type="text" name="nama_pasien">
			</td>
			</tr>

			<tr>
				<td>Tanggal Periksa</td>
				<td>:</td>
				<td><input type="date" name="tgl_periksa"></td>
			</tr>

			<tr>
				<td>Nama Dokter</td>
				<td>:</td>
				<td><select name="nama_dokter" style="width: 100%">-<option>--Pilih Dokter--</option>
					<?php
					$dd=mysql_query("select*from tbl_dokter");
					while($data_dokter=mysql_fetch_array($dd)){
					?>
					<option value="<?php echo $data_dokter['nama_dokter'];?>"><?php echo $data_dokter['nama_dokter']?>
					</option>
					<?php
					}
					?>
				</select>
				</td>
			</tr>

			<tr>
				<td>Keluhan</td>
				<td>:</td>
				<td><textarea name="keluhan" cols="40" rows="4">
					
				</textarea>
				</td>
			</tr>


			<tr>
				<td>Diagnosa</td>
				<td>:</td>
				<td><input type="text" name="diagnosa"></td>
			</tr>

			<tr>
				<td>Nama Penyakit</td>
				<td>:</td>
				<td><select name="penyakit">
					<option>--Pilih Penyakit--</option>
					<option value="asma">Asma</option>
					<option value="anemia">Anemia</option>
					<option value="diabetes">Diabetes Melitu</option>
					<option value="diare">Diare</option>
					<option value="ginjal">Gangguan Ginjal</option>
					<option value="mata">Gangguan Mata</option>
					<option value="hipertensi">Hipertensi</option>
					<option value="jantung">Jantung</option>
					<option value="kecelakaan">Kecelakaan</option>
					<option value="kulit">Kulit</option>
					<option value="paru-paru">Paru-paru</option>
				</select>
				</td>
			</tr>

			<tr>
				<td>Tindakan</td>
				<td>:</td>
				<td><select style="width: 57%" name="tindakan">
					<option>--Pilih Tindakan--</option>
					<option value="konsultasi">Konsultasi Dokter</option>
					<option value="laboratorium">Pemeriksaan Laboratorium</option>
					<option value="rawat_inap">Rawat Inap</option>
					<option value="rawat_jalan">Rawat Jalan</option>
				</select></td>
			</tr>

			<tr>
				<td>Obat Pasien</td>
				<td>:</td>
				<td><select name="nama_obat" style="width: 100%">-<option>--Pilih Obat--</option>
					<?php
					$do=mysql_query("select*from tbl_obat");
					while($data_obat=mysql_fetch_array($do)){
					?>
					<option value="<?php echo $data_obat['nama_obat'];?>"><?php echo $data_obat['nama_obat']?>
					</option>
					<?php
					}
					?>
				</select>
				</td>
			</tr>

			<tr>
				<td>Banyaknya</td>
				<td>:</td>
				<td><input type="text" name="banyak">
				</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah_rm" value="Tambah" /> <input type="reset" value="Batal" /></td>
			</tr>
		</table>
	</form>

	<?php
	$kode_pasien = @$_POST['kode_pasien'];
	$nama_pasien = @$_POST['nama_pasien'];
	$tgl_periksa = @$_POST['tgl_periksa'];
	$nama_dokter = @$_POST['nama_dokter'];
	$keluhan = @$_POST['keluhan'];
	$diagnosa = @$_POST['diagnosa'];
	$penyakit = @$_POST['penyakit'];
	$tindakan = @$_POST['tindakan'];
	$nama_obat = @$_POST['nama_obat'];
	$banyak = @$_POST['banyak'];


	$dt=mysql_query("select*from tbl_pasien where kode_pasien='$kode_pasien'");
	$data_pasien=mysql_fetch_array($dt);

	$dd=mysql_query("select*from tbl_dokter where nama_dokter='$nama_dokter'");
	$data_dokter=mysql_fetch_array($dd);

	$do=mysql_query("select*from tbl_obat where nama_obat='$nama_obat'");
	$data_obat=mysql_fetch_array($do);


	$rekam_medis = @$_POST['tambah_rm'];

	if($rekam_medis) {
		if($kode_pasien == "" || $nama_pasien == "" || $tgl_periksa == "" || $nama_dokter == "" || $keluhan == "" || $diagnosa == "" || $penyakit == "" || $tindakan == "" || $nama_obat == "" || $banyak == "") {
			

			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh kosong !");
			</script>
			<?php
		} else {
			mysql_query("insert into tbl_rm values('$kode_pasien', '$nama_pasien', '$tgl_periksa', '$nama_dokter', '$keluhan', '$diagnosa', '$penyakit', '$tindakan', '$nama_obat', '$banyak')") or die (mysql_error());
			?>
			<script type="text/javascript">
				alert("Tambah rekam medis berhasil !");
				window.location.href="?page=data_rm&action=lihat_rm";
			</script>
			<?php
		}
	}
	?>
</fieldset>