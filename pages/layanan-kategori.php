<?php 
include "setting/conf.php"; 
$kat_layanan = $_GET['kat_layanan'];

$query = mysql_query("select * from layanan where kat_layanan='$kat_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<div id="content">
    <div class="container" id="gallery" style="background:none;">
      <div class="row">
        <div class="separator"></div>
        <h1 class="text-center extrabold">Layanan <?php echo $data['kat_layanan']; ?></h1>
        <div class="border-sep"></div>
      </div>
      <div class="content_page">
        <div class="cols">
          <div class="row">

                  <?php
                  include "setting/conf.php";
                  $kat_layanan = $_GET['kat_layanan'];
                  $query = "SELECT * FROM layanan WHERE kat_layanan='$kat_layanan' ";
                    $hasil = mysql_query($query);
                    while ($qtabel = mysql_fetch_assoc($hasil))
                      {
                        echo '<div class="span4"><p><a href="main.php?hal=layanan-detail&id_layanan='.$qtabel['id_layanan'].'" class="btn btn-large btn-warning">'.$qtabel['jenis_layanan'].'</a></p></div>';
                      }
                  ?>
          </div>
        </div>
      </div>
    </div>
  </div>