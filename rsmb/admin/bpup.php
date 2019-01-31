<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM bpup";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=bpup_add" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah BPUP</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Bukti Pembayaran Untuk Pasien
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>No BPJS</th>
						<th>No Medrec</th>
						<th>Dokter</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$bpupSql = "SELECT * FROM bpup ORDER BY no_bpjs DESC LIMIT $hal, $row";
				$bpupQry = mysql_query($bpupSql, $server)  or die ("Query rujukan salah : ".mysql_error());
				$nomor  = 0; 
				while ($bpup = mysql_fetch_array($bpupQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $bpup['no_bpjs'];?></td>
						<td><?php echo $bpup['no_medrec'];?></td>
						<td><?php echo $bpup['dokter'];?></td>
						<td><?php echo $bpup['nama'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=bpup_del&aksi=hapus&nobpjs=<?php echo $bpup['no_bpjs']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 

						  <a href="?menu=bpup_edit&aksi=edit&nobpjs=<?php echo $bpup['no_bpjs']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
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
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=bpup&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>