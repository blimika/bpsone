<?php
function get_peg_id($user_no) {
	//(user_id) kode_jabtan
	$db_peg = new db();
	$conn_peg = $db_peg->connect();
	$sql_peg = $conn_peg -> query("select * from m_pegawai where peg_user_no='".$user_no."'");
	$cek=$sql_peg->num_rows;
	if ($cek>0) {
	   $peg_id='';
	   $r=$sql_peg->fetch_object();
	   $peg_id=$r->peg_id;
	}
	else {
	 $peg_id='';
	}
	return $peg_id;
	$conn_peg->close();
	}
function get_jabatan_pegawai($pegawai_id) {
	//(user_id) kode_jabtan
	$db_users = new db();
	$conn_users = $db_users->connect();
	$sql_users = $conn_users -> query("select * from peg_pns where peg_id='".$pegawai_id."'");
	$cek=$sql_users->num_rows;
	if ($cek>0) {
	   $peg_jab='';
	   $r=$sql_users->fetch_object();
	   $peg_jab=$r->peg_jab;
	}
	else {
	 $peg_jab='';
	}
	return $peg_jab;
	$conn_users->close();
	}
function get_nip_pegawai($pegawai_id) {
	//(user_id) kode_jabtan
	$db_users = new db();
	$conn_users = $db_users->connect();
	$sql_users = $conn_users -> query("select * from peg_pns where peg_id='".$pegawai_id."'");
	$cek=$sql_users->num_rows;
	if ($cek>0) {
	   $peg_nip='';
	   $r=$sql_users->fetch_object();
	   $peg_nip=$r->peg_nip;
	}
	else {
	 $peg_nip='';
	}
	return $peg_nip;
	$conn_users->close();
	}
function get_nama_pegawai($pegawai_id) {
	//(user_id) kode_jabtan
	$db_users = new db();
	$conn_users = $db_users->connect();
	$sql_users = $conn_users -> query("select * from m_pegawai where peg_id='".$pegawai_id."'");
	$cek=$sql_users->num_rows;
	if ($cek>0) {
	   $peg_nama='';
	   $r=$sql_users->fetch_object();
	   $peg_nama=$r->peg_nama;
	}
	else {
	 $peg_nama='';
	}
	return $peg_nama;
	$conn_users->close();
}
function get_unitkode_pegawai($pegawai_id) {
	//(user_id) kode_jabtan
	$db_users = new db();
	$conn_users = $db_users->connect();
	$sql_users = $conn_users -> query("select * from m_pegawai where peg_id='".$pegawai_id."'");
	$cek=$sql_users->num_rows;
	if ($cek>0) {
	   $peg_unit='';
	   $r=$sql_users->fetch_object();
	   $peg_unit=$r->peg_unitkode;
	}
	else {
	 $peg_unit='';
	}
	return $peg_unit;
	$conn_users->close();
}
function get_pangkat_gol($kodegol) {
	$db_gol = new db();
	$conn_gol = $db_gol->connect();
	$sql_gol = $conn_gol -> query("select * from m_gol where gol_kode='".$kodegol."'");
	$cek=$sql_gol->num_rows;
	if ($cek>0) {
	   $nama_gol='';
	   $r=$sql_gol->fetch_object();
	   $nama_gol=$r->gol_jabatan .' ('. $r->gol_nama .')';
	}
	else {
	 $nama_gol='';
	}
	return $nama_gol;
	$conn_gol->close();
}
	function get_nip_atasan($unit_kode,$peg_jab) {
		//(user_id) kode_jabtan
		if ($peg_jab==1) {
				$unit_atasan=get_parent_kode($unit_kode);
		}
		else {
			$unit_atasan=$unit_kode;
		}
		$db_unit = new db();
		$conn_unit = $db_unit->connect();
		$sql_unit = $conn_unit -> query("select * from m_pegawai where pegawai_unit='$unit_atasan' and pegawai_jabatan='1'");
		$cek=$sql_unit->num_rows;

		if ($cek>0) {
		   $peg_nip='';
		   $r=$sql_unit->fetch_object();
		   $peg_nip=$r->pegawai_nip;
		}
		else {
			$sql_unit2 = $conn_unit -> query("select * from m_pegawai where pegawai_unit='$unit_atasan' and pegawai_jabatan='3'");
			$cek2=$sql_unit2->num_rows;
			if ($cek2>0) {
					$peg_nip='';
	 		   	$r2=$sql_unit2->fetch_object();
	 		    $peg_nip=$r2->pegawai_nip;
			}
			else {
				$unit_atasan2=get_parent_kode($unit_atasan);
				$sql_unit3 = $conn_unit -> query("select * from m_pegawai where pegawai_unit='$unit_atasan2' and pegawai_jabatan='1'");
				$peg_nip='';
 		   	$r3=$sql_unit3->fetch_object();
 		   	$peg_nip=$r3->pegawai_nip;
			}

		}
		return $peg_nip;
		$conn_unit->close();
		}
?>
