<div class="container">
	<div class="row konten">
		<div class="col-xs-12 col-sm-12 text-center">
		  <div class="alert alert-danger">Anda sudah logout dari sistem</div>
<?php
	unset($_SESSION['s_id']);
	unset($_SESSION['s_no']);
	unset($_SESSION['s_passwd_md5']);
	unset($_SESSION['s_passwd_ori']);
	unset($_SESSION['s_nama']);
	unset($_SESSION['s_level']);
	print "<meta http-equiv=\"refresh\" content=\"3; URL=".$url."\">";
?>
		</div>
	</div>
</div>
