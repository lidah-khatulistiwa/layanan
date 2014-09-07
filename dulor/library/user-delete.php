<?php
include('../../setting/conf.php');
mysql_query("DELETE from user WHERE user_id='$_GET[user_id]'");
echo '<script>window.location.assign("../dashboard.php?hal=user")</script>';

?>