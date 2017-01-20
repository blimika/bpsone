<div class="container">
	<div class="row konten">
		<div class="col-lg-10 col-sm-10">
					<?php
				if ($act=='pokok') {
					include 'page/pegawai/peg_pokok.php';
				}
				elseif ($act=='pns') {

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
				else {
					echo 'Menu semua pegawai baik honorer maupun pns';
				}
				 ?>
		</div>
		<div class="col-lg-2 col-sm-2">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-info active"><i class="fa fa-cogs fa-fw"></i>&nbsp; PEGAWAI</a>
				<a href="<?php echo $url; ?>/pegawai/pokok/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Data Pokok</a>
				<a href="<?php echo $url; ?>/pegawai/pns/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Data PNS</a>
				<a href="<?php echo $url; ?>/pegawai/honorer/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Data Honorer</a>
			</div>
		</div>
	</div>
</div>
