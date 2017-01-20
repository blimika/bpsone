<?php
$db = new db();
$conn = $db -> connect();
$sql_unitkerja = $conn -> query("select * from unitkerja where unit_jenis='1' order by unit_jenis,unit_kode asc");
$cek= $sql_unitkerja -> num_rows;
if ($cek > 0) {
?>
<legend>Daftar <?php echo $cek; ?> unit kerja</legend>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="danger">
	<th>Kode</th>
	<th>Nama Unit</th>
	<th>Parent</th>
	<th>Jenis</th>
	<th>Eselon</th>
	<th colspan="3">Aksi</th>
	</tr>
	<?php
	$i=1;
	while ($r = $sql_unitkerja ->fetch_object()) {
		$nama_unit=get_nama_unit($r->unit_parent);
		$es3=substr($r->unit_kode,-1,1);
		$tulis_bold='';
		if ($es3==0) { 
			$tulis_bold='tebal';
			if ($i != 1) { 
				echo '<tr class="danger"><td colspan="8"></td></tr>';
			}
		}
		echo '
		<tr>
			<td class="'.$tulis_bold.'">'.$r->unit_kode.'</td>
			<td class="'.$tulis_bold.'">'.$r->unit_nama.'</td>
			<td class="'.$tulis_bold.'">'.$nama_unit.'</td>
			<td class="'.$tulis_bold.'">'.$JenisUnit[$r->unit_jenis].'</td>
			<td class="'.$tulis_bold.'">'.$UnitEselon[$r->unit_eselon].'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->unit_kode.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->unit_kode.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->unit_kode.'" data-confirm="Apakah data ('.$r->unit_kode.') '.$r->unit_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		</tr>
		';
		$i++;
	}
	?>
</table>
</div>
<?php }
else {
	echo 'Data masih kosong';
}
?>
