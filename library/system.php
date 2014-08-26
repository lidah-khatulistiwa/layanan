<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'utama' :
                  if(!file_exists("pages/dashboard.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/dashboard.php" ?>
                
              
              
                <?php 
                break;
                case 'layanan':
                  if(!file_exists("pages/layanan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan.php" ?>

                <?php 
                break;
                case 'layanan-kategori':
                  if(!file_exists("pages/layanan-kategori.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-kategori.php" ?>



                <?php 
                break;
                case 'layanan-adminduk':
                  if(!file_exists("pages/layanan-adminduk.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-adminduk.php" ?>

                <?php 
                break;
                case 'layanan-detail':
                  if(!file_exists("pages/layanan-detail.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-detail.php" ?>

                <?php 
                break;
                case 'kontak':
                  if(!file_exists("pages/kontak.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/kontak.php" ?>

                <?php 
                break;
                case 'tentang':
                  if(!file_exists("pages/tentang.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/tentang.php" ?>
             

                            
              <?php 
                break;
              }
          }
              ?>