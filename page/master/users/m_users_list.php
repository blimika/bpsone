<?php
$db = new db();
$conn = $db -> connect();
$sql_users = $conn -> query("select * from users order by user_no,user_id asc");
$cek= $sql_users -> num_rows;
if ($cek > 0) {
?>
<legend>Daftar <?php echo $cek;?> user</legend>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="active">
	<th>ID</th>
	<th>Nama</th>
	<th>Level</th>
	<th>Email</th>
	<th>Peg_ID</th>
	<th>Status</th>
	<th colspan="3">&nbsp;</th>
	</tr>
	<?php
	 while ($r=$sql_users->fetch_object()) {
		 	//$nama_unit=get_nama_unit($r->user_unitkerja);
			$lastlog=tgl_convert_waktu(1,$r->user_lastlogin);
			if ($r->user_peg_id=='' and $r->user_no != 1) {
				$link_peg='<a href="'.$url.'/'.$page.'/pegawai/add/'.$r->user_no.'"><i class="fa fa-plus-square text-success" aria-hidden="true"></i></a>';
			}
			else {
				$link_peg='<a href="'.$url.'/'.$page.'/pegawai/view/'.$r->user_peg_id.'">view</a>';
			}
		 echo '
		 <tr>
			<td>'.$r->user_id.'</td>
			<td>'.$r->user_nama.'</td>
			<td>'.$UserLevel[$r->user_level].'</td>
			<td>'.$r->user_email.'</td>
			<td>'.$link_peg.'</td>
			<td>'.$StatusUmum[$r->user_status].'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->user_no.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->user_no.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->user_no.'" data-confirm="Apakah data ('.$r->user_id.') '.$r->user_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		 </tr>
		 ';
	 }
	?>
</table>
</div>
<?php }
else {
	echo 'Data users masih kosong';
} ?>

