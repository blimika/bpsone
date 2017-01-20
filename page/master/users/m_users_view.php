<?php
$user_no=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_user = $conn -> query("select * from users where user_no='$user_no'");
$r = $sql_user ->fetch_object();
$lastlog=tgl_convert_waktu(1,$r->user_lastlogin);
$nama_user_buat=get_idnama_users($r->user_dibuat_oleh);
$nama_user_update=get_idnama_users($r->user_diupdate_oleh);
$dibuat_tgl=tgl_convert_waktu(1,$r->user_dibuat_waktu);
$diupdate_tgl=tgl_convert_waktu(1,$r->user_diupdate_waktu);
if ($r->user_peg_id=='' and $r->user_no != 1) {
	$link_peg='<a href="'.$url.'/'.$page.'/pegawai/add/'.$r->user_no.'"><i class="fa fa-plus-square text-success" aria-hidden="true"></i></a>';
}
else {
	$link_peg='<a href="'.$url.'/'.$page.'/pegawai/view/'.$r->user_peg_id.'">view</a>';
}
?>
<legend>Detil User <strong><?php echo $r->user_nama;?></strong></legend>
<div class="alert alert-info" role="alert">
		<dl class="dl-horizontal">
			<dt>ID</dt>
			<dd><?php echo $r->user_id;?></dd>
			<dt>Password</dt>
			<dd><?php echo $r->user_passwd;?></dd>
			<dt>Nama</dt>
			<dd><?php echo $r->user_nama;?></dd>
			<dt>Email</dt>
			<dd><?php echo $r->user_email;?></dd>
			<dt>Level</dt>
			<dd><?php echo $UserLevel[$r->user_level];?></dd>
			<dt>Pegawai ID</dt>
			<dd><?php echo $link_peg;?></dd>
			<dt>Lastlogin</dt>
			<dd><?php echo $lastlog;?></dd>
			<dt>IP</dt>
			<dd><?php echo $r->user_lastip;?></dd>
			<dt>Dibuat Oleh</dt>
			<dd><?php echo $nama_user_buat;?></dd>
			<dt>Dibuat tanggal</dt>
			<dd><?php echo $dibuat_tgl;?></dd>
			<dt>Diupdate Oleh</dt>
			<dd><?php echo $nama_user_update;?></dd>
			<dt>Diupdate tanggal</dt>
			<dd><?php echo $diupdate_tgl;?></dd>
		</dl>
		<div class="row">
		<div class="container">
		<?php
		echo '
		<a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->user_no.'" class="btn btn-success"><i class="fa fa-pencil fa-lg"></i></a>
		<a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->user_no.'" class="btn btn-danger" data-confirm="Apakah data ('.$r->user_id.') '.$r->user_nama.' ini akan di hapus?"><i class="fa fa-trash fa-lg"></i></a>';
		?>
		</div>
		</div>
</div>
