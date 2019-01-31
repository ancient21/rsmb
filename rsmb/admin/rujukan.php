<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM rujukan";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=rujukan_add" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Rujukan</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Rujukan
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>No Rujukan</th>
						<th>Nama Puskemas</th>
						<th>No Kartu BPJS</th>
						<th>Kota</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$rujukanSql = "SELECT * FROM rujukan ORDER BY no_rujukan DESC LIMIT $hal, $row";
				$rujukanQry = mysql_query($rujukanSql, $server)  or die ("Query rujukan salah : ".mysql_error());
				$nomor  = 0; 
				while ($rujukan = mysql_fetch_array($rujukanQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $rujukan['no_rujukan'];?></td>
						<td><?php echo $rujukan['nama_puskes'];?></td>
						<td><?php echo $rujukan['no_kartubpjs'];?></td>
						<td><?php echo $rujukan['kota'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=rujukan_del&aksi=hapus&norujukan=<?php echo $rujukan['no_rujukan']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 

						  <a href="?menu=rujukan_edit&aksi=edit&norujukan=<?php echo $rujukan['no_rujukan']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
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
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=rujukan&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>