<?php
/*
(balentb) Monitoring Kegiatan BPS Provinsi NTB
Created by I Putu Dyatmika
Tgl 1 Desember 2016

*/
//variabel-variabel

$ver_app='1.0.0';
$ver_db='1.0.0';
date_default_timezone_set('Asia/Makassar');
//variabel-variabel
$pengacak='Apa9817490Saja)(oo67__jnhHHzzAYIOLQPLM^^$#$!~~!@MMzzHKAOOJ7Lah^())$$$1256#$%@M7499541auLho';
$nama_bulan_panjang=array (1 => 'Januari', 'Pebruari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$nama_bulan_pendek=array (1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des');
$nama_hari_indo = array (0=> "Minggu", 1=> "Senin", 2=> "Selasa", 3=> "Rabu", 4=> "Kamis", 5=> "Jumat", 6=> "Sabtu");
$nama_hari_pendek = array (0=> "Min", 1=> "Sen", 2=> "Sel", 3=> "Rab", 4=> "Kam", 5=> "Jum", 6=> "Sab");
$nama_hari_eng_indo= array ("Sunday" => "Minggu", "Monday"=> "Senin","Tuesday" => "Selasa","Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jumat", "Saturday" => "Sabtu");
$nama_hari_eng_indo_pendek= array ("Sunday" => "Min", "Monday"=> "Sen","Tuesday" => "Sel","Wednesday" => "Rab", "Thursday" => "Kam", "Friday" => "Jum", "Saturday" => "Sab");
$UserLevel=array(1=>"User",2=>'Admin',3=>'SuperAdmin');
$StatusUmum=array(0=>'Tidak Aktif',1=>'Aktif');
$JenisKelamin=array(1=>'Laki-Laki',2=>'Perempuan');
$JenisUnit=array(1=>'Provinsi',2=>'Kabupaten');
$UnitEselon=array(1=>'I',2=>'II',3=>'III',4=>'IV');
$JenisKegiatan=array(1=>'Bulanan',2=>'Triwulanan',3=>'Semesteran',4=>'Tahunan',5=>'Subround',6=>'AdHoc');
$JenisDetilKegiatan=array(1=>'Pengiriman',2=>'Penerimaan');
$StatusKawin=array(1=>"Belum Menikah","Menikah","Cerai Hidup","Cerai Mati");
$StatusPegawai=array(1=>"Honorer",2=>"Pegawai Negeri");
$JenisAgama=array(1=>"Islam","Protestan","Katolik","Hindu","Budha","Konghuchu");
$JenisUnit=array(1=>"Provinsi","Kabupaten");
$ckpTipe=array(1=>'Utama',2=>'Tambahan');
$ckpEdit=array(1=>'Terbuka',2=>'Terkunci');
$ckpStatus=array(1=>'Draft',2=>'Diajukan',3=>'Disetujui',4=>'Ditolak');
$ckpStatDok=array(0=>'Belum dientri',1=>'Pelaksana',2=>'Atasan',3=>'Sudah diproses');
$JabatanPegawai=array(1=>'Kepala','Staf','KSK','Peltu');
$JenisPendidikan=array(1=>'<=SMA','D-IV/S1','S2','S3');
$SuratStatus=array(1=>'Draft',2=>'Belum disetujui',3=>'Sudah disetujui');
$SuratTujuan=array(1=>'Internal BPS',2=>'Eksternal BPS');
?>
