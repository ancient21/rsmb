<?php
session_start();
	if($_POST["bpup"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into bpup set no_bpjs='".$_POST["nobpjs"]."', no_medrec='".$_POST["nomedrec"]."', dokter='".$_POST["dokter"]."', nama='".$_POST["nama"]."', penjamin='".$_POST["penjamin"]."', tgl_reg='".$_POST["tglreg"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=rujukan'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["bpup"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah BPUP</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">No BPJS</label>
							<div class="col-lg-4">
								<input type="text" name="nobpjs" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">No Medrec</label>
							<div class="col-lg-4">
								<input type="text" name="nomedrec" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Dokter</label>
							<div class="col-lg-4">
								<input type="text" name="dokter" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Penjamin</label>
							<div class="col-lg-4">
								<input type="text" name="penjamin" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Registrasi</label>
							<div class="col-lg-4">
								<input type="text" name="tglreg" placeholder="1998-05-09" autofocus required class="form-control" />Tahun-Bulan-Tanggal
							</div>
						</div>

						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="bpup" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>