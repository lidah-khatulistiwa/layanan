<?php
error_reporting(0);
include "setting/conf.php"; 
$kat_layanan = "Telepon Penting";

$query = mysql_query("select * from layanan where kat_layanan='$kat_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<div id="content">
    <div class="container" id="gallery" style="background:none;">
      <div class="row">
        <div class="separator"></div>
        <h1 class="text-center extrabold">Layanan <?php echo $data['kat_layanan']; ?></h1><br>
        <div class="border-sep"></div>
      </div>
      <div class="content_page">
        <div class="cols">
          <div class="row">
                  <?php
                  $query = "SELECT * FROM layanan WHERE kat_layanan='$kat_layanan' ";
                    $hasil = mysql_query($query);
                    while ($qtabel = mysql_fetch_assoc($hasil))
                      {
                        echo '<div class="span4"><p><a href="#" class="btn btn-large btn-warning">'.$qtabel['jenis_layanan'].'<br>'.$qtabel['telp_layanan'].'</a></p></div>';
                      }
                  ?>
          </div>
        </div>
      </div>
    </div>
  </div>