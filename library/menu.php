    <div class="row container">
      <div class="pull-left">
        <p>
          Telepon: 
          <?php
          include "setting/conf.php";
              $query = mysql_query("select * from setting");
              while ($buff = mysql_fetch_array($query)) 
              { echo $buff['telp_set']; }
          ?>
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
                        $query = "select * from kategori";
                              $hasil = mysql_query($query);
                              while ($qtabel = mysql_fetch_assoc($hasil))
                                  {
                                      echo '<li><a href="main.php?hal=layanan-kategori&kat_layanan='.$qtabel['nama_kat'].'" class="menu_navigation" ><span>'.$qtabel['nama_kat'].'</span></a></li>';
                                  }
                      ?>
                    </ul>
                  </li>
                  <li><a href="#" class="menu_navigation"><span>Nomer Darurat</span></a></li>
                  <li><a href="main.php?hal=kontak" class="menu_navigation"><span>Kontak Kami</span></a></li>
                </ul>
              </div>
            </div>
            <form class="navbar-search pull-right" id="search" action="#" method="get">
              <div class="input-append">
                <input type="text" class="span2 input-search" placeholder="Search:">
                <button type="submit" class="search-submit btn"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
        </div>
        <!-- container --> 
      </div>
    </div>
    <!-- header_menu -->