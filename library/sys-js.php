<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'layanan-detail' :
                  if(!file_exists("library/js.html")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "library/js.html" ?>
                
              
             

                            
              <?php 
                break;
              }
          }
              ?>