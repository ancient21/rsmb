<?php
if($_GET["aksi"] && $_GET["norujukan"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from rujukan where no_rujukan='".$_GET["norujukan"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["rujukan"]){
			include_once("../library/koneksi.php");
			mysql_query("update rujukan set no_rujukan='".$_POST["norujukan"]."', nama_puskes='".$_POST["namapuskesmas"]."', no_kartubpjs='".$_POST["nokartubpjs"]."', umur='".$_POST["umur"]."', status='".$_POST["status"]."', kota='".$_POST["kota"]."', kode='".$_POST["kode"]."' where no_rujukan='".$_GET["norujukan"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=rujukan'>";
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
							<label class="control-label col-lg-4">No Rujukan</label>
							<div class="col-lg-4">
								<input type="text" name="norujukan" value="<?php echo $editDb["no_rujukan"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Nama Puskemas</label>
							<div class="col-lg-4">
								<input type="text" name="namapuskesmas" value="<?php echo $editDb["nama_puskes"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">No Kartu BPJS</label>
							<div class="col-lg-4">
								<input type="text" name="nokartubpjs" value="<?php echo $editDb["no_kartubpjs"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Umur</label>
							<div class="col-lg-4">
								<input type="text" name="umur" value="<?php echo $editDb["umur"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Status</label>
							<div class="col-lg-4">
								<input type="text" name="status" value="<?php echo $editDb["status"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kota</label>
							<div class="col-lg-4">
								<input type="text" name="kota" value="<?php echo $editDb["kota"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode</label>
							<div class="col-lg-4">
								<input type="text" name="kode" value="<?php echo $editDb["kode"];?>" required class="form-control" />
							</div>
						</div>

						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="rujukan" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>