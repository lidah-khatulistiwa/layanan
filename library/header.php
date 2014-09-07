<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
		<?php
			include "setting/conf.php";
       		$query = mysql_query("select * from setting");
      		while ($buff = mysql_fetch_array($query)) 
        	{ echo $buff['nama_set']; }
    	?>
</title>
<meta name="keywords" content="sistem informasi pelayanan daerah, sisfopeda, ketapang, pemerintah ketapang" />
<meta name="description" content="Sistem Informasi Pelayanan Daerah - Pemerintah Daerah Kabupaten Ketapang" />
<meta name="author" content="Feri Harjulianto">
<!-- Mobile Specific Metas  ================================================== -->
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="asset/css/style.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="asset/style.css" type="text/css">
<link rel="stylesheet" href="asset/css/jcarousel_skin.css" type="text/css">
<link rel="stylesheet" type="text/css" href="asset/preloader/css/preloader.css"  />
<link rel="stylesheet" type="text/css" href="asset/prettyPhoto/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="asset/css/menusm.css" />
<link type="text/css" href="asset/ui_totop/css/ui.totop.css" rel="stylesheet" />
<link type="text/css" href="asset/twitter_tweet/jquery.tweet.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="asset/css/layout.css">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="asset/jquery.min.js"></script>

<!-- DC OneByOne Slider CSS -->
<link href="asset/sliders/onebyone/css/jquery.onebyone.css" rel="stylesheet" type="text/css">
<link href="asset/sliders/onebyone/css/animate.min.css" rel="stylesheet" type="text/css">

<!-- DC OneByOne Custom Fonts -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT Sans Narrow">
<!-- DC OneByOne Slider JS -->
<script src="asset/sliders/onebyone/js/jquery.onebyone.js"></script>
<script src="asset/sliders/onebyone/js/jquery.touchwipe.min.js"></script>



<?php include "sys-js.php" ?>

</head>