<div id="content">
    <div class="container" id="gallery" style="background:none;">
      <div class="row">
        <div class="separator"></div>
        <h1 class="text-center extrabold">Hasil Pencarian</h1>
        <div class="border-sep"></div>
      </div>
      <div class="content_page">
        <div class="cols">
          <div class="row">
			<?php
			include "setting/conf.php";
			$jenis_layanan= $_POST['jenis_layanan']; //get the nama value from form
			$q = "SELECT * from layanan where jenis_layanan like '%$jenis_layanan%' "; //query to get the search result
			$result = mysql_query($q);
			echo '<div class="span12">';
			while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
			echo '<a href="main.php?hal=layanan-detail&id_layanan='.$data['id_layanan'].'" target="_blank">';
			echo '<h3>'.$data['jenis_layanan'].'</h3></a>';
			}
			echo '</div>';
			echo '<hr>';
			
			?>
          </div>
        </div>
      </div>
    </div>
  </div>