<?php
  $peg_id=$lvl3;
	$db = new db();
	$conn = $db -> connect();
  $sql_peg=$conn-> query("select * from peg_pns where peg_id='$peg_id'");
  $cek_peg=$sql_peg -> num_rows;
  if ($cek_peg>0) {
    $r=$sql_peg->fetch_object();
    $peg_nama=get_nama_pegawai($peg_id);
    $peg_nip=$r->peg_nip;
    //$peg_user_no=$r->peg_user_no;
    $sql_del_peg=$conn->query("delete from peg_pns where peg_id='$peg_id'");
    //$sql_update_user=$conn->query("update users set user_peg_id=NULL where user_no='$peg_user_no'");
    if ($sql_del_peg) echo 'BERHASIL : data pegawai ('.$peg_nip.') '.$peg_nama.' sudah dihapus';
    else echo 'ERROR : tidak bisa menghapus data pegawai';
  }
  else {
    echo 'ERROR : data pegawai tidak tersedia';
  }

  $conn -> close();
?>
