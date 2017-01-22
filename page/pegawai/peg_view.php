<?php
$peg_id=$lvl3;
$db = new db();
$conn = $db -> connect();
$sql_peg = $conn -> query("select * from m_pegawai where peg_id='$peg_id'");
$cek=$sql_peg->num_rows;
if ($cek>0) {
	$r = $sql_peg ->fetch_object();
	$NamaUnit=get_nama_unit($r->peg_unitkode);
	$ParentUnit=get_parent_unit($r->peg_unitkode);
	?>
	<legend><strong>Detil pegawai <?php echo $r->peg_nama;?></strong></legend>
	<div class="row">
		<div class="col-lg-6 col-sm-6 col-xs-12">
		<div class="table-responsive">
		<table class="table table-hover table-striped table-condensed">
		<tr>
			<td>NIK</td>
			<td>: <?php echo $r->peg_nik; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>: <?php echo $r->peg_nama; ?></td>
		</tr>
		<tr>
			<td>Panggilan</td>
			<td>: <?php echo $r->peg_panggilan; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: <?php echo $JenisKelamin[$r->peg_jk]; ?></td>
		</tr>
		<tr>
			<td>Tempat/Tanggal lahir</td>
			<td>: <?php echo $r->peg_tempat_lahir .', '. tgl_convert_pendek(1,$r->peg_tgl_lahir) ; ?></td>
		</tr>
		<tr>
			<td>Status perkawinan</td>
			<td>: <?php echo $StatusKawin[$r->peg_kawin]; ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>: <?php echo $JenisAgama[$r->peg_agama]; ?></td>
		</tr>
		<tr>
			<td>Status pegawai</td>
			<td>: <?php echo $StatusPegawai[$r->peg_status_peg]; ?></td>
		</tr>
		<tr>
			<td>Unit Kerja</td>
			<td>: <?php echo $NamaUnit .' '. $ParentUnit; ?></td>
		</tr>
		<tr>
			<td>Register Tanggal</td>
			<td>: <?php echo tgl_convert_waktu(1,$r->peg_dibuat_waktu); ?></td>
		</tr>
		<tr>
			<td>Register Oleh</td>
			<td>: <?php echo get_idnama_users($r->peg_dibuat_oleh); ?></td>
		</tr>
		<tr>
			<td>Terakhir Update</td>
			<td>: <?php echo tgl_convert_waktu(1,$r->peg_diupdate_waktu); ?></td>
		</tr>
		<tr>
			<td>Diupdate Oleh</td>
			<td>: <?php echo get_idnama_users($r->peg_diupdate_oleh); ?></td>
		</tr>
		<?php
		echo '
		<tr>
			<td>&nbsp;</td>
			<td><a href="'.$url.'/'.$page.'/edit/'.$r->peg_id.'"><i class="fa fa-2x fa-pencil-square text-info" aria-hidden="true"></i></a> <a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->peg_id.'" data-confirm="Apakah data ('.$r->peg_nik.') '.$r->peg_nama.' ini akan di hapus?"><i class="fa fa-trash-o fa-2x text-danger" aria-hidden="true"></i></a></td>
		</tr>';
		?>
		</table>
		</div>
		</div>
	<?php
	$sql_peg_pns=$conn->query("select * from peg_pns where peg_id='$peg_id'");
	$cek_pns=$sql_peg_pns->num_rows;
	if ($cek_pns>0) {
		$p=$sql_peg_pns->fetch_object();
		$GolCPNS=get_pangkat_gol($p->peg_gol_cpns);
		$GolPNS=get_pangkat_gol($p->peg_gol_pns);
	?>
		<div class="col-lg-6 col-sm-6 col-xs-12">
		<div class="table-responsive">
		<table class="table table-hover table-striped table-condensed">
		<tr>
			<td>NIP</td>
			<td>: <?php echo $p->peg_nip; ?></td>
		</tr>
		<tr>
			<td>NIP BPS</td>
			<td>: <?php echo $p->peg_nip_lama; ?></td>
		</tr>
		<tr>
			<td>Gol/Pangkat CPNS</td>
			<td>: <?php echo $GolCPNS; ?></td>
		</tr>
		<tr>
			<td>TMT CPNS</td>
			<td>: <?php echo tgl_convert_pendek(1,$p->peg_tmt_cpns); ?></td>
		</tr>
		<tr>
			<td>Gol/Pangkat </td>
			<td>: <?php echo $GolPNS; ?></td>
		</tr>
		<tr>
			<td>TMT Gol/Pangkat</td>
			<td>: <?php echo tgl_convert_pendek(1,$p->peg_tmt_pns); ?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>: <?php echo $JabatanPegawai[$p->peg_jabatan] .' '. $NamaUnit .' '.$ParentUnit; ?></td>
		</tr>
		<tr>
			<td>TMT Jabatan</td>
			<td>: <?php echo tgl_convert_pendek(1,$p->peg_tmt_jabatan); ?></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>: <?php echo $JenisPendidikan[$p->peg_pendidikan]; ?></td>
		</tr>
		<?php
		echo '
		<tr>
			<td>&nbsp;</td>
			<td><a href="'.$url.'/'.$page.'/editpns/'.$r->peg_id.'"><i class="fa fa-2x fa-pencil-square text-info" aria-hidden="true"></i></a> <a href="'.$url.'/'.$page.'/'.$act.'/deletepns/'.$r->peg_id.'" data-confirm="Apakah data ('.$r->peg_nik.') '.$r->peg_nama.' ini akan di hapus?"><i class="fa fa-trash-o fa-2x text-danger" aria-hidden="true"></i></a></td>
		</tr>';
		?>
		</table>
		</div>
		</div>
		<?php }
		?>
	</div>
	
<?php }
else {
	echo 'Data pegawai tidak ditemukan';
}
?>
