<?php
include('../../setting/conf.php');

//tangkap data dari form
$id_layanan = $_POST['id_layanan'];
$jenis_layanan = $_POST['jenis_layanan'];
$kat_layanan=$_POST['kat_layanan'];
$syarat_layanan = $_POST['syarat_layanan'];
$mekanisme_layanan = $_POST['mekanisme_layanan'];
$waktu_layanan = $_POST['waktu_layanan'];
$biaya_layanan = $_POST['biaya_layanan'];
$tempat_layanan = $_POST['tempat_layanan'];
$telp_layanan = $_POST['telp_layanan'];


//update data di database sesuai id_layanan
$query = mysql_query("update layanan set jenis_layanan='$jenis_layanan', kat_layanan='$kat_layanan', syarat_layanan='$syarat_layanan', mekanisme_layanan='$mekanisme_layanan', waktu_layanan='$waktu_layanan', biaya_layanan='$biaya_layanan', tempat_layanan='$tempat_layanan', telp_layanan='$telp_layanan' where id_layanan='$id_layanan'") or die(mysql_error());

if ($query) {
	echo '<script>window.location.assign("../dashboard.php?hal=xlayanan")</script>';

}
?>