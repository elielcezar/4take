 

<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.scrollTo-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.localscroll-min.js"></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskMoney.js" type="text/javascript"></script>

<script src="<?php print base_path() . path_to_theme() ?>/js/ekko-lightbox.js"></script>

<script src="<?php print base_path() . path_to_theme() ?>/js/aos.js"></script>

<script type="text/javascript">
jQuery(function( $ ){	
	$('.intro-header').localScroll();

    $('#myCarousel .item:nth-child(1)').addClass('active');

    $('#destaque a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: target.offset().top
          }, 1000);
      }
    });


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
    
	
});
</script>

 <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {

                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,
                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-25.4433651, -49.2913729),
                    //center: new google.maps.LatLng(40.6700, -73.9400), 


                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{
                        "featureType":"all",
                        "elementType":"labels.text.fill",
                        "stylers":[{"saturation":36},{"color":"#ffffff"},{"lightness":80}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":17}]}]


                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');


                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-25.443924, -49.2899999),
                    map: map,
                    title: 'Snazzy!'
                });

                var infowindow = new google.maps.InfoWindow({
                  content:'<a href="https://www.google.com.br/maps/place/Av.+do+Batel,+1693+-+Batel,+Curitiba+-+PR,+80420-090/@-25.4433651,-49.2913729,17z/data=!4m13!1m7!3m6!1s0x94dce38ecd3124df:0xf2d3de8b37f095d2!2sAv.+do+Batel,+1693+-+Batel,+Curitiba+-+PR,+80420-090!3b1!8m2!3d-25.44337!4d-49.2891842!3m4!1s0x94dce38ecd3124df:0xf2d3de8b37f095d2!8m2!3d-25.44337!4d-49.2891842" target="_blank">Saiba como chegar</a>'
                  });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                  });
            }


        </script>

        <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcKpBsoOsztoQl208iICZ9yUJCIzpZ3AU&callback=initMap">
    </script>
