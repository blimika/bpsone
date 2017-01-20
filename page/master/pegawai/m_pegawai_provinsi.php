<?php
$db = new db();
$conn = $db -> connect();
$sql_pegawai = $conn -> query("select * from m_pegawai where peg_jenis='1' order by peg_nik, peg_unitkode asc");
$cek= $sql_pegawai -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="info">
	<th>NIP</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Unit Kerja</th>
	<th colspan="3">Aksi</th>
	</tr>
	<?php
	while ($r = $sql_pegawai ->fetch_object()) {
		$nama_unit=get_nama_unit($r->peg_unitkode);
		//$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
		//$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
		echo '
		<tr>
			<td>'.$r->peg_nik.'</td>
			<td>'.$r->peg_nama.'</td>
			<td>'.$JenisKelamin[$r->peg_jk].'</td>
			<td>'.$nama_unit.'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->peg_id.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->peg_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->peg_id.'" data-confirm="Apakah data ('.$r->peg_id.') '.$r->peg_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		</tr>
		';
	}
	?>
</table>
</div>
<?php }
else {
	echo 'Data masih kosong';
}
?>
