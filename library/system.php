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
                case 'pencarianx':
                  if(!file_exists("pages/cari.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/cari.php" ?>

                <?php 
                break;
                case 'telepon':
                  if(!file_exists("pages/telepon-penting.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/telepon-penting.php" ?>
              
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
                case 'layanan-kategori2':
                  if(!file_exists("pages/layanan-kategori2.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-kategori2.php" ?>




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
                case 'layanan-detail2':
                  if(!file_exists("pages/layanan-detail2.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-detail2.php" ?>

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