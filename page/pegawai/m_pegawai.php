<div class="container">
	<div class="row konten">
		<div class="col-lg-10 col-sm-10">
					<?php
				if ($act=='pokok') {
					include 'page/pegawai/peg_pokok.php';
				}
				elseif ($act=='add') {
					include 'page/pegawai/peg_form.php';	
				}
				elseif ($act=='savepeg') {
					include 'page/pegawai/peg_savepeg.php';	
				}
				elseif ($act=='pns') {
					include 'page/pegawai/peg_pns.php';	
				}
				elseif ($act=='honorer') {
					include 'page/pegawai/peg_honorer.php';	
				}
				elseif ($act=='edit') {
					include 'page/pegawai/peg_form_edit.php';
				}
				elseif ($act=='update') {
					include 'page/pegawai/peg_update.php';
				}
				elseif ($act=='editpns') {
					include 'page/pegawai/peg_form_editpns.php';
				}
				elseif ($act=='updatepns') {
					include 'page/pegawai/peg_update_pns.php';
				}
				elseif ($act=='view') {
					include 'page/pegawai/peg_view.php';
				}
				elseif ($act=='addpns') {
					include 'page/pegawai/peg_add_pns.php';
				}
				elseif ($act=='savepns') {
					include 'page/pegawai/peg_save_pns.php';
				}
				elseif ($act=='deletepns') {
					include 'page/pegawai/peg_deletepns.php';
				}
				elseif ($act=='delete') {
					include 'page/pegawai/peg_delete.php';
				}
				else {
					echo 'Menu semua pegawai baik honorer maupun pns';
				}
				 ?>
		</div>
		<div class="col-lg-2 col-sm-2">
			<div class="list-group">
				<a href="<?php echo $url; ?>/pegawai/" class="list-group-item list-group-item-info active"><i class="fa fa-cogs fa-fw"></i>&nbsp; PEGAWAI</a>
				<a href="<?php echo $url; ?>/pegawai/add/" class="list-group-item"><i class="fa fa-plus text-primary fa-fw"></i>&nbsp; Tambah</a>
				<a href="<?php echo $url; ?>/pegawai/pokok/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Data Pokok</a>
				<a href="<?php echo $url; ?>/pegawai/pns/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Data PNS</a>
				<a href="<?php echo $url; ?>/pegawai/honorer/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Data Honorer</a>
			</div>
		</div>
	</div>
</div>
