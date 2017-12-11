<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>No. Rekam Medis</td>
				<td>:</td>
				<td><input type="text" name="no_rm" /></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="cari" value="Cari" /> <input type="submit" name="reset" value="Batal"></td>
			</tr>
		</table>
	</form>

	<?php

	$no_rm = @$_POST['no_rm'];
	$tgl_lahir = @$_POST['tgl_lahir'];

	$cari_pasien = @$_POST['cari'];

	if ($cari_pasien) {
		if ($no_rm == "" || $tgl_lahir == "") {
			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh ada yang kosong!");
			</script>
			<?php
		} else {
			mysql_query("insert into tbl_pasien values('$no_rm','$tl')") or die(mysql_error());
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