<?php
include('conf.php');
;
session_start();

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	echo '<script>window.location.assign("../dulor/login.php")</script>';
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	echo '<script>window.location.assign("../dulor/login.php")</script>';
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	echo '<script>window.location.assign("../dulor/login.php")</script>';
	break;
}

$q = mysql_query("select * from user where username='$username' and password='$password'");
$r=mysql_fetch_array($q);

if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['username'] = $r['username'];
	$_SESSION['fullname'] = $r['fullname'];
	$_SESSION['level'] = $r['level'];
	$_SESSION['user_id'] = $r['user_id'];


	
	//redirect ke halaman index
	echo '<script>window.location.assign("../dulor/dashboard.php?hal=home")</script>';
} else {
	//kalau username ataupun password tidak terdaftar di database
	echo '<script>window.location.assign("../dulor/login.php")</script>';
}
?>