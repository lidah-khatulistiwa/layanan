<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'utama' :
                  if(!file_exists("library/slider.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "library/slider.php" ?>
                            
              <?php 
                break;
              }
          }
              ?>