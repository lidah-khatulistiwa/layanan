<?php
include('../../setting/conf.php');

//tangkap data dari form
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$email = $_POST['email'];
$level = $_POST['level'];


//update data di database sesuai user_id
$query = mysql_query("update user set password='$password',  email='$email', level='$level' where user_id='$user_id'") or die(mysql_error());

if ($query) {
	echo '<script>window.location.assign("../dashboard.php?hal=user")</script>';

}
?>