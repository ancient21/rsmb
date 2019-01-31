<?php
session_start();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into pasien set no_kartu='".$_POST["nmr"]."', nama='".$_POST["nama"]."', alamat='".$_POST["alamat"]."', tgl_lahir='".$_POST["tgllahir"]."', nik='".$_POST["nik"]."', faskes_t='".$_POST["faskest"]."',agama='".$_POST["agama"]."', status_perkawinan='".$_POST["statusperkawinan"]."', pekerjaan='".$_POST["pekerjaan"]."', Kewarganegaraan='".$_POST["kewarganegaraan"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=pasien'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Pendaftaran Pasien</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">No Kartu</label>
							<div class="col-lg-4">
								<input type="text" name="nmr" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" name="alamat" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Lahir</label>
							<div class="col-lg-4">
								<input type="text" name="tgllahir" autofocus placeholder="1998-09-21" required class="form-control" />Tahun-Bulan-Tanggal
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NIK</label>
							<div class="col-lg-4">
								<input type="text" name="nik" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Faskes Tingkat 1</label>
							<div class="col-lg-4">
								<input type="text" name="faskest" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Agama</label>
							<div class="col-lg-2">
								<select name="agama" class="form-control">
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Status Perkawinan</label>
							<div class="col-lg-4">
								<input type="text" name="statusperkawinan" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Pekerjaan</label>
							<div class="col-lg-4">
								<input type="text" name="pekerjaan" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kewarganegaraan</label>
							<div class="col-lg-4">
								<input type="text" name="kewarganegaraan" autofocus required class="form-control" />
							</div>
						</div>
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>