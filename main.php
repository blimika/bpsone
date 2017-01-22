<section class="utama">
<?php
if ($page=="kegiatan") {
	include 'page/kegiatan/m_keg.php';
}
elseif (($page=="master") && ($_SESSION['s_level'] >= 2)) {
	include 'page/master/m_master.php';
}
elseif ($page=="pegawai") {
		include 'page/pegawai/m_pegawai.php';
	}
elseif ($page=="surat") {
	include 'page/surat/m_surat.php';
}
elseif ($page=="unitkerja") {
		include 'page/unitkerja/m_unitkerja.php';
	}
elseif ($page=="kinerja") {
		include 'page/kinerja/m_kinerja.php';
	}
elseif ($page=="logout") {
	include 'page/login/logout.php';
}
elseif ($page=="users") {
	include 'page/users/m_users.php';
}
else {
	include 'page/utama/m_utama.php';
}
?>
</section>
