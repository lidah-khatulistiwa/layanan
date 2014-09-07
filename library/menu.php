    <div class="row container-fluid header_bh">
      <div class="pull-right span5 col-xs-12">
        <p>
          <i class="pi-header-block-icon icon-phone pi-icon-base pi-icon-square"></i>
          Telepon: 
          <strong>
            <?php
            include "setting/conf.php";
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['telp_set']; }
            ?>
          </strong>
        </p>
      </div>

      <div class="pull-right span4 col-xs-12">
        <p>
          <i class="pi-header-block-icon icon-phone pi-icon-base pi-icon-square"></i>
          E-Mail: 
          <strong>
            <?php
            include "setting/conf.php";
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['email_set']; }
            ?>
          </strong>
        </p>
      </div>


    </div>
  </div>
  <!-- #header_top-->
  <div class="header_bg">
    <div id="header_menu">
      <div class="container">
        <div class="logo"> <a href="index.php"> <img src="<?php
              include "setting/conf.php";
                  $query = mysql_query("select * from setting");
                  while ($buff = mysql_fetch_array($query)) 
                  { 
                    echo $buff['url_set'];
                    echo $buff['logo_set']; 
                  }
              ?>"></a> </div>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="nav nav-collapse pull-left">
              <div class="menu"> 
                <ul id="nav" class="sf-menu menusm">
                  <li><a href="main.php?hal=utama" class="menu_navigation"><span>Home</span></a></li>
                  <li><a href="main.php?hal=layanan" class="menu_navigation"><span>Semua Layanan</span></a></li>
                  <li>
                    <a href="" class="menu_navigation">
                      <span>Kategori Layanan</span>
                    </a>
                    <ul>
                      <?php
                        include "setting/conf.php";
                        $query = "select * from kategori where nama_kat!='Telepon Penting' AND nama_kat!='Pelayanan Lain'";
                              $hasil = mysql_query($query);
                              while ($qtabel = mysql_fetch_assoc($hasil))
                                  {
                                      echo '<li><a href="main.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'" class="menu_navigation" ><span>'.$qtabel['nama_kat'].'</span></a></li>';
                                  }
                      ?>
                    </ul>
                  </li>
                  <li><a href="main.php?hal=telepon" class="menu_navigation"><span>Nomor Darurat</span></a></li>
                  <li><a href="main.php?hal=kontak" class="menu_navigation"><span>Kontak Kami</span></a></li>
                </ul>
              </div>
            </div>
            <form class="navbar-search pull-right" name="formcari" id="search" action="main.php?hal=pencarianx" method="post">
              <div class="input-append">
                <input type="text" name="jenis_layanan" class="span2 input-search" placeholder="Search:">
                <button type="submit" name="submit" class="search-submit btn"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
        </div>
        <!-- container --> 
      </div>
    </div>
    <!-- header_menu -->