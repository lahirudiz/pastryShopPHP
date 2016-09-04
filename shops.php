<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Pastry Shop | Shops</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  		<?php
   			include('header.php');
			include('footer.php');
   		?>
<style>
.pageContentWrapper {
margin-bottom:-23px;
	}	
.jumbotron {
margin-bottom: 0px;
	}
.map {
position:absolute;
left:20%;	
	}	
</style>     
        
</head>
<body>

<div class="map">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://privacypolicytemplate.net">privacy policy template</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(6.928101048851677,79.861414661377),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.928101048851677,79.861414661377)});infowindow = new google.maps.InfoWindow({content:'<strong>The Pastry Shop</strong><br>Colombo, Sri lanka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<p>Hotels</p>
</body>
</html>
