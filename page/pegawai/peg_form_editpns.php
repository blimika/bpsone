<?php
$peg_id=$lvl3;
$db = new db();
$conn = $db -> connect();
$sql_peg=$conn-> query("select * from m_pegawai,peg_pns where m_pegawai.peg_id=peg_pns.peg_id and peg_pns.peg_id='$peg_id'");
$cek_peg=$sql_peg -> num_rows;
if ($cek_peg>0) {
$r=$sql_peg -> fetch_object();
$nama_unit=get_nama_unit($r->peg_unitkode);
?>
	
		<form id="formAddDetilPegawai" name="formAddDetilPegawai" action="<?php echo $url.'/'.$page;?>/updatepns/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<legend>Tambah detil pegawai</legend>
		<div class="form-group">
			<label for="pegawai_nik" class="col-sm-3 control-label">Pegawai ID</label>

				<div class="col-lg-2 col-sm-2">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_user_id" class="form-control" value="<?php echo $r->peg_id;?>" disabled />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Lengkap</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama" class="form-control" placeholder="nama lengkap tanpa gelar" value="<?php echo $r->peg_nama;?>" disabled/>
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nip" class="col-sm-3 control-label">NIP BARU</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nip" class="form-control" placeholder="NIP Baru" value="<?php echo $r->peg_nip;?>" />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nip_lama" class="col-sm-3 control-label">NIP LAMA</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nip_lama" class="form-control" placeholder="NIP Lama" value="<?php echo $r->peg_nip_lama;?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_gol_cpns" class="col-sm-3 control-label">Pangkat/Gol CPNS</label>
				<div class="col-sm-5">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_gol_cpns" id="pegawai_gol_cpns" >
						<option value="">Pilih</option>
						<?php
						$sql_gol_cpns = $conn->query("select * from m_gol order by gol_kode asc");
						while ($g = $sql_gol_cpns ->fetch_object()) {
							if ($r->peg_gol_cpns==$g->gol_kode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$g->gol_kode.'" '.$pilih.'>('.$g->gol_nama.') '.$g->gol_jabatan.'</option>'."\n";
						}
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_cpns" class="col-sm-3 control-label">TMT CPNS</label>
				<div class="col-lg-3 col-sm-3" id="tgl_lahir">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tmt_cpns" id="pegawai_tmt_cpns" class="form-control" placeholder="YYYY-MM-DD" value="<?php echo $r->peg_tmt_cpns;?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_gol_pns" class="col-sm-3 control-label">Pangkat/Gol Sekarang</label>
				<div class="col-sm-5">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_gol_pns" id="pegawai_gol_pns" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$sql_gol_pns = $conn->query("select * from m_gol order by gol_kode asc");
						while ($g2 = $sql_gol_pns ->fetch_object()) {
							if ($r->peg_gol_pns==$g2->gol_kode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$g2->gol_kode.'" '.$pilih.'>('.$g2->gol_nama.') '.$g2->gol_jabatan.'</option>'."\n"; }
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_pns" class="col-sm-3 control-label">TMT PNS</label>
				<div class="col-lg-3 col-sm-3" id="tgl_lahir">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tmt_pns" id="pegawai_tmt_pns" class="form-control" placeholder="YYYY-MM-DD" value="<?php echo $r->peg_tmt_pns;?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_unitkode" class="col-sm-3 control-label">Unit Kerja</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_unitkode" class="form-control" value="<?php echo $nama_unit;?>" disabled/>
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_jabatan" class="col-sm-3 control-label">Jabatan Terakhir</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Jabatan Terakhir</option>
						<?php
						$i=1;
						for ($i=1;$i<=4;$i++)
							{
								if ($r->peg_jabatan==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$JabatanPegawai[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_jabatan" class="col-sm-3 control-label">TMT Jabatan</label>
				<div class="col-lg-3 col-sm-3" id="tgl_lahir">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tmt_jabatan" id="pegawai_tmt_jabatan" class="form-control" placeholder="YYYY-MM-DD" value="<?php echo $r->peg_tmt_jabatan;?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_pendidikan" class="col-sm-3 control-label">Pendidikan</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_pendidikan" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$i=1;
						for ($i=1;$i<=4;$i++)
							{
								if ($r->peg_pendidikan==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$JenisPendidikan[$i].'</option>';
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
	echo 'ID Pegawai tidak ditemukan';
}
$conn->close(); 
?>