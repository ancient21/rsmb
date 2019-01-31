<?php
session_start();
	if($_POST["rujukan"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into rujukan set no_rujukan='".$_POST["norujukan"]."', nama_puskes='".$_POST["namapuskesmas"]."', no_kartubpjs='".$_POST["nokartubpjs"]."', umur='".$_POST["umur"]."', status='".$_POST["status"]."', kota='".$_POST["kota"]."', kode='".$_POST["kode"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=rujukan'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["rujukan"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah Rujukan</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">No Rujukan</label>
							<div class="col-lg-4">
								<input type="text" name="norujukan" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Nama Puskesmas</label>
							<div class="col-lg-4">
								<input type="text" name="namapuskesmas" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">No Kartu BPJS</label>
							<div class="col-lg-4">
								<input type="text" name="nokartubpjs" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Umur</label>
							<div class="col-lg-4">
								<input type="text" name="umur" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Status</label>
							<div class="col-lg-4">
								<input type="text" name="status" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Kota</label>
							<div class="col-lg-4">
								<input type="text" name="kota" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Kode</label>
							<div class="col-lg-4">
								<input type="text" name="kode" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="rujukan" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>