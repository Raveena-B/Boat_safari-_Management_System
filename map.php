<!--source code: https://developers.google.com/maps/documentation/javascript/adding-a-google-map -->
<!--get API key:https://www.youtube.com/watch?v=1JNwpp5L4vM&t=1s and https://www.youtube.com/watch?v=_UTQOf19_xg-->

<?php include('src/includes/header.php'); ?>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 900px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
      <center>
    <h3>My Google Maps</h3>
    </center>
    <!--The div element for the map -->
    <div id="map"></div>



    <?php include('src/includes/footer.php'); ?>

    <script>
// Initialize and add the map
 function initMap() {
//The location of Uluru
  var uluru = {lat: 6.4189, lng: 80.0060};
 //The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 8, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAqFs-fPW1GNR9HKrzCg2BGHsI118xuBg&callback=initMap">
    </script>

