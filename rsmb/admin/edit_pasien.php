<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from pasien where no_kartu='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("update pasien set no_kartu='".$_POST["nmr"]."', nama='".$_POST["nama"]."', alamat='".$_POST["alamat"]."', tgl_lahir='".$_POST["tgllahir"]."', nik='".$_POST["nik"]."', faskes_t='".$_POST["faskest"]."', status_perkawinan='".$_POST["statusperkawinan"]."',agama='".$_POST["agama"]."', pekerjaan='".$_POST["pekerjaan"]."', Kewarganegaraan='".$_POST["kewarganegaraan"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=pasien'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengedit data!!</b>
			</div><center>";
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Pendaftaran - Edit</b>
		
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">No Kartu</label>
							<div class="col-lg-4">
								<input type="text" name="nmr" value="<?php echo $editDb["no_kartu"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["nama"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" name="alamat" value="<?php echo $editDb["alamat"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Lahir</label>
							<div class="col-lg-4">
								<input type="text" name="tgllahir" placeholder="1998-09-21" value="<?php echo $editDb["tgl_lahir"];?>" required class="form-control" />Tahun-Bulan-Tanggal
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">NIK</label>
							<div class="col-lg-4">
								<input type="text" name="nik" value="<?php echo $editDb["nik"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Faskes Tingkat 1</label>
							<div class="col-lg-4">
								<input type="text" name="faskest" value="<?php echo $editDb["faskes_t"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Agama</label>
							<div class="col-lg-2">
								<select name="agama" value="<?php echo $editDb["faskes_t"];?>" required class="form-control">
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
								</select>
							</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Status Perkawinan</label>
							<div class="col-lg-4">
								<input type="text" name="statusperkawinan" value="<?php echo $editDb["status_perkawinan"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Pekerjaan</label>
							<div class="col-lg-4">
								<input type="text" name="pekerjaan" value="<?php echo $editDb["pekerjaan"];?>" required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Kewarganegaraan</label>
							<div class="col-lg-4">
								<input type="text" name="kewarganegaraan" value="<?php echo $editDb["kewarganegaraan"];?>" required class="form-control" />
							</div>
						</div>


						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>