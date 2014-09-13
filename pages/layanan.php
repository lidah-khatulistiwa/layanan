<div id="content">
    <div class="container">
      <div class="row">
        <div class="separator"></div>
        <h1 class="text-center extrabold">Semua Layanan</h1>
        <div class="border-sep"></div>
      </div>
      <div class="content_page">
        <div class="container">
          <div class="row">
            <div class="cli-xs-12 cli-sm-6 cli-md-3">
            <ul id="itcircle-list-bottom" class="itcircle-list itcircle-box clearfix">
              <?php
                  error_reporting(0);
                include "setting/conf.php";
                $query = "select * from kategori where nama_kat!='Telepon Penting' AND nama_kat!='Pelayanan Lain'";
                  $hasil = mysql_query($query);
                  while ($qtabel = mysql_fetch_assoc($hasil))
                      {
                        echo '<li class="item"><a href="main.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'"> <h2 data-type="mText" class="itcircle-list-item text-center">'.$qtabel['nama_kat'].'</h2><span data-type="icon" class="itcircle-list-icon itcircle-list-icon-care itcircle-list-item"><div><center><br><img src="images/ico/11.png" width="30px" height="30px"></center></div><i class="icon-office icon-4x auto-margin-top"></i><span class="itcircle-list-arrow"></span></a>';
                        echo '</li>';
                      }
                  ?>
            </ul>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>