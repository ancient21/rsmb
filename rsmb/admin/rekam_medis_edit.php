<?php
if($_GET["aksi"] && $_GET["tgllahir"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from rekam_medis where tgl_lahir='".$_GET["tgllahir"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["rekam_medis"]){
			include_once("../library/koneksi.php");
			mysql_query("update rekam_medis set tgl_lahir='".$_POST["tgllahir"]."', nama_pasien='".$_POST["namapasien"]."', hasil_periksa='".$_POST["hp"]."', diagnosa='".$_POST["diagnosa"]."' where tgl_lahir='".$_GET["tgllahir"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=rekam_medis'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengedit data!!</b>
			</div><center>";
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>RSMB - Edit</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Lahir</label>
							<div class="col-lg-4">
								<input type="text" name="tgllahir" value="<?php echo $editDb["tgl_lahir"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Nama Pasien</label>
							<div class="col-lg-4">
								<input type="text" name="namapasien" value="<?php echo $editDb["nama_pasien"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Hasil Periksa</label>
							<div class="col-lg-4">
								<input type="text" name="hp" value="<?php echo $editDb["hasil_periksa"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Diagnosa</label>
							<div class="col-lg-4">
								<input type="text" name="diagnosa" value="<?php echo $editDb["diagnosa"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="rekam_medis" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>