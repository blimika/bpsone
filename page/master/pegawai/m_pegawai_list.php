<?php
$db = new db();
$conn = $db -> connect();
$sql_pegawai = $conn -> query("select * from m_pegawai order by peg_id asc");
$cek= $sql_pegawai -> num_rows;
if ($cek > 0) {
?>
<legend>Daftar pegawai</legend>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="info">
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Status Kawin</th>
	<th>Status Pegawai</th>
	<th>Unit Kerja</th>
	<th>User ID</th>
	<th>Status</th>
	<th colspan="3">Aksi</th>
	</tr>
	<?php
	while ($r = $sql_pegawai ->fetch_object()) {
		$nama_unit=get_nama_unit($r->peg_unitkode);
		$parent_unit=get_parent_unit($r->peg_unitkode);
		//$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
		//$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
		if ($r->peg_user_no=='') {
				$link_user='<a href="'.$url.'/'.$page.'/users/view/'.$r->peg_user_no.'"><i class="fa fa-plus-square text-success" aria-hidden="true"></i></a>';
			}
			else {
				$link_user='<a href="'.$url.'/'.$page.'/users/view/'.$r->peg_user_no.'">view</a>';
			}
		echo '
		<tr>
			<td>'.$r->peg_nama.'</td>
			<td>'.$JenisKelamin[$r->peg_jk].'</td>
			<td>'.$StatusKawin[$r->peg_kawin].'</td>
			<td>'.$StatusPegawai[$r->peg_status_peg].'</td>
			<td>'.$nama_unit.'<br />'.$parent_unit.'</td>
			<td>'.$link_user.'</td>
			<td>'.$StatusUmum[$r->peg_status].'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->peg_id.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->peg_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->peg_id.'" data-confirm="Apakah data ('.$r->peg_nik.') '.$r->peg_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
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
