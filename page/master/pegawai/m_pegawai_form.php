<?php
$user_no=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_user=$conn-> query("select * from users where user_no='$user_no'");
$cek_user=$sql_user -> num_rows;
if ($cek_user>0) {
$r=$sql_user -> fetch_object();

?>
	
		<form id="formAddPegawai" name="formAddPegawai" action="<?php echo $url.'/'.$page.'/'.$act;?>/save/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<legend>Tambah data pegawai baru</legend>
		<div class="form-group">
			<label for="pegawai_nik" class="col-sm-3 control-label">User ID</label>

				<div class="col-lg-3 col-sm-3">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_user_id" class="form-control" value="<?php echo $r->user_id;?>" disabled />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nik" class="col-sm-3 control-label">NIK</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nik" class="form-control" placeholder="Nomor Induk Kependudukan" />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Lengkap</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama" class="form-control" placeholder="nama lengkap tanpa gelar" value="<?php echo $r->user_nama;?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Panggilan</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama_panggilan" class="form-control" placeholder="nama panggilan" />
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
								echo '<option value="'.$i.'">'.$JenisKelamin[$i].'</option>';
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
							echo '<option value="'.$i.'">'.$JenisAgama[$i].'</option>'."\n";
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
							echo '<option value="'.$i.'">'.$StatusKawin[$i].'</option>'."\n";
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
					<input type="text" name="pegawai_tempat_lahir" class="form-control" placeholder="Kota tempat lahir" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
				<div class="col-lg-3 col-sm-3" id="tgl_lahir">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tgl_lahir" id="pegawai_tgl_lahir" class="form-control" placeholder="YYYY-MM-DD" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_status" class="col-sm-3 control-label">Status Pegawai</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_status_pegawai" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								echo '<option value="'.$i.'">'.$StatusPegawai[$i].'</option>';
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
						<select class="form-control" name="pegawai_status" id="pegawai_status" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Status</option>
						<?php
						for ($i=0;$i<=1;$i++)
							{
								echo '<option value="'.$i.'">'.$StatusUmum[$i].'</option>';
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
						<select class="form-control" name="pegawai_unitkode" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<<?php
						$sql_unit = $conn->query("select * from unitkerja order by unit_jenis,unit_kode asc");
						while ($u = $sql_unit ->fetch_object()) {
							echo '<option value="'.$u->unit_kode.'" >['.$u->unit_kode.'] '.$u->unit_nama.'</option>'."\n";
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
		<input type="hidden" name="pegawai_user_no" value="<?php echo $r->user_no;?>" />
</fieldset>
</form>
<?php }
else {
	echo 'Akses menu tambah pegawai tidak bisa langsung harus melalui menu users';
}
$conn->close(); 
?>