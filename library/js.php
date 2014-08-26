<script type="text/javascript" src="asset/js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="asset/prettyPhoto/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="asset/js/menusm.js"></script> 
<script type="text/javascript" src="asset/js/scripts.js"></script> 
<script type="text/javascript" src="asset/ui_totop/js/jquery.ui.totop.js" charset="utf-8"></script> 
<script type="text/javascript" src="asset/preloader/js/jquery.preloader.js" charset="utf-8"></script> 
<script type="text/javascript" src="asset/twitter_tweet/jquery.tweet.js" charset="utf-8"></script> 
<script type="text/javascript" src="asset/js/tinynav.min.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript">
var gmap;
function initialize() {
    var myOptions = {
   	 zoom: 13,
   	 center: new google.maps.LatLng(-1.8482467,109.9986433), // google map location to show
   	 mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    gmap = new google.maps.Map(document.getElementById('gmap_contact'),myOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> 
<script type="text/javascript">
  $(function () {
    $('#nav').tinyNav({
      active: 'selected',
      header: 'Navigation' 
    });
  });
</script>