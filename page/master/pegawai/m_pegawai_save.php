<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_pegawai']) {
	$pegawai_user_no =$_POST['pegawai_user_no'];
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
	$sql_pegawai= $conn -> query("select * from m_pegawai where peg_nik='$pegawai_nik'");
	$cek=$sql_pegawai -> num_rows;
	if ($cek>0) {
		echo 'ERROR : NIK '.$pegawai_nik.' ('.$pegawai_nama.') sudah tersedia';
	}
	else {
		 $sql_unit_save = $conn -> query("insert into m_pegawai(peg_nik, peg_user_no, peg_nama, peg_panggilan, peg_agama, peg_jk, peg_tempat_lahir, peg_tgl_lahir, peg_dibuat_oleh, peg_dibuat_waktu, peg_status_peg, peg_status,peg_kawin,peg_unitkode,peg_jenis) values('$pegawai_nik','$pegawai_user_no', '$pegawai_nama','$pegawai_nama_panggilan','$pegawai_agama','$pegawai_jk','$pegawai_tempat_lahir','$pegawai_tgl_lahir', '$created', '$waktu_lokal', '$pegawai_status_pegawai','$pegawai_status','$pegawai_kawin','$pegawai_unitkode','$tipe_unit')") or die(mysqli_error($conn));
		 $peg_id=get_peg_id($pegawai_user_no);
		 $sql_update_users= $conn->query("update users set user_peg_id='$peg_id' where user_no='$pegawai_user_no'");
		 if ($sql_unit_save) echo 'SUCCESS : data pegawai berhasil disimpan';
		 else echo 'ERROR : data tidak bisa disimpan';
	}
	$conn -> close();

}
else {
	echo 'ERORR';
}

?>
</div>
