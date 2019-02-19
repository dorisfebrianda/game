<html>
    <head>
        <title>Google Map - Harviacode.com</title>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <div id="map" style="width: 600px; height: 300px;"></div> 
 
        <script type="text/javascript">
              
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-6.2196368,106.8315402,17);
 
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 13,
                  center: myLatlng
              };
              
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Monas"
              });
        </script> 
    </body>
</html>