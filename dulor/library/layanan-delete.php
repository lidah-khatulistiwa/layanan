<?php
include('../../setting/conf.php');
mysql_query("DELETE from layanan WHERE id_layanan='$_GET[id_layanan]'");
echo '<script>window.location.assign("../dashboard.php?hal=xlayanan")</script>';

?>