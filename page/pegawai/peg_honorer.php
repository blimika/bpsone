
<div class="col-lg-12 col-sm-12">
<legend><i class="fa fa-users" aria-hidden="true"></i> Daftar pegawai status honorer</legend>
<?php
$db = new db();
$conn = $db -> connect();
$sql_peg = $conn -> query("select * from m_pegawai where peg_status_peg='1' order by peg_nik,peg_unitkode asc");
$cek=$sql_peg->num_rows;
if ($cek>0) { ?>
	<div class="table-responsive">
	<table class="table table-hover table-striped table-condensed">
	<tr class="info">
	<th>No</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Status Pegawai</th>
	<th>Unit Kerja</th>
	<th>Status</th>
	<th>Aksi</th>
	</tr>
<?php
$no=1;
	while ($r=$sql_peg->fetch_object()) {
		$nama_unit=get_nama_unit($r->peg_unitkode);
		$parent_unit=get_parent_unit($r->peg_unitkode);
		if ($r->peg_status_peg==2) {
			$peg_nip=get_nip_pegawai($r->peg_id);
			if ($peg_nip=='') {
				$link_nip='<a class="btn btn-success btn-xs" href="'.$url.'/'.$page.'/addpns/'.$r->peg_id.'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
			}
			else {
				$link_nip=$peg_nip;
			}
		}
		else {
			$link_nip='';
		}	
		echo '
		<tr>
			<td>'.$no.'</td>
			<td><p>'.$r->peg_nama.'</p>
			<p>'.$link_nip.'</p></td>
			<td>'.$JenisKelamin[$r->peg_jk].'</td>
			<td>'.$StatusPegawai[$r->peg_status_peg].'</td>
			<td>'.$nama_unit.'<br />'.$parent_unit.'</td>
			<td>'.$StatusUmum[$r->peg_status].'</td>
			<td><a class="btn btn-success btn-sm btn-block" href="'.$url.'/'.$page.'/view/'.$r->peg_id.'"><i class="fa fa-search" aria-hidden="true"></i> view</a>
			<a class="btn btn-warning btn-sm btn-block" href="'.$url.'/'.$page.'/editpns/'.$r->peg_id.'"><i class="fa fa-pencil-square" aria-hidden="true"></i> edit</a>
			<a class="btn btn-danger btn-sm btn-block" href="'.$url.'/'.$page.'/deletepns/'.$r->peg_id.'" data-confirm="Apakah data ('.$r->peg_nik.') '.$r->peg_nama.' ini akan di hapus?"><i class="fa fa-trash-o" aria-hidden="true"></i> hapus</a>
			</td>
		</tr>
		';
		$no++;
	}
?>	
	</table>
	</div>
<?php 
}
else {
	echo 'Data pegawai masih kosong';
}
?>
</div>