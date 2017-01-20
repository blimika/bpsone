<?php
$peg_id=$lvl3;
$db = new db();
$conn = $db -> connect();
$sql_peg=$conn-> query("select * from m_pegawai where peg_id='$peg_id'");
$cek_peg=$sql_peg -> num_rows;
if ($cek_peg>0) {
$r=$sql_peg -> fetch_object();

?>
	
		<form id="formAddPegawai" name="formAddPegawai" action="<?php echo $url.'/'.$page;?>/update/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<legend>Edit pegawai <?php echo $r->peg_nama; ?></legend>
		<div class="form-group">
			<label for="pegawai_nik" class="col-sm-3 control-label">NIK</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nik" class="form-control" value="<?php echo $r->peg_nik;?>" placeholder="Nomor Induk Kependudukan" />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Lengkap</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama" class="form-control" placeholder="nama lengkap tanpa gelar" value="<?php echo $r->peg_nama;?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Panggilan</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama_panggilan" class="form-control" value="<?php echo $r->peg_panggilan;?>" placeholder="nama panggilan" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_jk" id="pegawai_jk" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								if ($i==$r->peg_jk) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$JenisKelamin[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_agama" class="col-sm-3 control-label">Agama</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
							<select class="form-control" name="pegawai_agama" id="pegawai_agama" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=6;$i++) {
							if ($i==$r->peg_agama) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$i.'" '.$pilih.'>'.$JenisAgama[$i].'</option>'."\n";
						}

						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_agama" class="col-sm-3 control-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
							<select class="form-control" name="pegawai_kawin" id="pegawai_kawin" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=4;$i++) {
							if ($i==$r->peg_kawin) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$i.'" '.$pilih.'>'.$StatusKawin[$i].'</option>'."\n";
						}

						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Tempat Lahir</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tempat_lahir" class="form-control" value="<?php echo $r->peg_tempat_lahir;?>" placeholder="Kota tempat lahir" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
				<div class="col-lg-3 col-sm-3" id="tgl_lahir">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tgl_lahir" id="pegawai_tgl_lahir" value="<?php echo $r->peg_tgl_lahir;?>" class="form-control" placeholder="YYYY-MM-DD" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_status" class="col-sm-3 control-label">Status Pegawai</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_status_pegawai">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								if ($i==$r->peg_status_peg) $pilih='selected="selected"';
							else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$StatusPegawai[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_status" class="col-sm-3 control-label">Status</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_status" id="pegawai_status">
						<option value="">Pilih Status</option>
						<?php
						for ($i=0;$i<=1;$i++)
							{
								if ($i==$r->peg_status) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$StatusUmum[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_unitkode" class="col-sm-3 control-label">Unit Kerja</label>
				<div class="col-sm-6">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_unitkode">
						<option value="">Pilih</option>
						<<?php
						$sql_unit = $conn->query("select * from unitkerja order by unit_jenis,unit_kode asc");
						while ($u = $sql_unit ->fetch_object()) {
							if ($u->unit_kode==$r->peg_unitkode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$u->unit_kode.'" '.$pilih.'>['.$u->unit_kode.'] '.$u->unit_nama.'</option>'."\n";
						}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_pegawai" name="submit_pegawai" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
		<input type="hidden" name="pegawai_id" value="<?php echo $r->peg_id;?>" />
</fieldset>
</form>
<?php }
else {
	echo 'data pegawai tidak ditemukan';
}
$conn->close(); 
?>