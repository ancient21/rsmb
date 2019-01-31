<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM rekam_medis";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=rekam_medis_add" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Rekam Medis</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Rekam Medis
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Lahir</th>
						<th>Nama Pasien</th>
						<th>Hasil Periksa</th>
						<th>Diagnosa</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$rekam_medisSql = "SELECT * FROM rekam_medis ORDER BY tgl_lahir DESC LIMIT $hal, $row";
				$rekam_medisQry = mysql_query($rekam_medisSql, $server)  or die ("Query rujukan salah : ".mysql_error());
				$nomor  = 0; 
				while ($rekam_medis = mysql_fetch_array($rekam_medisQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $rekam_medis['tgl_lahir'];?></td>
						<td><?php echo $rekam_medis['nama_pasien'];?></td>
						<td><?php echo $rekam_medis['hasil_periksa'];?></td>
						<td><?php echo $rekam_medis['diagnosa'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=rekam_medis_del&aksi=hapus&tgllahir=<?php echo $rekam_medis['tgl_lahir']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 

						  <a href="?menu=rekam_medis_edit&aksi=edit&tgllahir=<?php echo $rekam_medis['tgl_lahir']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="6" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=rekam_medis&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>