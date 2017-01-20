<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_pegawai']) {
	$pegawai_id =$_POST['pegawai_id'];
	$pegawai_nik =$_POST['pegawai_nik'];
	$pegawai_nama = $_POST['pegawai_nama'];
	$pegawai_nama_panggilan = $_POST['pegawai_nama_panggilan'];
	$pegawai_agama = $_POST['pegawai_agama'];
	$pegawai_jk = $_POST['pegawai_jk'];
	$pegawai_kawin = $_POST['pegawai_kawin'];
	$pegawai_tempat_lahir = $_POST['pegawai_tempat_lahir'];
	$pegawai_tgl_lahir = $_POST['pegawai_tgl_lahir'];
	$pegawai_status_pegawai = $_POST['pegawai_status_pegawai'];
	$pegawai_status = $_POST['pegawai_status'];
	$pegawai_unitkode = $_POST['pegawai_unitkode'];
	$tipe_unit=get_jenis_unit($pegawai_unitkode);
	$waktu_lokal=date("Y-m-d H:i:s");

	$pegawai_nama= strtoupper(strtolower($pegawai_nama));
	$pegawai_nama_panggilan= strtoupper(strtolower($pegawai_nama_panggilan));
	$pegawai_tempat_lahir= strtoupper(strtolower($pegawai_tempat_lahir));
	$created=$_SESSION['s_no'];
	$db = new db();
	$conn = $db -> connect();
	$sql_pegawai= $conn -> query("select * from m_pegawai where peg_id='$pegawai_id'");
	$cek=$sql_pegawai -> num_rows;
	if ($cek>0) {
		$sql_unit_update = $conn -> query("update m_pegawai set peg_nik='$pegawai_nik',peg_nama='$pegawai_nama', peg_panggilan='$pegawai_nama_panggilan', peg_agama='$pegawai_agama', peg_jk='$pegawai_jk', peg_tempat_lahir='$pegawai_tempat_lahir', peg_tgl_lahir='$pegawai_tgl_lahir', peg_unitkode='$pegawai_unitkode', peg_diupdate_oleh='$created', peg_diupdate_waktu='$waktu_lokal', peg_status='$pegawai_status', peg_jenis='$tipe_unit', peg_status_peg='$pegawai_status_pegawai' where peg_id='$pegawai_id'") or die(mysqli_error($conn));
		$sql_user_update= $conn ->query("update users set user_nama='$pegawai_nama', user_diupdate_oleh='$created', user_diupdate_waktu='$waktu_lokal' where user_peg_id='$pegawai_id'") or die(mysqli_error($conn));
		if ($sql_unit_update) echo 'SUCCESS : data pegawai berhasil diupdate';
		else echo 'ERROR : data tidak bisa diupdate';

	}
	else {
		echo 'ERROR : NIK '.$pegawai_nik.' ('.$pegawai_nama.') tidak tersedia';
	}
	$conn -> close();

}
else {
	echo 'ERORR';
}

?>
</div>
