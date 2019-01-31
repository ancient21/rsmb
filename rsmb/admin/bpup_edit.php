<?php
if($_GET["aksi"] && $_GET["nobpjs"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from bpup where no_bpjs='".$_GET["nobpjs"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["bpup"]){
			include_once("../library/koneksi.php");
			mysql_query("update bpup set no_bpjs='".$_POST["nobpjs"]."', no_medrec='".$_POST["nomedrec"]."', dokter='".$_POST["dokter"]."', nama='".$_POST["nama"]."', penjamin='".$_POST["penjamin"]."', tgl_reg='".$_POST["tglreg"]."' where no_bpjs='".$_GET["nobpjs"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=bpup'>";
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
							<label class="control-label col-lg-4">No BPJS</label>
							<div class="col-lg-4">
								<input type="text" name="nobpjs" value="<?php echo $editDb["no_bpjs"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">No Medrec</label>
							<div class="col-lg-4">
								<input type="text" name="nomedrec" value="<?php echo $editDb["no_medrec"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Dokter</label>
							<div class="col-lg-4">
								<input type="text" name="dokter" value="<?php echo $editDb["dokter"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["nama"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Penjamin</label>
							<div class="col-lg-4">
								<input type="text" name="penjamin" value="<?php echo $editDb["penjamin"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Registrasi</label>
							<div class="col-lg-4">
								<input type="text" name="tglreg" value="<?php echo $editDb["tgl_reg"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="bpup" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>