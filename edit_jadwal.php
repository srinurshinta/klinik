<fieldset>
    <legend>Edit Data Jadwal</legend>
    
    <?php
    $kd = @$_GET['kode_dokter'];
    $sql = mysql_query("select * from tbl_jadwal where kode_dokter = '$kd' ") or die (mysql_error());
    $data = mysql_fetch_array($sql);
    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>Kode Dokter</td>
                <td>:</td>
                <td><input type="text" name="kode_dokter" value="<?php echo $data['kode_dokter']; ?>" disabled="disabled"</td>
            </tr>

            <tr>
                <td>Nama Dokter</td>  
                <td>:</td>
                <td><input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter']; ?>" /></td>
            </tr>
            
            <tr>
                <td>Hari/Jam</td>
                <td>:</td>
                <td><textarea name="waktu" style="width: 80%">
                    
                </textarea></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit_jadwal_dokter" value="Edit" /> <input type="reset" value="Batal" /></td>
            </tr> 
        </table>
     </form>
     
    <?php
    $nama_dokter = @$_POST['nama_dokter'];
    $waktu = @$_POST['waktu'];
    
     $edit_jadwal = @$_POST['edit_jadwal_dokter'];
     if($edit_jadwal){
         if($nama_dokter == "" || $waktu == "") {
             ?>
             <script type="text/javascript">
             alert("Inputan tidak boleh ada yang kosong");
             </script>
             <?php
         } else {
             mysql_query("update tbl_jadwal set nama_dokter = '$nama_dokter', waktu = '$waktu' where kode_dokter = '$kd'") or die (mysql_error());
             ?>
             <script type="text/javascript">
             alert("Data pasien berhasil diedit");
             window.location.href="?page=dokter&action=lihat_jadwal_dokter";
             </script>
             <?php
         }
     }
     ?>
        
</fieldset>
     