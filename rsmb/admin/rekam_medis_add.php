<?php
session_start();
	if($_POST["rekam_medis"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into rekam_medis set tgl_lahir='".$_POST["tgllahir"]."', nama_pasien='".$_POST["namapasien"]."', hasil_periksa='".$_POST["hp"]."', diagnosa='".$_POST["diagnosa"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=rekam_medis'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["rekam_medis"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah Rekam Medis</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Lahir</label>
							<div class="col-lg-4">
								<input type="text" name="tgllahir" autofocus placeholder="1998-09-21" required class="form-control" />Tahun-Bulan-Tanggal
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Nama Pasien</label>
							<div class="col-lg-4">
								<input type="text" name="namapasien" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Hasil Periksa</label>
							<div class="col-lg-4">
								<input type="text" name="hp" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Diagnosa</label>
							<div class="col-lg-4">
								<input type="text" name="diagnosa" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="rekam_medis" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>