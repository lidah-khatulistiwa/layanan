<div id="content">
    <div class="container" id="gallery" style="background:none;">
      <div class="row">
        <div class="separator"></div>
        <h1 class="text-center extrabold">Semua Layanan</h1>
        <div class="border-sep"></div>
      </div>
      <div class="content_page">
        <div class="cols">
          <div class="row">

                  <?php
                include "setting/conf.php";
                $query = "select * from kategori";
                  $hasil = mysql_query($query);
                  while ($qtabel = mysql_fetch_assoc($hasil))
                      {
                        echo '<div class="span4"><p><a href="main.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'" class="btn btn-large btn-warning">'.$qtabel['nama_kat'].'</a></p></div>';
                      }
                  ?>
          </div>
        </div>
      </div>
    </div>
  </div>