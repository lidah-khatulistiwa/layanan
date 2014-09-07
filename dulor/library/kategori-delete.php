<?php
include('../../setting/conf.php');
mysql_query("DELETE from kategori WHERE id_kat='$_GET[id_kat]'");
echo '<script>window.location.assign("../dashboard.php?hal=kategori")</script>';

?>