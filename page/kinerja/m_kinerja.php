<div class="container">
<div class="row konten">
		<div class="col-lg-10 col-sm-10">
		<div class="row">
				<?php
				if ($act=='ckp') {
					include 'page/kinerja/ckp/ckp.php';
				}
				else {
					echo 'Menu Kinerja setiap pegawai bidang bagian dan kabupaten/kota';
				}
				 ?>
		</div>
		</div>
		<div class="col-lg-2 col-sm-2">

			<div class="list-group">
			<a href="#" class="list-group-item list-group-item-warning active"><i class="fa fa-cogs fa-fw"></i>&nbsp; KINERJA</a>
			<a href="<?php echo $url; ?>/kinerja/kegiatan/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Kegiatan</a>
			<a href="<?php echo $url; ?>/kinerja/bidang/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Bidang</a>
			<a href="<?php echo $url; ?>/kinerja/kabupaten/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; Kabupaten</a>
			<a href="<?php echo $url; ?>/kinerja/ckp/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; CKP</a>
			<a href="<?php echo $url; ?>/kinerja/sakip/" class="list-group-item"><i class="fa fa-dot-circle-o text-primary fa-fw"></i>&nbsp; SAKIP</a>
		</div>


		</div>
	</div>
</div>
