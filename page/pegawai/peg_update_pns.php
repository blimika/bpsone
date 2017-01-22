<?php
if ($_POST['submit_pegawai']) {
	$pegawai_id =$_POST['pegawai_id'];
	$pegawai_nip =$_POST['pegawai_nip'];
	$pegawai_nip_lama = $_POST['pegawai_nip_lama'];
	$pegawai_gol_cpns = $_POST['pegawai_gol_cpns'];
	$pegawai_tmt_cpns = $_POST['pegawai_tmt_cpns'];
	$pegawai_gol_pns = $_POST['pegawai_gol_pns'];
	$pegawai_tmt_pns = $_POST['pegawai_tmt_pns'];
	$pegawai_jabatan = $_POST['pegawai_jabatan'];
	$pegawai_tmt_jabatan = $_POST['pegawai_tmt_jabatan'];
	$pegawai_pendidikan = $_POST['pegawai_pendidikan'];
	$waktu_lokal=date("Y-m-d H:i:s");

	$created=$_SESSION['s_no'];
	$db = new db();
	$conn = $db -> connect();
	$sql_pegawai= $conn -> query("select * from peg_pns where peg_id='$pegawai_id'");
	$cek=$sql_pegawai -> num_rows;
	if ($cek>0) {
		$sql_peg_update = $conn -> query("update peg_pns set peg_nip='$pegawai_nip', peg_nip_lama='$pegawai_nip_lama',peg_gol_cpns='$pegawai_gol_cpns',peg_tmt_cpns='$pegawai_tmt_cpns', peg_gol_pns='$pegawai_gol_pns', peg_tmt_pns='$pegawai_tmt_pns', peg_jabatan='$pegawai_jabatan', peg_tmt_jabatan='$pegawai_tmt_jabatan', peg_pendidikan='$pegawai_pendidikan' where peg_id='$pegawai_id'") or die(mysqli_error($conn));
		 //$peg_id=get_peg_id($pegawai_user_no);
		 $sql_update_peg= $conn->query("update m_pegawai set peg_diupdate_oleh='$created',peg_diupdate_waktu='$waktu_lokal' where peg_id='$pegawai_id'") or die(mysqli_error($conn));
		 if ($sql_peg_update) echo 'SUCCESS : data pegawai berhasil disimpan';
		 else echo 'ERROR : data tidak bisa disimpan';
	}
	else {
		echo 'ERROR : NIP '.$pegawai_id.' ('.$pegawai_nip.') tidak tersedia';
	}
	$conn -> close();

}
else {
	echo 'ERORR';
}

?>