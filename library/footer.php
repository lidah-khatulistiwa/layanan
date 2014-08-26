<?php 
include "setting/conf.php"; 
$id_set = 1;

$query = mysql_query("select * from setting where id_set='$id_set'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<div class="container">
    <div class="cols">
      <div class="row">
        <div class="span3 copyright">
          <h4>SISFOPEDA</h4>
            <p><a href="main.php?hal=tentang">Tentang Layanan</a></p>
            <p><a href="main.php?hal=tentang">Bagi Unsur Pemerintah</a></p>
            <p><a href="main.php?hal=tentang">Bagi Unsur Masyarakat</a></p>
        </div>
        <div class="span3">
          <h4>Kicauan</h4>
          <!-- DC Twitter Start --> 
          <!-- Generate your own embedded timeline: https://dev.twitter.com/docs/embedded-timelines --> 
          <a class="twitter-timeline" href="https://twitter.com/DevCodes" data-widget-id="346557522754293760" width="230" height="200" data-chrome="nofooter noheader transparent noscrollbar" data-theme="dark" data-link-color="#ccc">Tweets</a> 
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
          <!-- DC Twitter End --> 
        </div>

        <div class="span3">
          <h4>Kontak kami</h4>
          <div class="post"> 
            <p> 
              Alamat : <?php echo $data['alamat_set']; ?> <br>
              Telepon: <?php echo $data['telp_set']; ?> <br>
              E-mail : <?php echo $data['email_set']; ?>

            </p>
            <br />
          </div>
        </div>


        <div class="span3 copyright">
          <h4>Partner</h4>
            <div>
              <a href="http://mediacreativindo.com" target="_blank">
                <img src="<?php
                      include "setting/conf.php";
                          $query = mysql_query("select * from setting");
                          while ($buff = mysql_fetch_array($query)) 
                          { 
                            echo $buff['url_set'];
                            echo $buff['footer_set']; 
                          }
                      ?>" alt="">
              </a>
            </div>  
            
        </div>

      </div>
    </div>
    <div class="footer_sep"></div>
  </div>
  <div class="copyright text-center">
    <?php
        include "setting/conf.php";
        $query = mysql_query("select * from setting");
        while ($buff = mysql_fetch_array($query)) 
        { echo $buff['copy_set']; }
        ?>
  </div>
</div>
<!-- container cols -->